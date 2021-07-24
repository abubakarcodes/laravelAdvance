<?php
namespace App\Repositories;

use App\BaseRepository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function all() : Collection
    {
        return $this->model->all();
    }

    public function findOrFail($id){
        return $this->model->findOrFail($id);
    }

    public function find($id){
        return $this->model->find($id);
    }


    public function getCollection($id) : Collection
    {
        return $this->model->where('id' , $id)->get();
    }




}
