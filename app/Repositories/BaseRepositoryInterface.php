<?php
namespace App\BaseRepository;

use Illuminate\Database\Eloquent\Collection;

Interface BaseRepositoryInterface {
    public function all() : Collection;
}
