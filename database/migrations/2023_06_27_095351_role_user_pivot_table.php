<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role_user',function (Blueprint $table){
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('role_id','fk_test')->references('id')->on('roles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('user_id','fk_test2')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('role_user',function (Blueprint $table){
            $table->dropForeign('fk_test');
            $table->dropForeign('fk_test2');
            $table->dropColumn('role_id');
            $table->dropColumn('user_id');
        });
    }
};
