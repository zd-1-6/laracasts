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
        Schema::create('reservations_test_sql', function (Blueprint $table) {
            $table->string('checkin_date'); 
            $table->string('checkin_hour'); 
            $table->string('checkout_date'); 
            $table->string('checkout_hour'); 
            $table->string('booking_date'); 
            $table->string('booking_hour'); 
            $table->string('code'); 
            $table->string('platform'); 
            $table->string('listing_id'); 
            $table->string('listing_name'); 
            $table->string('property_id'); 
            $table->string('property_name'); 
            $table->string('property_timezone'); 
            $table->string('host_id'); 
            $table->string('host_first_name'); 
            $table->string('host_last_name'); 
            $table->string('status'); 
            $table->string('guest_first_name'); 
            $table->string('guest_last_name'); 
            $table->string('guest_count'); 
            $table->string('guests_adults');
            $table->string('guests_children');
            $table->string('guests_infants');
            $table->string('guests_pets');
            $table->string('guest_email'); 
            $table->string('guest_phone'); 
            $table->string('guest_locale'); 
            $table->string('guest_city'); 
            $table->string('guest_region'); 
            $table->string('guest_country'); 
            $table->string('review_id'); 
            $table->string('review_rating'); 
            $table->string('nights'); 
            $table->string('currency'); 
            $table->string('base_amount'); 
            $table->string('guest_discount'); 
            $table->string('cleaning_fee'); 
            $table->string('linen_fee'); 
            $table->string('guest_service_fee'); 
            $table->string('resort_fee'); 
            $table->string('management_fee'); 
            $table->string('community_fee'); 
            $table->string('pet_fee'); 
            $table->string('extra_guest_fee'); 
            $table->string('total_price'); 
            $table->string('security_deposit'); 
            $table->string('pass_through_taxes'); 
            $table->string('host_service_fee'); 
            $table->string('payout'); 
            $table->string('revenue'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_test_sql');
    }
};


