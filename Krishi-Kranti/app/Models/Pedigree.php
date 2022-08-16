<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedigree extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    protected $table = 'pedigrees';
    protected $primaryKey = 'register_num';

    public function informationn() {
    	return $this->hasOne('app\informationn','register_num','register_num');
    }
}
