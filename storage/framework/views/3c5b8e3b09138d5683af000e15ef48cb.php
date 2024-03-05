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
    <title>home</title>
</head>
<style>
  .top{
      
      position: relative;
     transform: translate(0px,-100px)
      
  }
  .img{
     
      position: relative;
      transform: translate(0px,-40px);
      justify-content: center;
      align-items: center;
      
  }
  .img1{ 
      border: 7px solid white  
  }
  .cat{
      position: relative;
      transform: translate(0px,-50px);
  }
  .hov:hover{
      cursor: pointer;
      box-shadow: 2px 3px 30px rgb(185, 182, 182)
      
  }
  </style>
    <body>
    
        <div class="container-fluid p-3 sticky-top" style="background: #21282de7">
            <div class="row d-flex justify-content-between">
               <div class="col-md-3  px-5 p-1 ">
                <img src="\image\PngItem_2384298.png" alt="" width="120" style="margin-left: 20px">
               </div>

               <div class="col-md-7 mt-2 d-flex px-5 mx-md-5 mx-3">
                <input type="text" class="form-control w-75 " placeholder="Enter name">
                <button class="btn btn-danger btn-sm mx-2">Subscribe</button>
               </div>
            </div>
        </div>
        
      
        <div class="container-fluid  " style="background: #eff0f4">
            <div class="row  ">
             <div class="col  ">
                <div class="row">
                    
                   <img src="\image\img-8.webp" alt="" height="300">
            
            </div>
             </div>
            </div>
        </div>
    
        
        <div class="container top ">
            <div class="row">
    
                
                <div class="col-md-7 p-2  m-2 ">
                  <div class="row p-0   bg-white shadow mx-2 ">
                    <div class="col p-0 d-flex justify-content-center">
                        <div class="img  p-0 ">
                        <img src="\image\IMG_20221124_182728.jpg" alt="" height="110" width="110" class="mx-auto rounded-circle img1 ">
                        </div>
                    </div>
                   <div class="text-center p-2">
                    <h5>jayshankar</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur ratione voluptatem ut corporis recusandae nostrum delectus corrupti quisquam consequatur excepturi eum, architecto tenetur dicta tempore vel cumque assumenda. Dicta ullam, voluptates exercitationem omnis eveniet repudiandae enim porro illum aliquid accusamus culpa molestiae placeat adipisci eos dolorum? Soluta veritatis labore dolorum.</p>
                    </div>
    
                    <div class="col p-1 border mt-2 mx-2">
                           <div class="row ">
                                 <div class="col-6 d-flex text-center justify-content-center bg-success p-2 border border-3 border-light text-white">
                                 <h3>33</h3>
                                 <p class="p-1">Total Subscriber</p>
                                 </div>
                                 <div class="col-6 d-flex text-center justify-content-center bg-info border border-3 border-light  p-2 text-white">
                                  <h3>33</h3>
                                 <p class="p-1">Total Post</p>
    
                                 </div>
                           </div>
                    </div>
                </div>
    
                <div class="row mx-2 ">
                    <div class="col p-2 border bg-white shadow mt-5">
                        <div class="row px-5 ">
                             <div class="col  p-2 cat  ">
                                  <div class="row px-4">
                                    <div class="col-5 mx-md-2 mx-1">
                                        <div class="row bg-white border">
                                        <div class="card  hov" style="width: 18rem;">
                                            <div class="col p-3">
                                            <img src="\image\project.png" class="card-img-top" alt="..." width="50">
                                           </div>
                                            <div class="card-body d-flex text-center justify-content-center p-0 ">
                                              <p class="card-text text-center text-success h6   " style="font-size: 12px">PROJECTS</p>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
    
                                    <div class="col-5 mx-md-2 mx-1">
                                        <div class="row bg-white border">
                                           <div class="card hov" style="width: 18rem;">
                                            <div class="col p-3">
                                            <img src="\image\galery.png" class="card-img-top" alt="..." width="50">
                                            </div>
                                            <div class="card-body d-flex text-center justify-content-center p-0 ">
                                              <p class="card-text text-center text-success h6 mb-2 " style="font-size: 12px">GALARY</p>
                                            </div>
                                        </div>
                                     </div>
    
                                    </div>
                                  </div>
                             </div>
                        </div>
                    </div>
                </div>
                
                <div class="col"></div>
                <div class="row  mx-2   bg-white  shadow ">
                  <div class="col">
                    <div class="card mb-3 border-0 rounded-0" style="max-width: 700px;">
                        <div class="row g-0">
                          <div class="col-md-6">
                            <img src="\image\me1.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with  lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
    
                <div class="row  mx-2  bg-white shadow ">
                  <div class="card mb-3 rounded-0 border-0" style="max-width: 700px;">
                      <div class="row g-0">
                        <div class="col-md-6">
                          <img src="\image\me2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with  lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
              </div>

              <div class="row p-5 border bg-white shadow mx-2 mt-1">

              </div>
    
                </div>
                <div class="col-md-4 p-md-2 mx-1">
                    <div class="row p-md-5 "></div>
    
                    <div class="row p-2  bg-white shadow">
                     <div class="col">
                        <div class="card">
                            <div class="row ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119743.52297962956!2d85.82045315!3d20.300884149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1700640123497!5m2!1sen!2sin" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
    
                            <div class="card-body">
                                 <div class="col mt-1">
                                    <input type="text" class="form-control" placeholder="Name.....">
                                 </div>
                                 <div class="col mt-1">
                                    <input type="text" class="form-control" placeholder="Email....">
                                 </div>
                                 <div class="col mt-1">
                                   <textarea name="text" cols="30" rows="10" class="form-control" placeholder="Message.........."></textarea>
                                 </div>
                                 <div class="col mt-1">
                                    <button class="btn btn-success">send</button>
                                 </div>
                            </div>
                          </div>  
                     </div>
                    </div>
                    
                </div>

                <div class="row mt-1 border p-5 ">

                </div>
    
    
            </div>
        </div>
    
    
    
  
</body>
</html><?php /**PATH D:\laravel\my_potfolio\resources\views/potfolio.blade.php ENDPATH**/ ?>