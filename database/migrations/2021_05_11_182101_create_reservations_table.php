<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('day_in'); /* Lecture 9 */
            $table->date('day_out'); /* Lecture 9 */
            $table->boolean('status'); /* Lecture 9 */
            $table->bigInteger('user_id')->unsigned(); /* Lecture 9 */
            $table->bigInteger('city_id')->unsigned(); /* Lecture 9 */
            $table->bigInteger('room_id')->unsigned(); /* Lecture 9 */

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade'); /* Lecture 9 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
