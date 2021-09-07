<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Absence extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        'stage_id',
        'date_du',
        'date_au',
        'cause',
        'nombrejours',
    ];
    
    protected static $logAttributes = [ 'id', 'stagiaire_id','date_du','date_au','cause','nombrejours'];
    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }
    
}
