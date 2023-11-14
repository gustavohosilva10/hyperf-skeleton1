<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class History extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'history';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'id',
        'id_pet',
        'address',
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
