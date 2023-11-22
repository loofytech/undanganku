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
        Schema::create('template_ones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("undangan_id");
            $table->text("quote_1_description")->nullable();
            $table->text("quote_2_title")->nullable();
            $table->text("quote_2_description")->nullable();
            $table->text("meet_description")->nullable();
            $table->text("approach_description")->nullable();
            $table->text("proposal_description")->nullable();
            $table->text("marry_description")->nullable();
            $table->text("gift_description")->nullable();
            $table->text("greetings_thank_you")->nullable();
            $table->timestamps();

            $table->foreign("undangan_id")->references("id")->on("undangankus")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_ones');
    }
};
