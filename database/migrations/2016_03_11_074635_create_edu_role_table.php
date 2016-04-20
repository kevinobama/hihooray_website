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

class CreateEduRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_role', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('name', 50)->default('');
			$table->integer('creditshigher')->default(0);
			$table->integer('creditslower')->default(0);
			$table->text('privilege', 16777215);
			$table->string('type')->default('normal');
			$table->boolean('rank')->default(0);
			$table->char('icon', 100)->default('');
			$table->text('allow_sendpm_to', 65535)->nullable();
			$table->text('allow_sendpm_from', 65535)->nullable();
			$table->text('allow_topic_forward_to', 65535)->nullable();
			$table->text('allow_topic_forward_from', 65535)->nullable();
			$table->text('allow_topic_reply_to', 65535)->nullable();
			$table->text('allow_topic_reply_from', 65535)->nullable();
			$table->text('allow_topic_at_to', 65535)->nullable();
			$table->text('allow_topic_at_from', 65535)->nullable();
			$table->text('allow_follow_to', 65535)->nullable();
			$table->text('allow_follow_from', 65535)->nullable();
			$table->boolean('system')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_role');
	}

}
