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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->foreignId('asso_id')->constrained()->onDelete('cascade');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->mediumText('slogan')->nullable();
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
        Schema::dropIfExists('candidats');
    }
};
