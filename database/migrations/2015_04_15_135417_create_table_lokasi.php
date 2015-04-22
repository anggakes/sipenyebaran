<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLokasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lokasi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_proyek')->unsigned()->index();
			$table->double('lat', 10, 6);
			$table->double('lng', 10, 6);
			$table->timestamps();
			
			$table->foreign('id_proyek')->references('id')->on('proyek')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lokasi');
	}

}
