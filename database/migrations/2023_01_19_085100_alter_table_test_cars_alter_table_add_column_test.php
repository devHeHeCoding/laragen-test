<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('test_cars', function (Blueprint $table) {
            $table
                                                            ->integer('test')
                                                                    ;
        });
    }

    public function down()
    {
        Schema::table('test_cars', function (Blueprint $table) {
                            $table->drop_column('test');
                    });
    }
};
