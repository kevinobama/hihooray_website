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

class CreateEduCourseOrderDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_course_order_detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id', 60)->index('od_order_id');
			$table->char('user_id', 18)->default(0)->index('od_user_id');
			$table->integer('course_id')->unsigned()->default(0)->index('od_course_id');
			$table->string('course_name', 120)->default('');
			$table->integer('section_id')->unsigned()->default(0)->index('od_section_id');
			$table->string('section_name', 120)->default('');
			$table->integer('price')->default(0);
			$table->integer('d_price')->nullable()->default(0);
			$table->boolean('status')->default(0)->index('od_status');
			$table->boolean('isdel')->nullable()->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
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
		Schema::drop('edu_course_order_detail');
	}

}
