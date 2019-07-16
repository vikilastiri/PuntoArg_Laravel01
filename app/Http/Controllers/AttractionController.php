<?php

namespace App\Http\Controllers;

use App\Attraction;
use App\Category;
use App\Location;
use Illuminate\Http\Request;


class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $attraction = Attraction::all();

      return view('attractions')->with('attractions', $attraction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(){
  $stmt = Attraction::where('name', 'like', '%'.$_GET["search"].'%')->orwhere('description', 'like', '%'.$_GET["search"].'%')
  ->orderBy('name')
  ->paginate(6);
  $stmt->withPath('?search='.$_GET['search']);
  //dd($stmt);


  if (strlen($stmt!=null)) {
    return view('attractions')->with('attractions', $stmt);
  }else{
      return view('attractions');
  }

}

    public function create()
    {
      $categories=Category::all();
        $locations=Location::all();

        return view('addAttractions')->with('categories', $categories)->with('locations', $locations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
        //Paso 2: Antes vamos a validar los del formulario

        $rules = [ //https://laravel.com/docs/5.8/validation#rule-size
          "name" => "filled|string |max:255",
          "description" => "filled|string",
          "featured_img" => "image",
          "categoy_id"=>"string",
          //"location_id"=>"string",
        ];
        $messages = [
          "filled" => "El campo no puede estar vacío.",
          "string" => "El campo  debe ser texto.",
          "max" => ":attribute tiene un máximo de :max",
          "image"=>"El archivo debe ser del tipo .jpeg, .png, .bmp, .gif, o .svg"
        ];

        $this->validate($request, $rules, $messages); //Son 3 arrays asociativos

        //Paso 1:
        $attraction = new Attraction();

        //Paso 3 imagen:
        $route = $request->file('featured_img')->store('public/attractions');
        $fileName = basename($route); //
        $attraction->featured_img = $fileName;

        //Paso 1:
        $attraction->name = $request->name;
        $attraction->description = $request->description;
        $attraction->category_id= $request->category_id;
        //$attraction->location_id= $request->location_id;

        // dd($request, $post);
        $attraction->save();

        return redirect('/attractions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $attraction= Attraction::find($id);
      $attraction->get();
        return view('attraction')->with('attraction', $attraction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
    // public function delete(Request $request){
    //   $id = $request->id;
    //   $attractionABorrar = Attraction::find($id);
    //   $attractionABorrar->delete();
    //
    //   return redirect("/");
    //
    // }
}
