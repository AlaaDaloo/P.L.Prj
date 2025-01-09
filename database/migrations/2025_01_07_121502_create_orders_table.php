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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('order_status', ['Pending','On the way', 'Delivered', 'Cancelled']);
            $table->enum('payment_status', ['Unpaid','Paid']);
            $table->string('location');
            $table->double('total_price');
            $table->double('tax')->default(1.2);
            $table->double('delivery_charge')->default(3);
            $table->double('final_bill');   
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
