<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        /*
         * Table: testimonials
         */
        Schema::create(config('litecms.testimonial.testimonial.model.table'), function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->text('image')->nullable();
            $table->date('date')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show', 'hide'])->nullable();
            $table->string('user_id', 255)->nullable();
            $table->string('user_type', 255)->nullable();
            $table->string('upload_folder', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::drop(config('litecms.testimonial.testimonial.model.table'));
    }
}
