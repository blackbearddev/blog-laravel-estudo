<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //$user = DB::select('select * from users where active = :active', ['active' => 1]);
        //$users = DB::table('users')->get();
       // $users = DB::table('users')->where('active', 1)->first();
        //get some fields od db
        //$users = DB::table('users')->pluck('name');
        //chunk of recors pega 4 deois mais 4 depois mais 4 e somatudo no final
        // DB::table("users")->orderBy('id')->chunk(4, function($users){
        //     echo "<pre>";
        //     var_dump($users);
        //     echo "</pre>";
        // }); 

        //agregados
        //$users = DB::table('users')->count();
        //$users = DB::table('users')->max('name');

        //exists
        //$users = DB::table('users')->where('active', 1)->exists();
        
        //$users = DB::table('users')->select('name', 'id as id_user')->get();
        
        //$users = DB::table('users')->distinct()->get();
        
        // $users = DB::table('users')
        //     ->select(DB::raw('count(*) as user_count, id'))
        //     ->where('active', '<>' , 0)
        //     ->groupBy('active')
        //     ->get();

        // $users = DB::table('users')
        // ->selectRaw('id * ? as idd', [0.25])
        // ->get();

//        $users = DB::table('users')
//                    ->join('profile', 'users.id', '=' , 'profile.userid')
//                    ->select('users.name', 'users.id', 'profile.photo', 'profile.subs')
//                    ->get();
//

        //$users = DB::table('users')->where('id' , '<=' , 4)->get();
//        //with like
//        $users = DB::table('users')
//            ->where('name', 'like', 'C%')->get();

        //query and
//        $users = DB::table('users')->where([
//            ['name', 'like' , 'C%'],
//            ['active', '<>' , '0']
//        ])->get();
//
//      //query OR

        // $users = DB::table('users')
        //     ->where('id', '>' , 20)
        //     ->orWhere('name' , 'Carlos')
        //     ->get();

        // $users = DB::table('users')
        //     ->orderBy('id', 'desc')
        //     ->where('active', '1')
        //     ->get();
        

        //im random order
        // $users = DB::table('users')
        //     ->inRandomOrder()
        //     ->limit(2)
        //     ->get();
    

        // //update
        // $users = DB::table('users')->where('id', 3)
        // ->update(['name' => 'caraio']);

       // $users = DB::table('users')->increment('views', 1, ['id'=>1]);
        
        
       //$flights = \App\Flight::all();

        //save
    //    $flight = new \App\Flight;

    //    $flight->destination  = "New York";
    //    $flight->save();

        //   $flight = \App\Flight::find(1);
        //   $flight->destination = 'San Francisco';
        //   $flight->save();  

        //$users = \App\User::find(1)->phone;
        //$users = \App\Phone::find(1)->user;
        $users = \App\User::find(1)->comments;
        
        foreach($users as $user):
            echo "<pre>";
            echo $user->texto;
            echo "</pre>";
        endforeach;

        echo "<hr>";

        $usersc = \App\Comments::find(1)->user;
        echo $usersc->name;

        echo "<hr>";

        $usesp = \App\User::find(1)->posts;
         foreach($usesp as $user):
            echo "<pre>";
            echo $user->title;
            echo "</pre>";
        endforeach;


       // return $users;
        //return view('users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    public function newone()
    {
        $user= DB::insert('insert into users (name, active) values (:name, :active)', ['name' => "blackbearddev2", 'active' => 1]);
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
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
