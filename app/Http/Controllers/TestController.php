<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // quando renderizar a index tem de passar os dados do usuario para recuperar e salvar no banco

        $test = DB::table('users')->pluck('id', 'name');
        
        $session_id = session()->getId();

        //return view('tests.index', ['users' => $test]);
        return view('tests.index', compact('test', 'session_id'));
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

        $test = DB::table('users')->pluck('id', 'name');

        return view('tests.testlist', compact('test'));
        

    }

    public function englishproficiencytest()
    {
        //

        $test = DB::table('users')->pluck('id', 'name');

        return view('tests.englishproficiencytest', compact('test'));
        

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

        // primeiro salva as requisiçoes no banco 
        $test                       = new Test();
        $test->id_testtype          = $request->id_testtype;
        $test->created_by_user_id   = Auth::id();

        //dd($test);
        $test->save();


         
         // segundo busca as linhas de questoes no bd e faz um shuffle (random)
         //... sem incluir as que ja foram escolhidas anteriormente para evitar repetiçoes

         //retona para a mesma view com as informaçoes sobre a nova questao.
         return view('tests.index');
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
    }
}
