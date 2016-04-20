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

class CreateEduTeacherGivecoursesVerifyInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_givecourses_verify_info', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('user_id', 18)->default('');
			$table->string('username', 30)->nullable()->default('');
			$table->smallInteger('cat_id')->unsigned()->default(0);
			$table->string('name', 15)->default('');
			$table->string('number', 50)->nullable()->default('');
			$table->string('images')->default('');
			$table->dateTime('datetime')->nullable()->default('0000-00-00 00:00:00');
			$table->boolean('flag')->default(1)->index('verifytype');
			$table->dateTime('verify_time')->default('0000-00-00 00:00:00');
			$table->boolean('statistics_flag')->default(0);
			$table->unique(['user_id','cat_id'], 'userId_catId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_givecourses_verify_info');
	}

}
