<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = "projet";

    protected $fillable = [
        'code_projet',
        'nom_projet',
        'duree',
        'date_debut',
        'date_fin',
        'etat',
        'objectif',
    ];

    public static $rules = [
        'nom_projet' => 'required|max:50',
        'duree' => 'required|integer',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
        'etat' => 'required|in:fini,encours,non_execute',
    ];
}
