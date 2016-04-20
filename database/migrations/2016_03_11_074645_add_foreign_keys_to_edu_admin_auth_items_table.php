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

class AddForeignKeysToEduAdminAuthItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('edu_admin_auth_items', function(Blueprint $table)
		{
			$table->foreign('rule_name', 'edu_admin_auth_items_ibfk_1')->references('name')->on('edu_admin_auth_rules')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('edu_admin_auth_items', function(Blueprint $table)
		{
			$table->dropForeign('edu_admin_auth_items_ibfk_1');
		});
	}

}
