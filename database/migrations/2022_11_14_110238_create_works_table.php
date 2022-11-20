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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('img_name');
            $table->string('name',30)->unique();
            $table->text('description',135);
            $table->string('demo_link');
            $table->string('repo_link');
            $table->boolean('is_visible')->default(true);
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->references('id')->on('users')->nullOnDelete();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};