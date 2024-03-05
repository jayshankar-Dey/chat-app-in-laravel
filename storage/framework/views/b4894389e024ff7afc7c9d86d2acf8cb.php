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
     <?php if(session('number')): ?>
                    
       
        <div class="row">
            <div class="col-md-6 offset-md-3 shadow h-75" id="header" >
                <div class="row h5 text-white p-3 mb-0 " style="background: rgb(92, 233, 121)" >
                    <div class="col-9">Chat Hear :</div>
                    
                    <div class="col-3"><a  class="btn text-white bg-warning shadow h6" id="clock"></a></div>
                </div>
                
                <form action="<?php echo e(route('user.chat')); ?>" >
                   
                <div class="row px-2 py-2 mt-0 d-flex" style="background: rgb(92, 233, 121)">
                    
                    <div class="col-9 ">
                        <input type="text" name="search" placeholder="Search hear......" class="form-control">
                        <input type="hidden" value="<?php echo e($login_no); ?>" name="number" placeholder="Search hear......" class="form-control">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-dark">search</button>
                    </div>
               
                </div>
            </form>
                
                <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <a href="<?php echo e(route('your.chat',['phone'=>$all->phone,'login_no'=>$login_no])); ?>" class="text-decoration-none">     
                <div class="row p-2 ">
                    <div class="col-2">
                      
                        <img src="<?php echo e(url('image/1695554595.jpg')); ?>" alt="" width="55" height="55" style="border-radius: 50%">
                    </div>
                 
                    <div class="col-6 h6 ">
                       <p class="py-0"><?php echo e($all->name); ?></p>
                        <p class="text-danger " style="font-size: 10px"><?php echo e($all->phone); ?></p>
                        
                    </div>
                </div>
            </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-3 p-3 mx-2  " >
                

            </div>
        </div>

    </div>
   
    <?php endif; ?>
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

// $( function() {
//     $( "#datepicker" ).datepicker();
//   } );

})
</script>
</html> <?php /**PATH D:\laravel\chatapp\resources\views/chat.blade.php ENDPATH**/ ?>