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
        Schema::table('Projects', function (Blueprint $table) {
            $table->string('original_img_name')->nullable()->after('name');
            $table->string('image_path')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Projects', function (Blueprint $table) {
            $table->dropColumn('original_img_name');
            $table->dropColumn('image_path');
        });
    }
};
