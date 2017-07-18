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
            $table->string('status')->nullable();
            $table->date('exp_date')->nullable();
            /* contact info agency */
            $table->string('C_I_name')->nullable();
            $table->string('C_I_phone')->nullable();
            $table->string('C_I_fax')->nullable();
            $table->string('C_I_email')->nullable();
            $table->string('C_I_producer_id')->nullable();
            /* producer information */
            $table->string('P_I_name')->nullable();
            $table->string('P_I_dba_name')->nullable();
            $table->string('P_I_address')->nullable();
            $table->string('P_I_city')->nullable();
            $table->string('P_I_dba_state')->nullable();
            $table->string('P_I_dba_zip_code')->nullable();
            /* insurance */
            $table->json('insurance')->nullable();
            /* general liability */
            $table->json('general_liability')->nullable();
            $table->json('g_l_options')->nullable();
            $table->json('g_l_options_limit_per')->nullable();
            $table->json('g_l_options_addl_subr')->nullable();
            /* auto liability */
            $table->json('auto_liability')->nullable();
            $table->json('a_l_options')->nullable();
            $table->json('a_l_options_addl_subr')->nullable();
            /* umbrella liability */
            $table->json('umbrella_liability')->nullable();
            $table->json('u_l_options')->nullable();
            $table->json('u_l_options_addl_subr')->nullable();
            /* workers compesation */
            $table->string('W_C_insurance_letter')->nullable();
            $table->string('W_C_propretor_yes')->nullable();
            $table->string('W_C_propretor_no')->nullable();
            $table->json('W_C_options_addl_subr')->nullable();
            $table->string('W_C_office')->nullable();
            $table->string('W_C_policy_number')->nullable();
            $table->string('W_C_eff_date')->nullable();
            $table->string('W_C_exp_date')->nullable();
            $table->string('W_C_statutory_limits')->nullable();
            $table->string('W_C_other_input')->nullable();
            $table->string('W_C_other')->nullable();
            $table->string('W_C_each_accident')->nullable();
            $table->string('W_C_ea_employee')->nullable();
            $table->string('W_C_policy_limit')->nullable();
            /* additional coverage */
            $table->string('A_C_a_insurance_letter')->nullable();
            $table->string('A_C_a_policy_type')->nullable();
            $table->string('A_C_a_options_add_insurance')->nullable();
            $table->string('A_C_a_options_surrogation')->nullable();
            $table->string('A_C_a_policy_number')->nullable();
            $table->string('A_C_a_eff_date')->nullable();
            $table->string('A_C_a_exp_date')->nullable();
            $table->string('A_C_a_coverage_limits')->nullable();
            /* additional coverage 2 */
            $table->string('A_C_b_insurance_letter')->nullable();
            $table->string('A_C_b_policy_type')->nullable();
            $table->string('A_C_b_options_add_insurance')->nullable();
            $table->string('A_C_b_options_surrogation')->nullable();
            $table->string('A_C_b_policy_number')->nullable();
            $table->string('A_C_b_eff_date')->nullable();
            $table->string('A_C_b_exp_date')->nullable();
            $table->string('A_C_b_coverage_limits')->nullable();
            /* description */
            $table->text('description')->nullable();
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
