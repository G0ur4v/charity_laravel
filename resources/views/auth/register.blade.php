<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register Admin</h1>
              <p class="text-h3"> Lorem ipsum dolor sit amet. </p>
              
            </div>
          </div>
          <form action="/register" method="post">
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif

          @csrf
          <div class="row align-items-center">
             
             <div class="col mt-4">
               <input name="ename" type="text" class="form-control" placeholder="Employee Name">
               <span class="text-danger"> 
                       @error('ename')
                          {{$message}}
                       @enderror
                   </span> 
            </div>
 
           </div>
           <div class="row align-items-center">
             
             <div class="col mt-4">
               <input name="eid" type="text" class="form-control" placeholder="Employee ID">
               <span class="text-danger"> 
                       @error('eid')
                          {{$message}}
                       @enderror
                   </span> 
            </div>
 
           </div>
 
           <div class="row align-items-center mt-4">
             <div class="col">
               <input name="email" type="email" class="form-control" placeholder="Email">
               <span class="text-danger"> 
                       @error('email')
                          {{$message}}
                       @enderror
                   </span> 
            </div>
           </div>
 
           <div class="row align-items-center mt-4">
             <div class="col">
               <input name="password" type="password" class="form-control" placeholder="Password">
               <span class="text-danger"> 
                       @error('password')
                          {{$message}}
                       @enderror
                   </span> 
            </div>
             <!-- <div class="col">
               <input type="password" class="form-control" placeholder="Confirm Password">
             </div> -->
           </div>
 
 
           <div class="row justify-content-start mt-4">
             <div class="col">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input">
                   I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                 </label>
               </div>


               <div class="row align-items-center mt-4">
             <div class="col">
             <button type="submit" class="btn btn-primary">Register</button>
             </div>
             </div>


             <div class="row align-items-center mt-4">
             <div class="col">
             <a href="/login" >Already a user /Login Here </a>
             </div>
            </div>
               
            
            
             </form>
         



          </div>
          
        </div>
      </div>
    </div>
  </section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>