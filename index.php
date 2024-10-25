<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormVerifierController extends Controller
{
    public function valider(Request $req){
        $req->validate(
            [
                "raisonsociale"=>["required","string"],
                "adresse"=>["required","max:20","string"],
                "telephone"=>["required","max:12","string"],
                "email"=>["required","email:strict"],
                "siteweb"=>["required","url"],
                "type"=>["required","string"],
            ],
            [
                "raisonsociale.required"=>"Raison Social doit etre obligatoire",
                "raisonsociale.string"=>"Raison Social doit une chaine de caractere ",

                "adresse.required"=>"adresse doit etre obligatoire",
                "adresse.max:20"=>"adresse doit au maximaum 20 caractere",
                "adresse.string"=>"adresse doit une chaine de caractere",

                "telephone.required"=>"telephone doit etre obligatoire",
                "telephone.max:20"=>"telephone doit au maximaum 12 caractere",
                "telephone.string"=>"telephone doit une chaine de caractere",

                "email.required"=>"email doit etre obligatoire",
                "email.email:strict"=>"email incorrect ",

                "siteweb.required"=>"email doit etre obligatoire",
                "siteweb.url"=>"site web incorrect ",

                "type.required"=>"type doit etre obligatoire",
                "type.string"=>"type doit une chaine de caractere ",


            ]
            );
       
            DB::insert("INSERT INTO fournisseurs (raisonsociale,adresse,telephone,email,siteweb,type)
            values('$req->raisonsociale','$req->adresse','$req->telephone','$req->email','$req->siteweb','$req->type');
            ");

            $listfournisseures=DB::select("SELECT * FROM fournisseurs ");
            return view("listfournisseures")->with("listfournisseures",$listfournisseures);
    }

}

class FormVerifierController extends Controller
{
    public function valider(Request $req){
        $req->validate(
            [
                "raisonsociale"=>["required","string"],
                "adresse"=>["required","max:20","string"],
                "telephone"=>["required","max:12","string"],
                "email"=>["required","email:strict"],
                "siteweb"=>["required","url"],
                "type"=>["required","string"],
            ],
            [
                "raisonsociale.required"=>"Raison Social doit etre obligatoire",
                "raisonsociale.string"=>"Raison Social doit une chaine de caractere ",

                "adresse.required"=>"adresse doit etre obligatoire",
                "adresse.max:20"=>"adresse doit au maximaum 20 caractere",
                "adresse.string"=>"adresse doit une chaine de caractere",

                "telephone.required"=>"telephone doit etre obligatoire",
                "telephone.max:20"=>"telephone doit au maximaum 12 caractere",
                "telephone.string"=>"telephone doit une chaine de caractere",

                "email.required"=>"email doit etre obligatoire",
                "email.email:strict"=>"email incorrect ",

                "siteweb.required"=>"email doit etre obligatoire",
                "siteweb.url"=>"site web incorrect ",

                "type.required"=>"type doit etre obligatoire",
                "type.string"=>"type doit une chaine de caractere ",


            ]
            );
       
            DB::insert("INSERT INTO fournisseurs (raisonsociale,adresse,telephone,email,siteweb,type)
            values('$req->raisonsociale','$req->adresse','$req->telephone','$req->email','$req->siteweb','$req->type');
            ");

            $listfournisseures=DB::select("SELECT * FROM fournisseurs ");
            return view("listfournisseures")->with("listfournisseures",$listfournisseures);
    }

}

class FormVerifierController extends Controller
{
    public function valider(Request $req){
        $req->validate(
            [
                "raisonsociale"=>["required","string"],
                "adresse"=>["required","max:20","string"],
                "telephone"=>["required","max:12","string"],
                "email"=>["required","email:strict"],
                "siteweb"=>["required","url"],
                "type"=>["required","string"],
            ],
            [
                "raisonsociale.required"=>"Raison Social doit etre obligatoire",
                "raisonsociale.string"=>"Raison Social doit une chaine de caractere ",

                "adresse.required"=>"adresse doit etre obligatoire",
                "adresse.max:20"=>"adresse doit au maximaum 20 caractere",
                "adresse.string"=>"adresse doit une chaine de caractere",

                "telephone.required"=>"telephone doit etre obligatoire",
                "telephone.max:20"=>"telephone doit au maximaum 12 caractere",
                "telephone.string"=>"telephone doit une chaine de caractere",

                "email.required"=>"email doit etre obligatoire",
                "email.email:strict"=>"email incorrect ",

                "siteweb.required"=>"email doit etre obligatoire",
                "siteweb.url"=>"site web incorrect ",

                "type.required"=>"type doit etre obligatoire",
                "type.string"=>"type doit une chaine de caractere ",


            ]
            );
       
            DB::insert("INSERT INTO fournisseurs (raisonsociale,adresse,telephone,email,siteweb,type)
            values('$req->raisonsociale','$req->adresse','$req->telephone','$req->email','$req->siteweb','$req->type');
            ");

            $listfournisseures=DB::select("SELECT * FROM fournisseurs ");
            return view("listfournisseures")->with("listfournisseures",$listfournisseures);
    }

}

class FormVerifierController extends Controller
{
    public function valider(Request $req){
        $req->validate(
            [
                "raisonsociale"=>["required","string"],
                "adresse"=>["required","max:20","string"],
                "telephone"=>["required","max:12","string"],
                "email"=>["required","email:strict"],
                "siteweb"=>["required","url"],
                "type"=>["required","string"],
            ],
            [
                "raisonsociale.required"=>"Raison Social doit etre obligatoire",
                "raisonsociale.string"=>"Raison Social doit une chaine de caractere ",

                "adresse.required"=>"adresse doit etre obligatoire",
                "adresse.max:20"=>"adresse doit au maximaum 20 caractere",
                "adresse.string"=>"adresse doit une chaine de caractere",

                "telephone.required"=>"telephone doit etre obligatoire",
                "telephone.max:20"=>"telephone doit au maximaum 12 caractere",
                "telephone.string"=>"telephone doit une chaine de caractere",

                "email.required"=>"email doit etre obligatoire",
                "email.email:strict"=>"email incorrect ",

                "siteweb.required"=>"email doit etre obligatoire",
                "siteweb.url"=>"site web incorrect ",

                "type.required"=>"type doit etre obligatoire",
                "type.string"=>"type doit une chaine de caractere ",


            ]
            );
       
            DB::insert("INSERT INTO fournisseurs (raisonsociale,adresse,telephone,email,siteweb,type)
            values('$req->raisonsociale','$req->adresse','$req->telephone','$req->email','$req->siteweb','$req->type');
            ");

            $listfournisseures=DB::select("SELECT * FROM fournisseurs ");
            return view("listfournisseures")->with("listfournisseures",$listfournisseures);
    }

}

