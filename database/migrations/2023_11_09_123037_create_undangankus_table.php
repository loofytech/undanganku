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
        Schema::create('undangankus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("male_children_to");
            $table->string("male_name");
            $table->string("male_nickname");
            $table->string("male_father_name");
            $table->string("male_mother_name");
            $table->string("male_contact")->nullable();
            $table->string("male_ig")->nullable();
            $table->string("female_children_to");
            $table->string("female_name");
            $table->string("female_nickname");
            $table->string("female_father_name");
            $table->string("female_mother_name");
            $table->string("female_contact")->nullable();
            $table->string("female_ig")->nullable();
            $table->timestamp("akad_date")->nullable();
            $table->text("akad_place");
            $table->timestamp("resepsi_date")->nullable();
            $table->text("resepsi_place");
            $table->string("backsound_link")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangankus');
    }
};
