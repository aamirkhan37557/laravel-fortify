1. connect laravel with db
2.   after installing laravel fortify  create route for register user in web.php and make design for it 

<?php
                                      use Laravel\Fortify\Fortify;

                                   Fortify::registerView(function () {
                                     return view('admincredentials/register');
                                     });
                                     
                                     
  ?>
                                      
3. in register view first display error 
                           
                                                    @if(count($errors) > 0)
                      <div class="p-1">
                          @foreach($errors->all() as $error)
                          <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}} <button type="button" class="close"
                                  data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button></div>
                          @endforeach
                      </div>
                      @endif
                      
4. now register the  user 

 <form  action="{{route('register')}}" method="post">@csrf
 
 5. check all the in fields names like name,email,password,confirm password etc
 
 6.after succssfully registeration it will redirect to home route create home route for it 
 
           
           
           <?php     
           
           
           php artisan make:controller Home
             
  routes
             
                 Route::get('home','Home@index');
             
  home controller
  
                           public function index(){
                            return view('home');
                          }
             
             
             
             
             
             
             ?>
             
             
 


                                     
