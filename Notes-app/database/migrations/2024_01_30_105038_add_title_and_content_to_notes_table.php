<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleAndContentToNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('notes', 'title')) {
            Schema::table('notes', function (Blueprint $table) {
                $table->string('title')->after('id');
            });
        }

        if (!Schema::hasColumn('notes', 'content')) {
            Schema::table('notes', function (Blueprint $table) {
                $table->text('content')->after('title');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This is the down method, used when rolling back the migration
        // You can modify this if needed
    }
}

