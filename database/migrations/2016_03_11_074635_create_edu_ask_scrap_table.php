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

class CreateEduAskScrapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_ask_scrap', function(Blueprint $table)
		{
			$table->integer('scrap_id', true);
			$table->integer('order_id')->default(0)->index('order_id');
			$table->boolean('first')->default(0);
			$table->dateTime('add_time')->default('0000-00-00 00:00:00');
			$table->integer('question_id')->default(0)->index('question_id');
			$table->char('answer_uid', 18)->default(0)->index('answer_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_ask_scrap');
	}

}
