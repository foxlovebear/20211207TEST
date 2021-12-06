<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCRUDListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account', 100);
            $table->string('name', 100);
            $table->string('gender', 5);
            $table->date('birthday');
            $table->string('email', 100);
            $table->text('other');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_info');
    }
}
