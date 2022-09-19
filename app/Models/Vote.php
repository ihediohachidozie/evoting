<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function Member()
    {
        return $this->belongsTo(Member::class);
    }

    public function Office()
    {
        return $this->belongsTo(Office::class);
    }
}
