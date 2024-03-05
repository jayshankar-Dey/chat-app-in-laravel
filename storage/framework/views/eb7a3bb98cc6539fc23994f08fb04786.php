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
    <title>login page</title>
</head>
<style>
    .login{
        height: 700px;
    }
</style>
<body class="bg-light">
   <?php if(session("msg")): ?>
   <script>
    var data = "<?php echo e(session("msg")); ?>"
    alert(data);
</script>
   <?php endif; ?>
    <div class="container">
       <div class="row">
        <div class="col-md-6 login bg-white border  mx-auto p-2 my-2">

            <div class="row text-center d-flex justify-items-center mt-5">
                <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Wellcome to Register Page</h3>
                <p class="text-secondary">this is our information that in register page please fill proparly</p>
            </div>

            <div class="row mt-5 p-2">
                <form action="<?php echo e(route('register')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="col-7 mx-auto mt-4">
                    <input type="text" class="form-control mt-2" placeholder="enter name" name="name" value="<?php echo e(old("name")); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger my-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="email" class="form-control mt-2" placeholder="name@gmail.com" name="email" value="<?php echo e(old("email")); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger my-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="password" class="form-control mt-2" placeholder="********" name="password" value="<?php echo e(old("password")); ?>">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger my-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="password" class="form-control mt-2" placeholder="Re********" name="repassword" value="<?php echo e(old("repassword")); ?>">
                    <?php $__errorArgs = ['repassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger my-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="file" class="form-control mt-2" name="image" value="<?php echo e(old("image")); ?>">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger my-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button class="btn btn-primary w-100 mt-3">Register</button>
                </form>
                    <div class="d-flex mt-2">
                        <p> have any account please</p>
                        <a href="<?php echo e(route('login_page')); ?>" class="text-decoration-none mx-1">Login</a>
                    </div>
                </div>
            </div>

        </div>
       </div>
    </div>
</body>
</html><?php /**PATH D:\php\chatApp\resources\views/register.blade.php ENDPATH**/ ?>