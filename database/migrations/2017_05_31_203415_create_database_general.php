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
            $table->string('P_I_name');
            $table->string('P_I_dba_name');
            $table->string('P_I_address');
            $table->string('P_I_city');
            $table->string('P_I_dba_state');
            $table->string('P_I_dba_zip_code');

            $table->json('insurance');
            $table->json('general_liability');
            $table->json('auto_liability');
            $table->json('umbrella_liability');

            $table->string('W_C_insurance_letter');
            $table->string('W_C_propretor');
            $table->json('W_C_office');
            $table->string('W_C_options_addl_subr');
            $table->string('W_C_policy_number');
            $table->date('W_C_eff_date');
            $table->date('W_C_exp_date');
            $table->string('W_C_statutory_limits');
            $table->string('W_C_other');
            $table->string('W_C_each_accident');
            $table->string('W_C_ea_employee');
            $table->string('W_C_policy_limit');

            $table->string('A_C_a_insurance_letter');
            $table->string('A_C_a_policy_type');
            $table->string('A_C_a_options_add_insurance_surrogation');
            $table->string('A_C_a_policy_number');
            $table->date('A_C_a_eff_date');
            $table->date('A_C_a_exp_date');
            $table->string('A_C_a_coverage_limits');

            $table->string('A_C_b_insurance_letter');
            $table->string('A_C_b_policy_type');
            $table->string('A_C_b_options_add_insurance_surrogation');
            $table->string('A_C_b_policy_number');
            $table->date('A_C_b_eff_date');
            $table->date('A_C_b_exp_date');
            $table->string('A_C_b_coverage_limits');

            $table->string('description');
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
