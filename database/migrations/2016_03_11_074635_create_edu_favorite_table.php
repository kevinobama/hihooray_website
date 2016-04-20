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

class CreateEduFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_favorite', function(Blueprint $table)
		{
			$table->increments('FavoriteId');
			$table->integer('CourseId')->default(0);
			$table->char('UserId', 18)->default(0);
			$table->integer('CreateTime');
			$table->integer('Type');
			$table->string('Title');
			$table->string('CourseLogo');
			$table->integer('EducationId');
			$table->string('EducationName', 45);
			$table->integer('GradeId');
			$table->string('GradeName', 45);
			$table->integer('SubjectId');
			$table->string('SubjectName', 45);
			$table->char('TeacherId', 18);
			$table->string('TeacherName', 45);
			$table->integer('Status');
			$table->integer('OriginalPrice');
			$table->integer('DiscountPrice');
			$table->integer('SectionNumber');
			$table->unique(['CourseId','UserId','Type'], 'index2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_favorite');
	}

}
