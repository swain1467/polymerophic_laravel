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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->string('commentable_type');
            $table->integer('commentable_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }

    // Data
    /*
    INSERT INTO `comments` (`id`, `body`, `commentable_type`, `commentable_id`) 
    VALUES ('1', 'This comment for 1st post', 'post', '1'), 
    ('2', 'This comment for 2nd post', 'post', '2'), 
    ('3', 'This comment for 1st video', 'video', '1'), 
    ('4', 'This comment for 2nd video', 'video', '2');
    */
};
