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

class CreateEduOnlineTeacherRecommendedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_teacher_recommended', function(Blueprint $table)
		{
			$table->char('teacher_id', 18)->primary();
			$table->string('teacher_name', 40);
			$table->string('education_id');
			$table->string('subject_id')->nullable();
			$table->boolean('rating')->nullable();
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_teacher_recommended');
	}

}
