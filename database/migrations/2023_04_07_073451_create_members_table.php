<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('會員名稱');
            $table->string('email')->comment('會員 Email');
            $table->string('password')->comment('會員 Password');
            $table->string('password_reset')->comment('會員重新設置密碼');
            $table->integer('status')->default(0)->comment('1:啓用, 0: 停用');
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
        Schema::dropIfExists('members');
    }
};
