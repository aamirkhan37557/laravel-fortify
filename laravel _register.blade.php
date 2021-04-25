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
           
           //create controller in cmd
           php artisan make:controller Home
             

             //create routes in web.php
                 Route::get('home','Home@index');
             
 
  //create index function in home controller
                           public function index(){
                            return view('home');
                          }
                          
 // now create logout option in home controller 
                         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
             
             
     //now prevent the home page if user is not login redirect to login if he want to access the home page
                                        public function __construct(){
                                                     $this->middleware('auth');
                                                        }
      //now this will redirect to login url which you had created in web.php if not then cretae it like
       Fortify::loginView(function () {
 return view('auth.login');
    });
             
             
             
             ?>
             
             
 


                                     
