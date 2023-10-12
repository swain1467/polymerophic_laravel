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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }

    // Data
    /*
    INSERT INTO `posts` (`id`, `title`, `body`) 
    VALUES (1, 'This is my 1st post', '1st post body content is here'), 
    (2, 'This is my 2nd post', '2st post body content is here');
    */
};
