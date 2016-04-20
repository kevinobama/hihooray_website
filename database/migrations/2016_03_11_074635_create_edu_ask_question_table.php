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

class CreateEduAskQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_ask_question', function(Blueprint $table)
		{
			$table->integer('question_id', true);
			$table->string('question_title')->default('');
			$table->text('question_detail', 65535)->nullable();
			$table->smallInteger('reward')->unsigned()->default(0)->index('reward');
			$table->dateTime('add_time')->default('0000-00-00 00:00:00')->index('add_time');
			$table->dateTime('expired_time')->default('0000-00-00 00:00:00')->index('expired_time');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->char('published_uid', 18)->default('')->index('published_uid');
			$table->string('published_nickname', 50)->default('');
			$table->string('published_username', 50)->default('');
			$table->boolean('has_attach')->default(0);
			$table->boolean('status')->default(1)->index('status');
			$table->integer('grade_id')->default(0)->index('grade_id');
			$table->integer('subject_id')->default(0)->index('subject_id');
			$table->string('grade_name', 10)->default('');
			$table->string('subject_name', 10)->default('')->index('subject_name');
			$table->boolean('anonymous')->nullable()->default(0);
			$table->integer('view_count')->nullable()->default(0);
			$table->boolean('is_recommend')->nullable()->default(0);
			$table->text('attach_info', 65535)->nullable();
			$table->smallInteger('expired_id')->default(0);
			$table->smallInteger('question_type_id')->default(0);
			$table->string('question_type_name', 50)->nullable()->default('');
			$table->integer('fav_count')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_ask_question');
	}

}
