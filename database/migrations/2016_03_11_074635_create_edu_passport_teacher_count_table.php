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

class CreateEduPassportTeacherCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_teacher_count', function(Blueprint $table)
		{
			$table->char('user_id', 18)->default('')->unique('user_id');
			$table->integer('credits')->default(0);
			$table->integer('coin')->default(0);
			$table->integer('lock_coin')->nullable()->default(0);
			$table->integer('question_num')->unsigned()->default(0);
			$table->integer('coureses_num')->unsigned()->default(0);
			$table->integer('online_coureses_num')->unsigned()->default(0);
			$table->integer('follower')->unsigned()->default(0);
			$table->integer('following')->unsigned()->default(0);
			$table->boolean('rating')->default(1);
			$table->boolean('favorites')->default(0);
			$table->smallInteger('positive')->unsigned()->default(0);
			$table->smallInteger('moderate')->unsigned()->default(0);
			$table->smallInteger('negative')->unsigned()->default(0);
			$table->smallInteger('CoursePositive')->unsigned()->default(0);
			$table->smallInteger('CourseModerate')->unsigned()->default(0);
			$table->smallInteger('CourseNegative')->unsigned()->default(0);
			$table->smallInteger('AskPositive')->unsigned()->default(0);
			$table->smallInteger('AskModerate')->unsigned()->default(0);
			$table->smallInteger('AskNegative')->unsigned()->default(0);
			$table->integer('comment_num')->nullable()->default(0)->index('comment_num');
			$table->integer('comment_sum_rating')->nullable()->default(0);
			$table->integer('apply_for_cash')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_teacher_count');
	}

}
