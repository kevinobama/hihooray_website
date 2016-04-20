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

class CreateEduPassportMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sender', 18)->nullable()->default('0');
			$table->integer('type')->nullable()->default(0);
			$table->integer('cat_id')->nullable();
			$table->string('user_id', 18)->nullable()->index('uid');
			$table->text('message')->nullable();
			$table->boolean('isdel')->nullable()->default(0);
			$table->smallInteger('status')->nullable()->default(0);
			$table->dateTime('reg_date')->default('0000-00-00 00:00:00');
			$table->timestamp('upd_date')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_messages');
	}

}
