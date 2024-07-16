<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CattleCategoryOption extends Model
{
    use HasFactory;

    public function typeCategory(): HasMany
    {
        return $this->hasMany(Cattle::class, 'type_id');
    }
    public function genderCategory(): HasMany
    {
        return $this->hasMany(Cattle::class, 'gender_id');
    }
    public function breedCategory(): HasMany
    {
        return $this->hasMany(Cattle::class, 'breed_id');
    }
    public function subsectionCategory(): HasMany
    {
        return $this->hasMany(Cattle::class, 'subsection_id');
    }
    public function categoryCattle(): BelongsTo
    {
        return $this->BelongsTo(CattleCategory::class, 'cattle_category_id');
    }
}
