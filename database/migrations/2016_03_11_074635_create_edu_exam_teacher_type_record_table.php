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

class CreateEduExamTeacherTypeRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_teacher_type_record', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('user_id', 18)->index('idx_edu_exam_teacger_questions_type_user_id');
			$table->integer('stage_id')->nullable()->default(0);
			$table->string('stage_name', 60)->nullable();
			$table->integer('subject_id')->unsigned()->nullable()->default(0);
			$table->string('subject_name', 45)->default('');
			$table->integer('type_id')->nullable()->default(0);
			$table->string('type_name', 60)->nullable();
			$table->timestamp('updatetime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_teacher_type_record');
	}

}
