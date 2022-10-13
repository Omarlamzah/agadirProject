<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $nom=Cookie::get('infofromcookies');
      $valueprenom=Cookie::get('infofromcookiesprenom');
      if(empty($nom)){
        return view("inscription");
      }
      else{
        return view("accuil")->with("fullname",[$nom[0],$valueprenom]);
      }

      
        
    }


  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view("inscription");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "prenom" =>"required",
            "specialite" =>"required",
            "ville" =>"required",
            "email"=>"required|email",
            "tel" =>"required",
        ]);


           $inscr= DB::table("inscriptions")->select(["tel"])->where("tel","=",$request->tel)->first();

           if (empty($inscr->tel)){
           

            Inscription::create($request->all());
            
            Cookie::queue("infofromcookies",$request->name,1200*60);
            Cookie::queue("infofromcookiesprenom",$request->prenom,1200*60);

            return  view("accuil")->with("fullname",[$request->name,$request->prenom]);

           }

           if(!empty($inscr->tel)){
            session()->flash("dijaexist","cet information exist deja");
            return  view("inscription");
           }

           

           return   $inscr->tel;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
