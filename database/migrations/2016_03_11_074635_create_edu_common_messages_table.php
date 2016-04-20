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

class CreateEduCommonMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_messages', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->string('subject', 80)->default('');
			$table->text('message', 65535)->nullable();
			$table->char('send_uid', 18)->default(0)->index('send_uid');
			$table->char('recv_uid', 18)->default(0)->index('recv_uid');
			$table->boolean('mtype')->default(-1);
			$table->boolean('isread')->default(0);
			$table->dateTime('addtime')->default('0000-00-00 00:00:00');
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
		Schema::drop('edu_common_messages');
	}

}
