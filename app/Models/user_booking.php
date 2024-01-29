<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_booking extends Model
{
    use HasFactory;
    protected $table='user_booking';
    protected $primarykey ="u_id";
    public $timestamps=false;   


    public function setCatAttribute($value)
    {
        $this->attributes['U_gender'] = json_encode($value);
    }
  
    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['U_gender'] = json_decode($value);
    }

}
