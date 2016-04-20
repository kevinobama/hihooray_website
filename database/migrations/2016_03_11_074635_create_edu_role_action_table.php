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

class CreateEduRoleActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_role_action', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('name')->default('');
			$table->string('module', 50)->default('index');
			$table->string('action')->default('');
			$table->string('describe')->default('');
			$table->string('message')->default('');
			$table->boolean('allow_all')->default(0);
			$table->string('credit_require')->default('');
			$table->string('credit_update')->default('');
			$table->boolean('log')->default(0);
			$table->boolean('is_admin')->nullable()->default(0);
			$table->unique(['module','name','is_admin'], 'action');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_role_action');
	}

}
