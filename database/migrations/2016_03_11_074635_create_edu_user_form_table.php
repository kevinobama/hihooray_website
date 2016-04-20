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

class CreateEduUserFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_user_form', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('FormUserId', 40)->nullable();
			$table->string('Name', 40)->nullable();
			$table->string('SchoolName', 40)->nullable();
			$table->string('GradeName', 40)->nullable();
			$table->integer('UserType')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_user_form');
	}

}
