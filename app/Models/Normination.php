<?php

namespace App\Models;

use App\Models\Member;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Normination extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Member()
    {
        return $this->belongsTo(Member::class);
    }

    public function Office()
    {
        return $this->belongsTo(Office::class);
    }
}
