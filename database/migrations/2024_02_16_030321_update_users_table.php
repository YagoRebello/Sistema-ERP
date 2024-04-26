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
        Schema::table('users', function(Blueprint $table){
            $table->unsignedBigInteger('tenant_id')->nullable()->index();
            $table->string('password_anterior')->nullable();
            $table->timestamp('data_cadastro')->nullable();
            $table->dateTime('data_alteracao_senha')->nullable();
            $table->dateTime('data_alteracao')->nullable();
            $table->dateTime('data_login')->nullable();
            $table->dateTime('data_logout')->nullable();
            $table->string('ip_login')->nullable();
            $table->integer('cod_vendedor')->nullable();
            $table->enum('situacao',['A','I'])->default('A');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
