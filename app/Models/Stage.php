<?php
  
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;
class Stage extends Model

{
    use HasFactory, LogsActivity;
    
    
    protected $fillable = [
        'type', 'date_du','date_au','etablissement','formation','intitule_projet','description_projet','stagiaire_id','duree'
        
    ];

    

    protected static $logAttributes = [ 'id','type', 'date_du','date_au','etablissement','formation','intitule_projet','description_projet','stagiaire_id','duree'];
   
    //public function getDescriptionForEvent(string $eventName): string
  //  {
   //     return "This stage has been {$eventName}";
   // }
   // protected static $logOnlyDirty = true;

   public function alerte()
    {
        return $this->hasOne('App\Models\Alerte');
    }

}
