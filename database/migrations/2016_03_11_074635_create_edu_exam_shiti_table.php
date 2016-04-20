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

class CreateEduExamShitiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_shiti', function(Blueprint $table)
		{
			$table->increments('shiti_id');
			$table->char('user_id', 18)->default('');
			$table->integer('exam_gid')->unsigned()->default(0)->index('fid');
			$table->integer('stage_gid')->default(0);
			$table->string('stage_gname', 45)->default('');
			$table->integer('subject_gid')->default(0);
			$table->string('subject_gname', 45)->default('');
			$table->integer('shiti_type_id')->default(0);
			$table->string('shiti_type_name', 50)->nullable();
			$table->text('question', 65535);
			$table->string('question_images')->default('');
			$table->text('answer', 65535)->nullable();
			$table->string('analysis')->default('');
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->nullable()->default('0000-00-00 00:00:00');
			$table->smallInteger('score')->default(0);
			$table->boolean('ifshare')->default(1);
			$table->boolean('xstatus')->default(1);
			$table->boolean('difficult')->default(1);
			$table->boolean('xtype')->default(0);
			$table->integer('generation_exam_numbers')->unsigned()->default(0);
			$table->text('answer_html', 65535)->nullable();
			$table->text('analysis_html', 65535)->nullable();
			$table->smallInteger('xtype_len')->unsigned()->default(1);
			$table->string('choose_config')->nullable()->default('');
			$table->text('images_h', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_shiti');
	}

}
