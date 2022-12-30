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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('assessor_id');
            $table->string('name');
            $table->string('college_block');
            $table->integer('total_floor');
            $table->date('date');
            $table->integer('weather_id');
            $table->string('floor_no');
            $table->string('unit_no');
            $table->string('grid_no')->nullable();
            $table->integer('location_id');
            $table->integer('component_id');
            $table->integer('sub_component_id')->nullable();
            $table->integer('defect_id');
            $table->decimal('condition_score');
            $table->decimal('maintenance_score');
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('components');
    }
};
