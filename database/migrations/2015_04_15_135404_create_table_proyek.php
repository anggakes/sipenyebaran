<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyek extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyek', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_kontraktor')->unsigned()->index();
			$table->integer('id_kecamatan')->unsigned()->index();
			$table->string('nama');
			$table->date('mulai');
			$table->date('akhir');
			$table->integer('nilai')->unsigned();
			$table->timestamps();

			$table->foreign('id_kontraktor')->references('id')->on('kontraktor')->onUpdate('cascade');
			$table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyek');
	}

}
