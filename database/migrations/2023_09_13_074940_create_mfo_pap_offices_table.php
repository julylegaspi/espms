<?php

use App\Models\MfoPap;
use App\Models\Office;
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
        Schema::create('mfo_pap_offices', function (Blueprint $table) {
            $table->foreignIdFor(MfoPap::class);
            $table->foreignIdFor(Office::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mfo_pap_offices');
    }
};
