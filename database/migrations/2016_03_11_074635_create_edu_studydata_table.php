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

class CreateEduStudydataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_studydata', function(Blueprint $table)
		{
			$table->integer('document_id', true);
			$table->string('document_name')->nullable()->default('');
			$table->integer('document_size')->default(0);
			$table->dateTime('add_time')->default('0000-00-00 00:00:00');
			$table->string('document_location')->default('');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->boolean('status')->default(1);
			$table->string('thumbnail')->nullable()->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_studydata');
	}

}
