<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Query\Expression;

class AddRolAndSectorColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 50)->default('user')->after('name');
            $table->string('sector', 70)->default('Asesor Integral')->after('name');
            $table->json('phones')->default(new Expression('(JSON_ARRAY())'))->after('name');

            $table->foreignId('store_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'sector', 'phones']);
            $table->dropForeign(['store_id']);
        });
    }
}
