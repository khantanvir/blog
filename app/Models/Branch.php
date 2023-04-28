<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public $table = 'branches';

    public function student(){
        return $this->hasOne(Student::class);
    }
}
