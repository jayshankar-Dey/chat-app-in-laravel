<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin page</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style20.css')); ?>">
    <script src="<?php echo e(asset('assets/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquary.js')); ?>"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <style>
   
  </style>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 shadow h-75" id="header" >
                <div class="row h5 text-white p-3 mb-0 " style="background: rgb(92, 233, 121)" >
                    <div class="col-9">Chat no :<?php echo e(session('chat_number')); ?></div>
                    
                    <div class="col-3"><a  class="btn text-white bg-warning shadow h6" id="clock"></a></div>
                </div>
                <div class="row px-2 py-2 mt-0 d-flex" style="background: rgb(92, 233, 121)">
                    
                </div>
               
              
                        
                   
               
                <div class="row  h-100  scrollbar-hidden-y p-2" >
                    <div class="col  bg-white  p-2">
                        <?php $__currentLoopData = $user_chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="row mx-1 my-3 bg-warning p-2"  style="border-radius: 30%; font-size:13px;"><?php echo e($user_chat->chat); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                   
                    <div class="col p-2 bg-white">
                        <?php $__currentLoopData = $your_chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $your_chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="row mx-1 my-3 bg-secondary p-2 d-flex  text-white border border-dark justify-between body" style="border-radius: 30%; font-size:13px;" >
                            <div class="col-10">
                                <?php echo e($your_chat->chat); ?>   
                            </div>
                           <div class="col-1">
                            <a href="<?php echo e(route('delete.chat',['id'=> $your_chat->ids,'phone'=>$your_chat->chat_phone,'login_no' => $your_chat->login_phone])); ?>" class="text-danger text-decoration-none">X</a>
                           </div>
                            
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                   </div>
         
                   
                   
               

                    
                        
                   - <form action="<?php echo e(route('chat.chat')); ?> " method="POST">
                        <div class="row p-3 d-flex" style="background: rgb(92, 233, 121)">
                          
                                <?php echo csrf_field(); ?>
                            <div class="col-8">
                                <input type="text" name="chat" placeholder="Enter text..." class="form-control">
                                <input type="hidden" name="loginno" placeholder="Enter text..." class="form-control" value="<?php echo e($login_no); ?>">
                                <input type="hidden" name="chatno" placeholder="Enter text..." class="form-control" value="<?php echo e(session('chat_number')); ?>">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">send</button>
                            </div>
                       
                        </div>
                    </form>
                  </div> 
         
            </div>
        </div>
    </div>
   

</body>
<script>
$(document).ready(function(){

    function showTime(){
  // to get current time/ date.
  var date = new Date();
  // to get the current hour
  var h = date.getHours();
    // to get the current minutes
  var m = date.getMinutes();
  //to get the current second
  var s = date.getSeconds();
  // AM, PM setting
  var session = "AM"; 
  
 //conditions for times behavior 
  if ( h == 0 ) {
    h = 12;
  }
  if( h >= 12 ){
     session = "PM";
     }
  
  if ( h > 12 ){
    h = h - 12;
  }
  m = ( m < 10 ) ? m = "0" + m : m;
  s = ( s < 10 ) ? s = "0" + s : s;
  
  //putting time in one variable
  var time = h + ":" + m + ":" + s + " " + session;
  //putting time in our div
  $('#clock').html(time); 
  //to change time in every seconds
  setTimeout( showTime, 1000 );
}
showTime();

}); 

 </script>

</html> <?php /**PATH D:\laravel\chatapp\resources\views/userchat.blade.php ENDPATH**/ ?>