<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->enum('gender', ['Male', 'Female'])->after('password')->nullable(); // Stores user's gender (Male or Female)
      $table->date('birthday')->after('gender')->nullable(); // Stores user's date of birth
      $table->boolean('status')->default(false)->after('birthday'); // Indicates whether the user's account is active (true) or inactive (false)
      $table->softDeletes()->after('status'); // Enables soft deletes for the users table, allowing for logical deletion of records
    });
  }

  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn(['gender', 'birthday', 'status', 'deleted_at']);
    });
  }
};
