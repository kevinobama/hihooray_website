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

class CreateEduTeacherVerifyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_verify', function(Blueprint $table)
		{
			$table->char('user_id', 18)->default(0)->primary();
			$table->boolean('apply_status')->default(0);
			$table->boolean('verify1')->default(0);
			$table->boolean('verify2')->default(0);
			$table->boolean('verify3')->default(0);
			$table->boolean('verify4')->default(0);
			$table->boolean('verify5')->default(0);
			$table->boolean('verify6')->default(0);
			$table->boolean('verify7')->default(0);
			$table->boolean('verify8')->default(0);
			$table->boolean('verify9')->default(0);
			$table->boolean('verify10')->default(0);
			$table->boolean('is_check_in')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_verify');
	}

}
