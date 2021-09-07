<?php
  
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
  
class Stagiaire extends Model
{
    use HasFactory, LogsActivity;
  
    protected $fillable = [
        'nom', 'cin','sexe', 'adresse','tel', 'email',
    ];
    protected static $logAttributes = [ 'id', 'nom','cin','sexe', 'adresse','email'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function absence()
    {
        return $this->hasOne('App\Models\Absence');
    }
}