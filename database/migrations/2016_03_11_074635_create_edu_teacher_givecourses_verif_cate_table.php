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

class CreateEduTeacherGivecoursesVerifCateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_givecourses_verif_cate', function(Blueprint $table)
		{
			$table->smallInteger('cat_id', true)->unsigned();
			$table->smallInteger('fid')->unsigned()->default(0);
			$table->string('name', 15)->default('')->index('verify1');
			$table->smallInteger('sort')->unsigned()->default(0);
			$table->boolean('display_cate')->default(0);
			$table->unique(['name','fid'], 'fid_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_givecourses_verif_cate');
	}

}
