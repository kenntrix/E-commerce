<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'description',
        'slug'

    ];


    /**
     * Get the products for the category.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Calculate how many products belong to the category.
     *
     * @return int
     */
    public function productsCount(): int
    {
        return $this->products()->count();
    }
}
