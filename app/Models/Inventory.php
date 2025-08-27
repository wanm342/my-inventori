<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
   
   use HasFactory;
    use SoftDeletes;

    public function user()

    {
        return $this->belongsTo(User::class);
    }
//getter
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
//setter
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);

    }
protected $fillable = [
        'name',
        'qty',
        'serial_no',
    ];


}
