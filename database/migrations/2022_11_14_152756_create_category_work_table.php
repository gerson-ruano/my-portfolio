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
        Schema::create('category_work', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('work_id')->nullable();
            $table->foreign('work_id')
            ->references('id')->on('works')->nullOnDelete();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
            ->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_work');
    }
};
