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

class CreateEduExamPublishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_publish', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exam_id')->unsigned()->default(0);
			$table->char('record_id', 18)->default(0)->index('record_id');
			$table->char('user_id', 18)->default('')->index('uid');
			$table->string('exam_name', 60)->default('');
			$table->boolean('xstatus')->default(0);
			$table->string('username', 15)->default('');
			$table->integer('stage_gid')->default(0);
			$table->string('stage_gname', 45)->nullable();
			$table->integer('subject_gid')->default(0)->index('subject_gid');
			$table->string('subject_gname', 45)->nullable();
			$table->integer('exam_sort_id')->default(1);
			$table->boolean('difficult')->default(0);
			$table->integer('all_nums')->nullable()->default(0);
			$table->integer('unmarking_nums')->nullable()->default(0);
			$table->smallInteger('publish_nums')->unsigned()->default(0)->index('publish_nums');
			$table->integer('price')->unsigned()->default(0);
			$table->text('description', 65535);
			$table->smallInteger('displayorder')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->default('0000-00-00 00:00:00');
			$table->string('AverageScore', 10);
			$table->string('Score', 10);
			$table->integer('Peoples')->default(0);
			$table->text('Content', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_publish');
	}

}
