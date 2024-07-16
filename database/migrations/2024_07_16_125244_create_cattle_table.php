<?php

use App\Models\CattleCategoryOption;
use App\Models\User;
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
        Schema::create('cattle', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained('users');
            $table->foreignIdFor(CattleCategoryOption::class, 'type_id')->constrained('cattle_category_options');
            $table->foreignIdFor(CattleCategoryOption::class, 'gender_id')->constrained('cattle_category_options');
            $table->foreignIdFor(CattleCategoryOption::class, 'breed_id')->constrained('cattle_category_options');
            $table->foreignIdFor(CattleCategoryOption::class, 'subsection_id')->constrained('cattle_category_options');
            $table->unsignedInteger('tag');
            $table->date('dob');
            $table->text('description')->nullable();
            $table->boolean('is_sold')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamp('assign_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cattle');
    }
};
