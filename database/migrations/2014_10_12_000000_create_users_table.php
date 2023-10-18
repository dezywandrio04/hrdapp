<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan')->unique();
            $table->string('nama_karyawan');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('id_perusahaan');
            $table->unsignedInteger('id_jabatan');
            $table->unsignedInteger('id_divisi');
            $table->unsignedInteger('id_posisi');
            $table->date('tmt');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('photo');
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
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
