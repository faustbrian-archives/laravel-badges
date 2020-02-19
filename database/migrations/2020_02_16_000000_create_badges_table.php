<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('badgeables', function (Blueprint $table) {
            $table->unsignedBigInteger('badge_id');
            $table->morphs('model');
        });
    }

    public function down()
    {
        Schema::drop('badges');
    }
}
