<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCbCurrencyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_currency', function (Blueprint $table) {
            $table->increments('idcurrency');
            $table->string('currency');
            $table->string('description');
            $table->string('isactive');
            $table->string('isocode');
            $table->string('cursymbol');
            $table->decimal('precisioncost', 10, 2);
            $table->decimal('precisionstd', 10, 2);
            $table->decimal('precisionprize', 10, 2);
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
        Schema::dropIfExists('cb_currency');
    }
}
