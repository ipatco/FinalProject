<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('preview_video')->nullable();
            $table->string('cover_img');
            $table->longText('certification')->nullable();
            $table->string('certificate_img')->nullable();
            $table->double('price')->default('0')->nullable();
            $table->longText('curriculum')->nullable();
            $table->integer('category');
            $table->string('offer_price')->nullable();
            $table->string('discount_text')->nullable();
            $table->string('offer_ends')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('courses');
    }
}
