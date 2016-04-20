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

class CreateEduToolQuestionConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_tool_question_config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('type')->nullable();
			$table->string('title', 50)->nullable();
			$table->integer('week')->nullable();
			$table->integer('time')->nullable();
			$table->text('config', 65535)->nullable();
			$table->boolean('status')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_tool_question_config');
	}

}
