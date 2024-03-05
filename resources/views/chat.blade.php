<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style20.css')}}">
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>home</title>
</head>
<style>
*{
padding: 0;
margin: 0;
}
 .sidebar{
    height: 720px;
    overflow-y: scroll;
    padding: 10px;
 } 
.sidebar::-webkit-scrollbar{
    display: none
}
.chats{
    height: 590px;
    overflow-y: scroll;
    padding: 10px 
} 
.chats::-webkit-scrollbar{
    display: none;
}   
 .side{
    border-right: 1px solid rgba(0, 0, 0, 0.166)
 }
 input[type="text"]{
  outline: none;
  border: none;
  border-radius: 50px;
 }
 body::-webkit-scrollbar{
    display: none;
 }
 .user{
    margin-left: auto;
    overflow: hidden;
    color: white;
    
 }
 .chat{
    background: rgba(18, 226, 226, 0.736);
    margin-left: auto
 }
</style>
<body class="bg-light">

 <div class="container-fluid  ">


<div class="row ">
    {{-- side bar  --}}
    <div class="col-3 p-1 side"  >
      <div class="sidebar">
        
            {{-- ////////////////////user/// --}}

@foreach ($yourchat  as $yourchat )
@if ($yourchat->id != session("id"))
<a href="{{route('select_user',['reciverId'=>$yourchat->id])}}" class="text-decoration-none">
<div class="row px-2 mt-1">
    <div class="col">
        <div class="row p-0  ">
            <div class="col-3 rounded-circle px-3  ">
               <img src="{{asset('uploads/images/'.$yourchat->image)}}" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
            </div>
            <div class="col-3 font-bold ">
             <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1">{{$yourchat->name}}</h6>
             @if ($yourchat->active == 0)
             <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
             @else
             <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
             @endif
            </div>
          </div>
    </div>
</div>
</a>
@endif
@endforeach
{{-- ////////////////////user/// --}}

      </div>
    </div>
    {{-- end side bar --}}
    <div class="col-6 border bg-white" >
        @if (session("reciverId"))
        {{-- ////////////// --}}
         <div class="row p-0" style="background: rgba(16, 16, 16, 0.76);border:1px solid rgb(77, 224, 240);border-radius: 5px;">
           <div class="col-3 rounded-circle px-3  ">
              <img src="{{asset('uploads/images/'.session("image"))}}" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
           </div>
           <div class="col-3 text-white ">
            <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1">{{session("name")}}</h6>
            @if (session("active") == 0)
            <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
            @else
            <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
            @endif
           </div>
           <div class="col-3 p-2 " style="margin-left: auto;">
              <a href="{{route('logout')}}"><button class="btn text-white" ><ion-icon name="log-out-outline"></ion-icon></button></a>
           </div>

         </div>
{{-- ///////////////// --}}
         <div class="row">
            <div class="chats p-2">
                {{-- //message --}}
            @foreach ($chat as $chat)
                    
            <div class="col-8 mt-2 p-1   rounded  d-flex flex-col @if ($chat->senderID == session('id')) user @endif">
            <p class=" py-1 border shadow px-4  @if ($chat->senderID == session('id')) chat @endif " style="border-radius: 40px"> {{$chat->chats}}</p>
            </div>

            @endforeach
               
               {{-- <div class="col-6 p-1   border rounded shadow mt-2  user">
                <div class="row px-3 overflow-hidden max-h-5 font-mono " style="font-size: 14px;">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, adipisci.
                 </div>
              </div> --}}

          
               
               
            </div>
         </div>
{{-- /////////////////// send message --}}
<form action="{{route('chat')}}" method="POST">
    @csrf
         <div class="row p-1 px-md-4   mt-2 " style="background: rgba(16, 16, 16, 0.696);border:1px solid rgb(77, 224, 240);border-radius: 5px;">
           <div class="col-8 p-1 d-flex px-2" style="margin-left: 10px">
            <input type="hidden" value="{{session("id")}}" name="sendarID">
            <input type="hidden" value="{{session("reciverId")}}" name="reciverId">
            <input type="text" class="form-control msg" placeholder="Message.." name="message">
            <button class="btn text-info  mx-1" style="font-size: 20px"><ion-icon name="send"></ion-icon></button>
           </div>
         </div>
        </form>
         @else
         <div class="row align-items-center justify-center h-100 border text-center " >
           <div class="col my-auto">
            <img src="{{asset('uploads/images/pngegg.png')}}" alt="" height="200" class="mx-auto">
            <h3 class="text-warning" style="font-family: monospace">Chat Now</h3>
           </div>
         </div>
         @endif

    </div>

<div class="col-3 border">
    <div class="sidebar  ">
{{-- ///users --}}
        @foreach ($users as $users)
        @if ($users->id != session("id"))
        <a href="{{route('select_user',['reciverId'=>$users->id])}}" class="text-decoration-none">
        <div class="row px-2 mt-1">
            <div class="col">
                <div class="row p-0 d-flex ">
                    <div class="col-3 rounded-circle px-3  ">
                       <img src="{{asset('uploads/images/'.$users->image)}}" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
                    </div>
                    <div class="col-5 font-bold ">
                     <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1">{{$users->name}}</h6>
                      @if ($users->active == 0)
                     <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
                      @else
                     <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
                   
                     @endif
                   
                    </div>
                  </div>
            </div>
        </div> 
    </a>
        @endif
        {{-- ////////////////////user/// --}}
        @endforeach
        



    </div>
</div>

</div>
    </div> 
    
  
</body>
</html>