<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            
            $table->bigIncrements('created_by_user_id')->nullable();
            $table->foreign('created_by_user_id')->references('id')->on('users');
            $table->string('id_test');
            $table->string('id_testtype');
            $table->string('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
}
