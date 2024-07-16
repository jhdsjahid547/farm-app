<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CattleCategory extends Model
{
    use HasFactory;
    public function cattleSubCategory(): HasMany
    {
        return $this->HasMany(CattleCategoryOption::class, 'cattle_category_id');
    }
}
