<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use App\Model\Categorys;

/**
 */
class BreedPets extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'breed_pets';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'id',
        'name',
        'id_category'
    ];
   
    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];

    public function category()
    {
        return $this->hasOne(Categorys::class, 'id', 'id_category');
    }
}
