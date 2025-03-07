<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('')->comment('名称');
            $table->char('mobile', 15)->unique()->default('')->comment('手机号码');
            $table->string('password')->default('')->comment('密码');
            $table->string('avatar')->default('')->comment('头像路径');
            $table->string('email')->default('')->unique()->comment('电子邮件');
            $table->char('gender', 10)->default('未知')->comment('性别');
            $table->tinyInteger('is_verified')->default(1)->comment('是否实名验证，1：否，2：是');
            $table->timestamp('last_login_at')->nullable()->comment('最后登录时间');
            $table->timestamps();
            $table->softDeletes();
            $table->comment('用户表');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
