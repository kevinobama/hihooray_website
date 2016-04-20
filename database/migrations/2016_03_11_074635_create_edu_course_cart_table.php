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

class CreateEduCourseCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_course_cart', function(Blueprint $table)
		{
			$table->increments('cart_id');
			$table->char('user_id', 18)->default('')->index('cart_user_id');
			$table->integer('course_id')->unsigned()->default(0)->index('cart_course_id');
			$table->string('course_name', 120)->default('');
			$table->integer('section_id')->unsigned()->default(0)->index('cart_section_id');
			$table->string('section_name', 120)->default('');
			$table->integer('price')->default(0);
			$table->integer('d_price')->nullable()->default(0);
			$table->integer('course_category_id')->default(0)->index('cart_course_category_id');
			$table->string('smallPicture')->default('');
			$table->string('middlePicture')->default('');
			$table->string('largePicture')->default('');
			$table->integer('s_user_id')->default(0)->index('cart_s_user_id');
			$table->string('s_user_name', 120)->default('');
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
		Schema::drop('edu_course_cart');
	}

}
