<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }

    public function normination()
    {
        return $this->hasOne(Normination::class);
    }
}
