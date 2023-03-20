<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'username',
        'expiry_date'
    ];

    public function tickets(){
        return $this->hasMany(Tickets::class);

    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
