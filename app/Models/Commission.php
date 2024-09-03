<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = ['affiliate_id', 'amount', 'status'];

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }
}
