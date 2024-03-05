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
</head>
<body>
   
   
    <div class="container shadow ">
    <div class="row bg-secondary h4 text-white justify-content-center text-center py-4">login allindia ChatApp</div>
   </div>
<div class="container">
    <div class="row  mb-5 p-0">.</div>
    <div class="row justify-content-center">
        <div class="col-md-4 my-5 shadow px-3 py-4 ">
            <form action="<?php echo e(route('user.login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form">
                    
                    <input type="number" placeholder="enter phone number" class="form-control my-3 p-3" name="number" required>
                   
                    <input type="password" placeholder="password"  class="form-control my-2  p-3" name="password" required>
                   
                    <button type="submit" class="w-100 my-3 btn btn-primary text-bold p-3">login</button>
                </div>
               </form>
        </div>
      
    </div>
</div>
</body>
</html><?php /**PATH D:\laravel\chatapp\resources\views/login.blade.php ENDPATH**/ ?>