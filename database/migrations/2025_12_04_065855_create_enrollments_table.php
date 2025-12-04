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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('course');
            $table->string('grade')->nullable();
            $table->string('source')->nullable()->comment('How did you hear about us');
            $table->boolean('terms_accepted')->default(false);
            $table->tinyInteger('status')->default(0)->comment('0=Pending, 1=Approved, 2=Rejected');
            $table->text('admin_notes')->nullable();
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->useCurrent()->useCurrentOnUpdate();
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
