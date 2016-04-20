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

class CreateEduAdminUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_user_profiles', function(Blueprint $table)
		{
			$table->integer('user_id')->primary();
			$table->string('name')->nullable();
			$table->string('public_email')->nullable();
			$table->string('gravatar_email')->nullable();
			$table->string('gravatar_id', 32)->nullable();
			$table->string('location')->nullable();
			$table->string('website')->nullable();
			$table->text('bio', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_user_profiles');
	}

}
