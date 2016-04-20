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

class CreateEduPassportStudentFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_student_favorite', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0)->index('user_id');
			$table->integer('rc_id')->unsigned()->default(0)->index('rc_id');
			$table->boolean('type')->nullable()->default(0);
			$table->string('course_logo')->default('');
			$table->string('title', 100)->default('');
			$table->integer('education_id')->nullable();
			$table->string('education_name', 40)->nullable();
			$table->integer('grade_id')->nullable();
			$table->string('grade_name', 40)->nullable()->default('');
			$table->integer('subject_id')->nullable();
			$table->string('subject_name', 40)->default('');
			$table->integer('original_price')->unsigned()->default(0);
			$table->integer('total_price')->unsigned()->default(0);
			$table->char('t_user_id', 18)->nullable()->default(0);
			$table->string('realname', 20)->nullable();
			$table->boolean('xstatus')->default(1);
			$table->timestamp('createtime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_student_favorite');
	}

}
