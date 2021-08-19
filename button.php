
<?php

     if(isset($_POST['btn'])){
         
      function loginCheck($data){
      $link = mysqli_connect("localhost","root","","test");
      $sql = "SELECT email, password FROM users WHERE email='$data[email]' and password='$data[password]'";
      $result=mysqli_query($link,$sql);
        $user = mysqli_fetch_assoc($result);

        if($user){
          header('Location:dashboard.php');
        }
        
         }
        loginCheck($_POST);
}
?>
                 <form method="POST" action="">
                       <div >
                           <label >Email</label>
                           <div >
                               <input type="email" name="email"  placeholder="Email">
                           </div>
                       </div>
                       <div>
                           <label >Password</label>
                           <div>
                               <input type="password" name="password"  placeholder="Password">
                           </div>
                       </div>

                       <div>
                           <div >
                               <button type="submit" name="btn" value="submit">Sign in</button>
                           </div>
                       </div>
                   </form>