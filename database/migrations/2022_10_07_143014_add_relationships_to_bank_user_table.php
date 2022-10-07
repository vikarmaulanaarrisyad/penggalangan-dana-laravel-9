<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bank_user', function (Blueprint $table) {
            $table->foreign('bank_id')
                    ->references('id')
                    ->on('bank')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bank_user', function (Blueprint $table) {
            $table->dropForeign([
                'bank_user_bank_id_foreign',
                'bank_user_user_id_foreign',
            ]);
        });
    }
};
