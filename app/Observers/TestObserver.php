<?php


namespace App\Observers;

use App\Test;
use Illuminate\Support\Facades\Auth;

class TestObserver
{
    /**
     * Handle the test "created" event.
     *
     * @param  \App\Test  $test
     * @return void
     */
    public function created(Test $test)
    {
        
        /*if (Auth::check())
        {
            $test->created_by_user_id = Auth::id();
            //dd($test->created_by_user_id);
            $test->save();

        }
            */
        
    }

    /**
     * Handle the test "updated" event.
     *
     * @param  \App\Test  $test
     * @return void
     */
    public function updated(Test $test)
    {
        //
    }

    /**
     * Handle the test "deleted" event.
     *
     * @param  \App\Test  $test
     * @return void
     */
    public function deleted(Test $test)
    {
        //
    }

    /**
     * Handle the test "restored" event.
     *
     * @param  \App\Test  $test
     * @return void
     */
    public function restored(Test $test)
    {
        //
    }

    /**
     * Handle the test "force deleted" event.
     *
     * @param  \App\Test  $test
     * @return void
     */
    public function forceDeleted(Test $test)
    {
        //
    }
}
