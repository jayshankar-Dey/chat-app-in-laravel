<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\chat;
class userscontroller extends Controller
{
   
   public function my_home(){
    if(session("id")){
      $users = DB::table('users')->orderBy("active","desc")->get();
      $senderId = session("id");
      $yourchat = DB::table('yourchats')->join('users',function($join){
        $join->on('yourchats.senderID', '=', 'users.id')->orOn('yourchats.reciverID', '=', 'users.id');
      })->select('users.id','users.name','users.image','users.active')->orderBy('users.active','desc')->where('yourchats.senderID',$senderId)
      ->orWhere('yourchats.reciverID',$senderId)->get();
      #chats///////
      $chat = chat::where([
        ['senderID', '=', session("id")],
        ['reciverID', '=',session("reciverId")]
    ])->orWhere([
        ['senderID', '=', session("reciverId")],
        ['reciverID', '=',session("id")] 
    ])->get();
    
      //dd($chat,session("reciverId"));
      return view("chat",["users"=>$users,"yourchat"=>$yourchat,"chat"=>$chat]);
    }else{
      return redirect(route('login_page'));
    }
   }
   public function login_page(){
    if(session("id")){
      return redirect(route('home'));
    }else{
      return view("login");
    }
     }
     public function register_page(){
      if(session("id")){
        return redirect(route('home'));
      }else{
        return view("register");
      }
       
     }
   #register user/////////////////
    public function register(Request $request){
     $request->validate([
         'name' => "required|string",
         "email" => "required|email",
         "password" => "required|min:6",
         'repassword' => "required|min:6",
         "image" => "required|mimes:png,jpg,webp,jpeg"
     ]);
     $find = DB::table('users')->where("email",$request->email)->get();
     if(count($find) == 1){
      return redirect(route('register_page'))->with(["msg"=>"Email alredy register"]);
     }
     if($request->password !== $request->repassword ){
      return redirect(route('register_page'))->with(["msg"=>"Password not match"]);
     }
     if($request->has('image')){
      $file = $request->file('image');
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file->move('uploads/images/',$filename);
     }
    
     DB::table('users')->insert([
          "name"=>$request->name,
          "email"=>$request->email,
          "password"=>md5($request->password),
          "image"=> $filename
     ]);

      return redirect(route('login_page'))->with(["msg"=>"succesfully Register"]);
    }
#login user//////////////////
    public function login(Request $request){
      $request->validate([
          "email" => "required|email",
  
      ]);
      $find = DB::table('users')->where("email",$request->email)->get();
      if(count($find) == 1){
        foreach($find as $find){
           $request->session()->put("id",$find->id);
           $request->session()->put("name",$find->name);
           DB::table('users')->where("id",$find->id)->update([
            "active"=>1
           ]);
        }
        return redirect(route('home'));
      }
    
    }
    #logout user/////////////////
    public function logout(){
        DB::table('users')->where("id",session("id"))->update([
        "active"=>0
        ]);
         session()->flush();
         return redirect(route('login_page'))->with(["msg"=>"Logout succesfully "]);
    }

    #click select user
    public function select_user(Request $request,$reciverId){
      $find = DB::table('users')->where("id",$reciverId)->get();
      if(count($find) == 1){
        foreach($find as $find){
           $request->session()->put("reciverId",$find->id);
           $request->session()->put("name",$find->name);
           $request->session()->put("image",$find->image);
           $request->session()->put("active",$find->active);
        }
       // dd(session("reciverId"),session("name"),session("active"));
        return redirect(route('home'));
      }
    }
    #chat hear/////////
    public function chat(Request $request){
     $find = DB::table('yourchats')->where([
      ['senderID', '=', session("id")],
      ['reciverID', '=',session("reciverId")]
      ])->orWhere([
        ['senderID', '=', session("reciverId")],
        ['reciverID', '=',session("id")]
        ])->get();
    if(count($find) == 1){
     
    }else{
      DB::table('yourchats')->insert([
          "senderId" => session("id"),
          "reciverId" => session("reciverId")
      ]);
    }

    // $find1 = DB::table('yourchats')->where([
    //   ['senderID', '=', session("reciverId")],
    //   ['reciverID', '=',session("id")]
    //   ])->get();
    // if(count($find1) == 1){
    //  dd($find1);
    // }else{
    //   DB::table('yourchats')->insert([
    //     "senderId" => session("id"),
    //     "reciverId" => session("reciverId")
    // ]);
    // }
     //dd($find,$request->all(),$find1);
    if(!$request->message){
      return redirect(route('home'));
    }else{
      DB::table('chats')->insert([
        "chats" => $request->message,
        "senderID" => $request->sendarID,
        "reciverID" => $request->reciverId
   ]);
    }
      return redirect(route('home'));
    }
    #delete ///


}

    



    
   

