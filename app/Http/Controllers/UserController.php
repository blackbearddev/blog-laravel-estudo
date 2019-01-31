<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // echo "<pre>";
        //var_dump($request->name);
        //var_dump($request->all());
       // var_dump($request->input('id', 'CARAIO')); //ISET
      //  var_dump($request->query('query', 'Carario2'));
        //var_dump($request->only('name'));
        //var_dump($request->except(['name', 'codigo']));
        // if($request->has('name')) //if existe field
        //     echo "TEM FIELD";
    

        // if($request->filled('name')) //if empty field
        //     echo $request->name;
        // else
        //     echo "NO"; 
        //$request->flash(); 
       // return view('users');   
        //$value = $request->file('photo');
        //var_dump($value);
        
        //teste if have a file
        // if($request->hasFile('photo')){
        //     echohas "<pre>";
        //     echo $request->photo;
        //     echo "</pre>";

        // }

        //teste if file is valid
        if($request->hasFile('photo')){
            if($request->file('photo')->isValid()){
                //$path = $request->photo->store('images'); //random file name
                $path= $request->photo->storeAs('images', 'teste.jpg');
                echo "<pre>";
                echo "Uploading...";
                //echo $request->photo . "<br>";
                //echo $request->photo->path(). "<br>";
               // echo $request->photo->extension() . "<br>";                
               //$url = Storage::url('teste.jpg');
               //echo $url;
                echo "</pre>";
            }    
        }
        


       // $username = $request->old('name');
        // echo $username;
        // echo "</pre>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
