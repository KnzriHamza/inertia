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
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedInteger('beds');
            $table->unsignedInteger('baths');
            $table->unsignedInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street');
            $table->tinyText('street_nr');

            $table->unsignedFloat('price');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('listings', [
                'beds',
                'baths',
                'area',
                'city',
                'code',
                'street',
                'street_nr',
                'price',
            ]);
    }
};
