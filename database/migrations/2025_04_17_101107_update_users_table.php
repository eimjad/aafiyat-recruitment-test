<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->enum('gender', ['Male', 'Female'])->after('password')->nullable();
      $table->date('birthday')->after('gender')->nullable();
      $table->boolean('status')->default(false)->after('birthday');
    });
  }

  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn(['gender', 'birthday', 'status_active']);
    });
  }
};
