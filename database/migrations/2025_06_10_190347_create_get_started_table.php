<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetStartedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_started', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained() // Assumes 'users' table and 'id' column
            ->onDelete('cascade');
            $table->string("company_name")->nullable();
            $table->string("website_url")->nullable();
            $table->string("industry")->nullable();
            $table->string("team_size")->nullable();
            $table->longText("help_needed")->nullable();
            $table->longText("other_help_needed")->nullable();
            $table->longText("project_description")->nullable();
            $table->string("project_timeline")->nullable();
            $table->string("estimated_budget")->nullable();
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
        Schema::dropIfExists('get_started');
    }
}