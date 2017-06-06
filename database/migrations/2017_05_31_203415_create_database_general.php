<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FormControl', function (Blueprint $table) {
            $table->increments('id');
            /* Foreign key Users */
            $table->integer('userId')->unsigned();
            $table->foreign('userId')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('P_I_name')->nullable();
            $table->string('P_I_dba_name')->nullable();
            $table->string('P_I_address')->nullable();
            $table->string('P_I_city')->nullable();
            $table->string('P_I_dba_state')->nullable();
            $table->string('P_I_dba_zip_code')->nullable();

            $table->json('insurance')->nullable();
            $table->json('general_liability')->nullable();
            $table->json('auto_liability')->nullable();
            $table->json('umbrella_liability')->nullable();

            $table->string('W_C_insurance_letter')->nullable();
            $table->string('W_C_propretor')->nullable();
            $table->json('W_C_office')->nullable();
            $table->string('W_C_options_addl_subr')->nullable();
            $table->string('W_C_policy_number')->nullable();
            $table->date('W_C_eff_date')->nullable();
            $table->date('W_C_exp_date')->nullable();
            $table->string('W_C_statutory_limits')->nullable();
            $table->string('W_C_other')->nullable();
            $table->string('W_C_each_accident')->nullable();
            $table->string('W_C_ea_employee')->nullable();
            $table->string('W_C_policy_limit')->nullable();

            $table->string('A_C_a_insurance_letter')->nullable();
            $table->string('A_C_a_policy_type')->nullable();
            $table->string('A_C_a_options_add_insurance_surrogation')->nullable();
            $table->string('A_C_a_policy_number')->nullable();
            $table->date('A_C_a_eff_date')->nullable();
            $table->date('A_C_a_exp_date')->nullable();
            $table->string('A_C_a_coverage_limits')->nullable();

            $table->string('A_C_b_insurance_letter')->nullable();
            $table->string('A_C_b_policy_type')->nullable();
            $table->string('A_C_b_options_add_insurance_surrogation')->nullable();
            $table->string('A_C_b_policy_number')->nullable();
            $table->date('A_C_b_eff_date')->nullable();
            $table->date('A_C_b_exp_date')->nullable();
            $table->string('A_C_b_coverage_limits')->nullable();

            $table->string('description')->nullable();
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
