<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->string('name', '70')->unique();
            $table->json('devices')->default(new Expression('(JSON_ARRAY())'));
            $table->json('actions')->default(new Expression('(JSON_ARRAY())'));
            $table->json('documents')->default(new Expression('(JSON_ARRAY())'));
            $table->json('externalContact')->default(new Expression('(JSON_ARRAY())'));
            $table->json('internalLinks')->default(new Expression('(JSON_ARRAY())'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warranties');
    }
}
