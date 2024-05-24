<?php

namespace App\Modules\Tasks\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateTasksTable extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->text('description');
            $table->string('status');
            $table->string('priority');
            $table->unsignedBigInteger('assigned_user_id')->nullable();
            $table->unsignedBigInteger('reporter_user_id');
            $table->date('due_date')->nullable();
            $table->timestamps();

            $table->foreign('assigned_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('reporter_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
}
