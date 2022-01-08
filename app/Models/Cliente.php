<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
    
    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }

    public function  getEdadAttribute($value)

    {
         return Carbon::parse($this->f_nacimiento)->age;
    }

}
