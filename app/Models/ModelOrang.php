<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrang extends Model
{
    protected $table = 'orang';

    public function getOrang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
