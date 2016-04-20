<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/11
 * Time: 15:07 
 * Email: zhouwensheng@hihooray.com
 * migration
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEduAdvertisementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_advertisements', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 100)->nullable();
			$table->string('block', 50)->nullable();
			$table->string('image_size', 10);
			$table->string('image_url', 100);
			$table->boolean('is_delete')->nullable();
			$table->boolean('is_click')->nullable();
			$table->smallInteger('position')->nullable();
			$table->integer('clicks')->nullable();
			$table->string('target_url', 100)->nullable();
			$table->dateTime('start')->nullable();
			$table->dateTime('expire')->nullable();
			$table->string('device', 20)->nullable();
			$table->boolean('is_new_window')->nullable();
			$table->integer('height')->nullable();
			$table->integer('width')->nullable();
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
		Schema::drop('edu_advertisements');
	}

}
