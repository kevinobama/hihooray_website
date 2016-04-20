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

class CreateEduCommonReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_report', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('report_id')->default(0);
			$table->text('message', 65535);
			$table->char('uid', 18)->default(0);
			$table->string('username', 15)->default('');
			$table->dateTime('dateline')->nullable();
			$table->smallInteger('num')->unsigned()->default(1);
			$table->char('opuid', 18)->default(0);
			$table->string('opname', 15)->default('');
			$table->dateTime('optime')->nullable();
			$table->string('opresult')->default('');
			$table->boolean('xtype')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_report');
	}

}
