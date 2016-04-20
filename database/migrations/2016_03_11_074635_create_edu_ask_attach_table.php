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

class CreateEduAskAttachTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_ask_attach', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_name')->nullable();
			$table->dateTime('add_time')->default('0000-00-00 00:00:00');
			$table->string('file_location')->nullable();
			$table->integer('question_id')->nullable()->default(0)->index('question_id');
			$table->boolean('type_id')->default(1);
			$table->char('published_uid', 18)->nullable()->default('');
			$table->string('file_size', 30)->default('0');
			$table->boolean('file_type')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_ask_attach');
	}

}
