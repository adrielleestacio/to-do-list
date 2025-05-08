<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('todo_lists', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->boolean('is_complete')->default(false);
    //         $table->timestamps();
    //     });
    // }

    // filepath: c:\xampp\htdocs\To-do-list\myapp\database\migrations\xxxx_xx_xx_xxxxxx_create_todo_lists_table.php
    public function up()
    {
        Schema::create('todo_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_complete')->default(false);
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
        Schema::dropIfExists('todo_lists');
    }
}