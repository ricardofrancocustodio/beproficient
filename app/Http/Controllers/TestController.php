<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use App\Questionhasanswer;
use App\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
       //die();

        $array_question         = Question::where('questions.accent', $request->type)->pluck('id_question')->toArray();

        $shuffle                = Arr::shuffle($array_question);
      

        $question               = Question::select('questions.id_question', 'questions.soundquestion', 'questions.img', 'questions.text', 'questions.vid', 'questions.accent','questions.duration')
                //->where('questions.accent', $request->type)
                ->findOrFail($shuffle[0]);
                //->findOrFail(18);
    
        $questioncount          = count($shuffle);

        $type                   = $request->type;
        $question1              = DB::getPDO()->lastInsertId();


   
        return view('tests.index', compact('question', 'question1', 'questioncount', 'type'));
            

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tests (Request $request)
    {

        //funfando
         //dd($request->recordedAudio);

         //pegar dados e salvar no banco


        
    //return response()->json(['success']);

    }

    
     public function instructions (Request $request)
    {
        
        $instructions = $request->get('id_testtype');

        //dd($instructions);

        return view('tests.instructions',  ['instructions' => $instructions]);


    }

    public function testlist()
    {
        //

        $test = DB::table('tests')
            ->join('testtypes', 'tests.id_testtype', '=', 'testtypes.id_testtype')
            //->select('testtypes.name')
            ->where('tests.created_by_user_id', Auth::id())
            ->orderBy('tests.id_test', 'desc')
            ->paginate(5);

        $test2 = DB::table('tests')
            ->join('testtypes', 'tests.id_testtype', '=', 'testtypes.id_testtype')
            //->select('tests.id_test')
            ->where('tests.created_by_user_id', Auth::id())
            ->pluck('tests.id_test');
            //->get();


        return view('tests.testlist', compact('test', 'test2'));
        

    }

    public function englishproficiencytest()
    {
        //

        $test = DB::table('users')->pluck('id', 'name');

        return view('tests.englishproficiencytest', compact('test'));
        

    }

     public function testquestion($id)
    {
        //dd($id);
        $test = Question::join('questionhasanswers', 'questions.id_question','=', 'questionhasanswers.id_question')
                ->select('questions.text', 'questionhasanswers.answer')         
                ->where('questionhasanswers.id_test',$id)
                ->get();

        $test2 = Test::join('questionhasanswers', 'tests.id_test','=', 'questionhasanswers.id_test')
                ->select('questionhasanswers.answer')     
                ->findOrFail($id);
        //dd($test2);

        return view('tests.testquestion', compact('test', 'test2'));//)->withTest($test);
        

    }




    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$question                   = new Question();
        // primeiro salva as requisiçoes no banco 
        $test                       = new Test();
        $test->id_testtype          = $request->id_testtype;
        $test->created_by_user_id   = Auth::id();
        $test->save();

        $type = $test->id_testtype;
       

         // segundo busca as linhas de questoes no bd e faz um shuffle (random)
         //... sem incluir as que ja foram escolhidas anteriormente para evitar repetiçoes

         //retona para a mesma view com as informaçoes sobre a nova questao.
         //return view ('tests.index',  ['type' => $type]);
         return redirect()->route('tests.index', ['type' => $type]);
    }

    public function savequestions(Request $request)
    {
        //dd($request);

        $test = Test::latest()->first();

        $questionhasanswer                      = new Questionhasanswer();
        $questionhasanswer->id_test             = $test->id_test;
        $questionhasanswer->id_question         = $request->id_question; //vem da index
        $questionhasanswer->answer              = $request->recordedAudio;
        $questionhasanswer->save();

        $type                                   = $request->type;

        return redirect()->route('tests.index', ['type' => $type]);

        //return redirect ('tests');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        //
        $test  = Test::join('questionhasanswer', 'tests.id_test', 'questionhasanswer.id_test')
            ->findOrFail($id);

            dd($test);
        
        $test->delete();

        return redirect('testlist')->with('flash_message', 'Test deleted!');
    }
}
