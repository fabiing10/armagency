<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('certificate_holder_name')->nulleable();
          $table->string('address')->nullable();
          $table->string('phone_number')->nullable();
          $table->string('fax')->nullable();
          $table->string('email')->nullable();
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('clients_user', function (Blueprint $table) {
          $table->increments('id');
          /* Foreign key Users */
          $table->integer('userId')->unsigned();
          $table->foreign('userId')
              ->references('id')->on('users')
              ->onDelete('cascade');
          $table->string('status')->nullable();
          /* Foreign key Users */
          $table->integer('clientId')->unsigned();
          $table->foreign('clientId')
              ->references('id')->on('clients')
              ->onDelete('cascade');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('history_send', function (Blueprint $table) {
          $table->increments('id');
          /* Foreign key Users */
          $table->integer('userId')->unsigned();
          $table->foreign('userId')
              ->references('id')->on('users')
              ->onDelete('cascade');
          $table->string('status')->nullable();
          /* Foreign key Users */
          $table->integer('clientId')->unsigned();
          $table->foreign('clientId')
              ->references('id')->on('clients')
              ->onDelete('cascade');
          $table->date('sent_date')->nullable();
          $table->rememberToken();
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
        //
    }
}
