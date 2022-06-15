<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'image', 'name', 'description', 'status', 'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
