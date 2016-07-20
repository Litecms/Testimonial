<?php

use Illuminate\Database\Migrations\Migration;

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
        Schema::create('testimonials', function ($table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('designation', 50)->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->date('date')->nullable();
            $table->string('slug', 200)->nullable();
            $table->enum('status', ['draft', 'published', 'hidden', 'suspended', 'spam'])->default('draft')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
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
        Schema::drop('testimonials');
    }
}
