<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()// được chạy khi kích hoạt migate
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female'])->nulltable(); // nulltable(): cho phép để trống trường này
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()// thực hiện khi thưc hiện rollback
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
}
