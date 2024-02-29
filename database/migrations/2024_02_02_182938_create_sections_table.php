<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('leader', 50);
            $table->char('leader_phone_number', 15)->nullable(); // leader_id ?
            $table->char('leader_email', 50)->nullable();
            $table->string('assistant', 50)->nullable(); // assistant_id ?
            $table->char('assistant_phone_number', 15)->nullable();
            $table->enum('day', ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']);
            $table->time('start_hour');
            $table->time('end_hour');
            $table->string('place');
            $table->string('city', 50);
            $table->timestamps();
            $table->text('description', 3000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
