<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create(Config::get('badges.tables.badges'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create(Config::get('badges.tables.model_has_badges'), function (Blueprint $table) {
            $table->unsignedBigInteger('badge_id');
            $table->morphs('model');
        });
    }

    public function down()
    {
        Schema::drop(Config::get('badges.tables.model_has_badges'));
        Schema::drop(Config::get('badges.tables.badges'));
    }
}
