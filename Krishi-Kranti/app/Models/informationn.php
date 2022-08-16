<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informationn extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'];

    protected $table = 'informationn';
    protected $primaryKey = 'informationn_id';

    public function informationn(){
    	return $this->hasOne('app\pedigree','register_num','register_num');
    }

}
