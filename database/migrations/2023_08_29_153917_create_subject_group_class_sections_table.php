<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectGroupClassSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_group_class_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_group_id')->constrained();
            $table->foreignId('class_section_id')->constrained();
            $table->foreignId('session_id')->constrained()->nullable();
            $table->text('description');
            $table->boolean('is_active')->default(1);

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
        Schema::dropIfExists('subject_group_class_sections');
    }
}
