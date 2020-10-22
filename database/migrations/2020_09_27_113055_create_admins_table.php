<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('email')->unique();
            $table->string('tele', 20)->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('city', 50)->nullable();
            $table->longText('biography')->nullable();
            $table->string('password');
            $table->string('avatar')->default('admin.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        
            $table->foreignId('city_id')->references('id')->on('cities')->nullable();
            $table->boolean('approved')->default(true);
            $table->enum('locale',['ar','fr','en'])->default('fr');
            $table->enum('sexe',['male','female'])->nullable();
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
        Schema::dropIfExists('admins');
    }
}
