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
            //make a new table for a post
            $table->id(); //make a new column for id
            $table->string('title'); //make a new column for title
            $table->date('posted_date'); //make a new column for posted_date
            $table->string('author'); //make a new column for author
            $table->longText('content'); //make a new column for content
            $table->timestamps(); //make a new column for timestamps
            
            return redirect('/post');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
