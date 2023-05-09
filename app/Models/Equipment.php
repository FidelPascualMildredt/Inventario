<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $guarded= [];
    public function ordendor()
    {
        return $this->hasOne(Computer::class,'ordenadores_id','id');
    }

    public function mouse()
    {
        return $this->hasOne(Mouse::class,'mouses_id','id');
    }

    public function keyboard()
    {
        return $this->hasOne(Keyboard::class,'keyboards_id','id');
    }

    public function monitor()
    {
        return $this->hasOne(Monitor::class,'monitors_id','id');
    }
}
