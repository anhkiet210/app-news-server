<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('TieuDe');
            $table->unsignedBigInteger('idChuDe');
            $table->foreign('idChuDe')->references('id')->on('categories');
            $table->string('TrichDan');
            $table->text('NoiDung');
            $table->longtext('Anh');
            $table->integer('TrangThai')->default(0);
            $table->unsignedBigInteger('TacGia');
            $table->foreign('TacGia')->references('id')->on('users');
            $table->date('NgayDang');
            $table->integer('LuotXem');
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
        Schema::dropIfExists('posts');
    }
}
