<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventorymodel extends Model
{
    protected $table = 'inventory';
    protected $fillale = ['id', 'name', 'quantity', 'price', 'category'];
    
    use HasFactory;
}
