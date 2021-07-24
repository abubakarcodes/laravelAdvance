<?php
namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Models\User;
class UserRepository extends BaseRepository
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function getUserData($id){
        return $this->model->where('id' , $id)->first();
    }


    public function getUserFullName($id){

    }

}
