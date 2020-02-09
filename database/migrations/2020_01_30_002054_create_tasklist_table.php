<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//タスクリストテーブルの作成
class CreateTasklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            //task を投稿したユーザのID( user_id )
            $table->integer('user_id')->unsigned()->index();
            $table->string('content');
            $table->timestamps();
            
            //外部キー制約を追加予定
            //$table->foreign(外部キーを設定するカラム名)->references(制約先のID名)->on(外部キー制約先のテーブル名);
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
