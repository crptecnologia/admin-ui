<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWysiwygMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('wysiwyg_media', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_path');
            $table->unsignedInteger('wysiwygable_id')->nullable()->index();
            $table->string('wysiwygable_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('wysiwyg_media');
    }
}
