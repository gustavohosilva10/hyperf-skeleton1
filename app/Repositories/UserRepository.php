<?php

namespace App\Repositories;
use Hyperf\Di\Container;
use App\Model\User;
use App\Model\Pet;
use App\Interfaces\UserRepositoryInterface;
use Ramsey\Uuid\Uuid;

class UserRepository implements UserRepositoryInterface
{
    protected $container;
    protected $decodedToken;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->decodedToken = $container->get('user');
    }

    public function update($request):bool
    {
        $user = User::find($this->decodedToken->id);

        if($user){

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = password_hash($request->input('password'), PASSWORD_BCRYPT);
            $user->cellphone = $request->input('cellphone');
            $user->save();

            return true;
        }

        return false;
    }

}
