

<?php
if(isset($_POST['btn'])){

    function add($data){
//print_r($_POST);
$link = mysqli_connect("localhost","root","","test");
$sql = "INSERT INTO users (firstname,lastname,email,password,confirmpassword) VALUES ('$data[firstname]','$data[lastname]','$data[email]',
'$data[password]','$data[confirmpassword]') ";
      mysqli_query($link,$sql);


}
add($_POST);
}

?>

<?php include 'header.php'; ?>


<div class="card">
    <div class="card-title">
        <p align="center"><i><b>Admin Register</b></i></p>

    </div>
    <div class="card-body">
<form  method="POST" action="">

         
            <div class="form-group row" >
              <h4 class="a">First Name* :</h4>
                <div  class="col-sm-5">
                    <input type="text" class="form-control" name="firstname" value="" >
                </div>
            </div>

            <div class="form-group row" >
              <h4 class="b">Last Name* :</h4>
                <div  class="col-sm-5">
                    <input type="text " class="form-control"  name="lastname" value="" >
                </div>
            </div>

            <div class="form-group row" >
        <h4 class="c">Email Address* :</h4>
        <div  class="col-sm-5">
            <input type="text" class="form-control"  name="email" value="" >
        </div>
    </div>

            <div class="form-group row">
              <h4 class="d">Password* :</h4>
                <div  class="col-sm-5">
                    <input type="password" class="form-control" name="password" value="">
                </div>
            </div>

            <div class="form-group row" >
              <h4>Confirm Password* :</h4>
                <div  class="col-sm-5">
                    <input type="password" class="form-control"  name="confirmpassword" value="" >
                </div>
            </div>

          <div class="form-group row" >
              <input  class="btn-success" type="submit"   name="btn" value="submit">
          </div>
       </form>
    </div>
</div>
       <div class="form-group row">
             <a href="login.php"  class="col-sm-3 col-form-label">login</a>
                           
        </div>
        <div class="form-group row">
           <a href="Register.php"  class="col-sm-3 col-form-label">Create  Account</a>
         </div>
<?php include 'footer.php'; ?>
