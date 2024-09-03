<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = ['affiliate_id', 'name', 'status'];

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }
}
