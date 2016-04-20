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

class CreateEduPassportTeacherFieldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_teacher_field', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->primary();
			$table->boolean('publishfeed')->default(0);
			$table->boolean('customshow')->default(26);
			$table->string('customstatus', 30)->default('');
			$table->text('medals', 65535);
			$table->text('sightml', 65535);
			$table->text('groupterms', 65535);
			$table->string('authstr', 20)->default('');
			$table->text('groups', 16777215);
			$table->string('attentiongroup')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_teacher_field');
	}

}
