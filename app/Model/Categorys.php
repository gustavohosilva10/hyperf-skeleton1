<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class Categorys extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'categorys';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'id',
        'uuid',
        'name'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime'];
}
