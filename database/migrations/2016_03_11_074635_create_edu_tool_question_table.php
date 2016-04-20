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

class CreateEduToolQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_tool_question', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->default('');
			$table->text('content', 65535)->nullable();
			$table->integer('grade_id')->default(0)->index('grade_id');
			$table->string('grade_name', 40)->default('');
			$table->integer('subject_id')->default(0)->index('subject_id');
			$table->string('subject_name', 40)->default('')->index('subject_name');
			$table->integer('status')->nullable()->default(0);
			$table->string('attachments', 200)->nullable()->default('');
			$table->dateTime('create_time')->default('0000-00-00 00:00:00')->index('add_time');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->integer('question_type_id')->nullable();
			$table->string('question_type_name', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_tool_question');
	}

}
