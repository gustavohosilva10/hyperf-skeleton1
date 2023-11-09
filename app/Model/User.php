<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property string $id 
 * @property string $document 
 * @property string $name 
 * @property string $email 
 * @property string $cellphone 
 * @property string $birth_date 
 * @property string $password 
 * @property string $remember_token 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class User extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'users';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'id',
        'uuid',
        'name',
        'email', 
        'birth_date',
        'document', 
        'cellphone',
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime'];

    protected array $hidden = [
        'password',
        'remember_token'
    ];
}
