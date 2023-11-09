<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use App\Model\Pet;
use App\Interfaces\UserRepositoryInterface;
/**
 */
class Vaccines extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'vaccines';
    
    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'uuid',
        'name',
        'date',
        'number_dose',
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
