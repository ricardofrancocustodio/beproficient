<?php

namespace App\Observers;

use App\Test;

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
        //
        if (auth()->check())
        {
            $test->created_by_user_id = auth()->id();
            $test->save();

        }
        
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
