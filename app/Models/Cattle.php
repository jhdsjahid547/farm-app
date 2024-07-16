<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cattle extends Model
{
    use HasFactory;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(CattleCategoryOption::class, 'type_id');
    }
    public function gender(): BelongsTo
    {
        return $this->belongsTo(CattleCategoryOption::class, 'gender_id');
    }
    public function breed(): BelongsTo
    {
        return $this->belongsTo(CattleCategoryOption::class, 'breed_id');
    }
    public function subsection(): BelongsTo
    {
        return $this->belongsTo(CattleCategoryOption::class, 'subsection_id');
    }
    public function scopeAllRelation(Builder $query): Builder
    {
        return $query->with('type:id,name', 'gender:id,name', 'breed:id,name', 'subsection:id,name');
    }
    public function scopeMostRecent(Builder $query): Builder
    {
        return $query->orderByDesc('created_at');
    }
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when(
            $filters['type'] ?? false,
            fn ($query, $value) => $query->where('type_id', (int)$value)
        )->when(
            $filters['gender'] ?? false,
            fn ($query, $value) => $query->where('gender_id', (int)$value)
        )->when(
            $filters['subsection'] ?? false,
            fn ($query, $value) => $query->where('subsection_id', (int)$value)
        )->when(
            $filters['breed'] ?? false,
            fn ($query, $value) => $query->where('breed_id', (int)$value)
        );
    }
}
