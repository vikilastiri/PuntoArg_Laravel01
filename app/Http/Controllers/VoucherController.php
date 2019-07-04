<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $voucher = Voucher::all();

      return view('vouchers')->with('vouchers', $voucher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vouchers');
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
          "name" => "string|max:255|filled",
          "description" => "string",
          "price"=>"decimal|filled",
          "featured_img" => "image",
        ];
        $messages = [
          "filled" => ":attribute no puede estar vacío.",
          "string" => ":attribute es debe ser texto.",
          "max" => ":attribute tiene un máximo de :max",
          "image"=>"el archivo debe ser del tipo .jpeg, .png, .bmp, .gif, o .svg",
          "decimal"=>":attribute debe ser decimal"
        ];

        $this->validate($request, $rules, $messages); //Son 3 arrays asociativos

        //Paso 1:
        $voucher= new Voucher();

        //Paso 3 imagen:
        $route = $request->file('featured_img')->store('public/vouchers');
        $fileName = basename($route); //
        $voucher->featured_img = $fileName;

        //Paso 1:
        $voucher->name = $request->name;
        $voucher->description = $request->description;
        $voucher->price = $request->price;

        // dd($request, $post);
          $voucher->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $voucher= Voucher::find($id);
      $voucher->get();
        return view('vouchers')->with('vouchers', $voucher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        //
    }

    public function delete(Request $request){
      $id = $request->id;
      $voucherABorrar = Voucher::find($id);
      $voucherABorrar->delete();

      return redirect("/");

    }
}
