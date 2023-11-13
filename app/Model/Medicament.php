<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class Medicament extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'Medicaments';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'id',
        'uuid',
        'name',
        'date',
        'ml',
        'repeat',
        'date_repeat',
        'id_pet'
    ];
    
    public function pet()
    {
        return $this->hasOne(Pet::class, 'id', 'id_pet');
    }
    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
