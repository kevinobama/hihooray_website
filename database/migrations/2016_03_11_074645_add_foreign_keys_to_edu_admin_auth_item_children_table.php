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

class AddForeignKeysToEduAdminAuthItemChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('edu_admin_auth_item_children', function(Blueprint $table)
		{
			$table->foreign('parent', 'edu_admin_auth_item_children_ibfk_1')->references('name')->on('edu_admin_auth_items')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('child', 'edu_admin_auth_item_children_ibfk_2')->references('name')->on('edu_admin_auth_items')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('edu_admin_auth_item_children', function(Blueprint $table)
		{
			$table->dropForeign('edu_admin_auth_item_children_ibfk_1');
			$table->dropForeign('edu_admin_auth_item_children_ibfk_2');
		});
	}

}
