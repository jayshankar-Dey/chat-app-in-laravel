<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style20.css')); ?>">
    <script src="<?php echo e(asset('assets/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
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
    
    <div class="col-3 p-1 side"  >
      <div class="sidebar">
        
            

<?php $__currentLoopData = $yourchat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yourchat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($yourchat->id != session("id")): ?>
<a href="<?php echo e(route('select_user',['reciverId'=>$yourchat->id])); ?>" class="text-decoration-none">
<div class="row px-2 mt-1">
    <div class="col">
        <div class="row p-0  ">
            <div class="col-3 rounded-circle px-3  ">
               <img src="<?php echo e(asset('uploads/images/'.$yourchat->image)); ?>" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
            </div>
            <div class="col-3 font-bold ">
             <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1"><?php echo e($yourchat->name); ?></h6>
             <?php if($yourchat->active == 0): ?>
             <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
             <?php else: ?>
             <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
             <?php endif; ?>
            </div>
          </div>
    </div>
</div>
</a>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
    </div>
    
    <div class="col-6 border bg-white" >
        <?php if(session("reciverId")): ?>
        
         <div class="row p-0" style="background: rgba(16, 16, 16, 0.76);border:1px solid rgb(77, 224, 240);border-radius: 5px;">
           <div class="col-3 rounded-circle px-3  ">
              <img src="<?php echo e(asset('uploads/images/'.session("image"))); ?>" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
           </div>
           <div class="col-3 text-white ">
            <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1"><?php echo e(session("name")); ?></h6>
            <?php if(session("active") == 0): ?>
            <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
            <?php else: ?>
            <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
            <?php endif; ?>
           </div>
           <div class="col-3 p-2 " style="margin-left: auto;">
              <a href="<?php echo e(route('logout')); ?>"><button class="btn text-white" ><ion-icon name="log-out-outline"></ion-icon></button></a>
           </div>

         </div>

         <div class="row">
            <div class="chats p-2">
                
            <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
            <div class="col-8 mt-2 p-1   rounded  d-flex flex-col <?php if($chat->senderID == session('id')): ?> user <?php endif; ?>">
            <p class=" py-1 border shadow px-4  <?php if($chat->senderID == session('id')): ?> chat <?php endif; ?> " style="border-radius: 40px"> <?php echo e($chat->chats); ?></p>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
               

          
               
               
            </div>
         </div>

<form action="<?php echo e(route('chat')); ?>" method="POST">
    <?php echo csrf_field(); ?>
         <div class="row p-1 px-md-4   mt-2 " style="background: rgba(16, 16, 16, 0.696);border:1px solid rgb(77, 224, 240);border-radius: 5px;">
           <div class="col-8 p-1 d-flex px-2" style="margin-left: 10px">
            <input type="hidden" value="<?php echo e(session("id")); ?>" name="sendarID">
            <input type="hidden" value="<?php echo e(session("reciverId")); ?>" name="reciverId">
            <input type="text" class="form-control msg" placeholder="Message.." name="message">
            <button class="btn text-info  mx-1" style="font-size: 20px"><ion-icon name="send"></ion-icon></button>
           </div>
         </div>
        </form>
         <?php else: ?>
         <div class="row align-items-center justify-center h-100 border text-center " >
           <div class="col my-auto">
            <img src="<?php echo e(asset('uploads/images/pngegg.png')); ?>" alt="" height="200" class="mx-auto">
            <h3 class="text-warning" style="font-family: monospace">Chat Now</h3>
           </div>
         </div>
         <?php endif; ?>

    </div>

<div class="col-3 border">
    <div class="sidebar  ">

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($users->id != session("id")): ?>
        <a href="<?php echo e(route('select_user',['reciverId'=>$users->id])); ?>" class="text-decoration-none">
        <div class="row px-2 mt-1">
            <div class="col">
                <div class="row p-0 d-flex ">
                    <div class="col-3 rounded-circle px-3  ">
                       <img src="<?php echo e(asset('uploads/images/'.$users->image)); ?>" height="50" width="50" alt=""  class="rounded-circle mx-auto mt-1">
                    </div>
                    <div class="col-5 font-bold ">
                     <h6 style="font-family:sans-serif;font-size:15px;" class="mt-1"><?php echo e($users->name); ?></h6>
                      <?php if($users->active == 0): ?>
                     <p class="font-bold text-danger" style="font-family: monospace;font-size:12px;"> Ofline</p>
                      <?php else: ?>
                     <p class="font-bold text-info" style="font-family: monospace;font-size:12px;">Online </p>
                   
                     <?php endif; ?>
                   
                    </div>
                  </div>
            </div>
        </div> 
    </a>
        <?php endif; ?>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        



    </div>
</div>

</div>
    </div> 
    
  
</body>
</html><?php /**PATH D:\php\chatApp\resources\views/chat.blade.php ENDPATH**/ ?>