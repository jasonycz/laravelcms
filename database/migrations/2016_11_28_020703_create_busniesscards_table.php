<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusniesscardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('busniesscards', function(Blueprint $table) 
        {
			$table->increments('id');
			$table->string('name',20)->nullable();		//姓名
            $table->string('mobile',13)->nullable(); 	//手机号码
			$table->string('company',100)->nullable(); 	//公司
			$table->string('address',150)->nullable(); 	//联系地址
            $table->integer('user_id')->default(0);		//用户ID
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('busniesscards');
    }
}
