<?php

namespace App\Http\Controllers;
use App\machine;
use App\departement;
use App\alerte;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function index()
    {
 $dep=departement::selectRaw('label_d,id')->get();
    //nombre des machine par departement
  $nbmd = machine::join('salles','salles.id','=','machines.id_salle')
->join('departements','departements.id','=','salles.id_dep')
->groupBy('departements.id')
->selectRaw('count(*) as number,departements.id')
->get();
//nombre d'alerte par departement
$nbad=alerte::join('machines','machines.id','=','alertes.id_machine')
->join('salles','salles.id','=','machines.id_salle')
->join('departements','departements.id','=','salles.id_dep')
->groupBy('departements.id')
->selectRaw('count(*) as number,departements.id')
->get();

   
    $nball = machine::count('*');
    return view('welcome')->with('dep',$dep)->with('nball',$nball)->with('nbmd',$nbmd)->with('nbad',$nbad);
    }
}
