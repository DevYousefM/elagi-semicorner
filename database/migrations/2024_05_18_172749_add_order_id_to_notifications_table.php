<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderIdToNotificationsTable extends Migration
{
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            if (!Schema::hasColumn('notifications', 'order_id')) {
                $table->unsignedBigInteger('order_id')->after('id');
                $table->foreign('order_id')
                    ->references('id')
                    ->on('orders')
                    ->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');
        });
    }
}
