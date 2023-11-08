<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use App\Model\Categorys;
use App\Model\BreedPets;

/**
 */
class Pet extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'Pets';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'uuid',
        'name',
        'birth_date',
        'size',
        'sex',
        'file',
        'id_breed',
        'id_category',
        'id_user'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];

    public function category()
    {
        return $this->hasOne(Categorys::class, 'id', 'id_category');
    }

    public function breed()
    {
        return $this->hasOne(BreedPets::class, 'id', 'id_breed');
    }
}
