<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
        return $this->id . '： ' . $this->name . ' (' . $this->age . ')';
    }
}