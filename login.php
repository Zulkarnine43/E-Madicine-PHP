
<?php

if(isset($_POST['btn'])){
         
         function loginCheck($data){
      $link = mysqli_connect("localhost","root","","test");
      $sql = "SELECT email, password FROM users WHERE email='$data[email]' and password='$data[password]'";
      $result=mysqli_query($link,$sql);

        
        $user = mysqli_fetch_assoc($result);

        if($user){

          session_start();
          $_SESSION['id']=$user['id'];
           $_SESSION['name']=$user['name'];

          header('Location:dashboard.php');
        }
        
         }
         loginCheck($_POST);
}
?>
<?php include 'header.php'; ?>

           <div class="card">
               <div class="card-title">
                   <p align="center"><i><b>Admin Pannel</b></i></p>

               </div>
               <div class="card-body">
                   <form  method="POST" action="">
                       <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                           <div class="col-sm-5">
                               <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="inputPassword3"  class="col-sm-3 col-form-label">Password</label>
                           <div class="col-sm-5">
                               <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-sm-3" style="margin-left: 450px">
                               <button type="submit" name="btn" class="  btn btn-success btn-block" value="submit">Sign in</button>
                           </div>
                       </div>
                   </form>
                   <div class="form-group row">
                           <a href="login.php"  class="col-sm-3 col-form-label">login</a>
                           
                       </div>
                <div class="form-group row">
                           <a href="Register.php"  class="col-sm-3 col-form-label">Create  Account</a>
                       </div>
               </div>
           </div>
<?php include 'footer.php'; ?>
