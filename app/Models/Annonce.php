<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Annonce extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        
        'user_id',
        'annonce',
        'etat',
        'type',
    ];

    protected static $logAttributes = [ 'id', 'user_id','annonce','etat'];
    //public function user()
    //{
      //  return $this->belongsTo(User::class);
    //}
  
    
}