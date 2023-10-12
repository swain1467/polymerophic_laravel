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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }

    // Data
    /*
    INSERT INTO `videos` (`id`, `title`, `url`) 
    VALUES ('1', '1st Video', 'http://xyz1'), 
    ('2', '2nd Video', 'http://xyz2');
    */
};
