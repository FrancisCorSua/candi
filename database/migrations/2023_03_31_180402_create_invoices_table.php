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

        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->float('importeTotal');
            $table->float('importePagado');
            $table->date('fechaDesde');
            $table->date('fechaHasta');
            $table->timestamps();
        });
        
        $invoices = [
            ["17.14", "16.0", "2023-03-01", "2023-03-31", "2023-03-01 00:00:00"],
            ["147.14", "417.14", "2023-03-01", "2023-03-31", "2023-03-01 00:00:00"],
            ["75.0", "0.0", "2023-01-01", "2023-01-31", "2023-01-01 00:00:00"]
        ];
    
        foreach($invoices as $invoice){
            DB::table('invoices')->insert(
                array(
                    'importeTotal' => $invoice[0],
                    'importePagado' => $invoice[1],
                    'fechaDesde' => $invoice[2],
                    'fechaHasta' => $invoice[3],
                    'created_at' => $invoice[4]
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
