<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
         'id',
         'tamanho',
         'status',
       
    ];

      public function flavor()
    {
        //this function performes a query in the database where
        //we get the data of user owner of the task
        return $this->belongsTo(Flavor::class, 'flavor_id', 'id');
    }

     public function complement()
    {
        //this function performes a query in the database where
        //we get the data of user owner of the task
        return $this->belongsTo(Complement::class, 'complements_id', 'id');
    }
}
