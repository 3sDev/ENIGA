<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeTeacher extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'statut', 'langue', 'nombre_mois', 'raison', 'ancien_compte'
    , 'nouveau_compte', 'years', 'nom_epoux', 'nationalite_epoux', 'travaille_epoux', 'freelance_epoux', 
    'metier_epoux', 'societe_epoux', 'uid_epoux', 'matiers', 'heures_demandees', 'heures_semaine', 
    'institut_demandee', 'heures_semaine_demandee', 'periode_etude', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
