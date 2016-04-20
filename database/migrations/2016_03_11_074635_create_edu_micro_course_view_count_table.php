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

class CreateEduMicroCourseViewCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_micro_course_view_count', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('micro_id')->default(0);
			$table->string('user_id', 20)->nullable();
			$table->integer('view_counts')->nullable()->default(0);
			$table->string('ip', 20)->nullable();
			$table->timestamp('created_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('updated_time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_micro_course_view_count');
	}

}
