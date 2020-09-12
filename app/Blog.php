<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected  $guarded=[];

    public function getStatusAttribute($status){
        return [
            1 => 'Published',
            0 => 'Unpublished',
        ][$status];
    }

    public function user(){
      return  $this->belongsTo(User::class);
    }
}
