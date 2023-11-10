<?php

namespace App\Repositories;
use App\Model\Categorys;
use App\Interfaces\CategorysRepositoryInterface;

class CategorysRepository implements CategorysRepositoryInterface
{
    public function get()
    {
        return Categorys::all();
    }
}
