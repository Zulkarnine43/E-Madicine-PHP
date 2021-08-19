
<?php
 function getAll(){
    $link = mysqli_connect("localhost","root","", "test");
     $sql = "SELECT* FROM  addcategory";
         $queryResult=mysqli_query($link,$sql);
         return $queryResult;
}
 $queryResult=getAll();
?>

<?php include 'header.php'; ?>

	<style type="text/css">
		body{
			width:100%;
			text-align:center;
		}
		.shopping{
			margin-top: 50px;
			width:400px;
			height:400px;
			float: left;
			display: block;
			padding: 10px;
			border:1px solid green;
			box-sizing: border-box;
		}
		p{
			font-size: 20px;
			color:darkblue;
		}
	</style>

		<?php  while ($product=mysqli_fetch_assoc($queryResult)) {?>
	<div class="shopping">
		<img width="300px" height="200px" src="<?php echo $product['file'];?>">
       <p id="n"><?php  echo $product['categoryName']; ?></p>
       <p id="p"> <?php  echo $product['price'];   ?></p>
		<button onclick="myFunction()">Add To Cart</button>
	</div>
	 <?php   }  ?>


	<div class="shopping" id="item">
		<p>Items List</p>
		<p >
			<img width="50px" height="50px" src="images/2.jpg">
            Name: <span id="name"></span> Quentity: <span id="Quetity">0</span> Price: <span id="Price">0</span></p>
        <p>Total Price:<span id="total">0</span></p>

	</div>

	
	<button onclick="item()"><img  width="30px" height="30px" src="images/item.png"><br>Item </button>




	<script type="text/javascript">
		document.getElementById("item").style.display="none";
		
		function item(){
			document.getElementById("item").style.display="block";
			
		}

		var i=["0"],totalPrice=["0"];
		
		function myFunction(){
			i++;

            $n=document.getElementById("n").innerHTML;
            $p=Number(document.getElementById("p").innerHTML);

            document.getElementById("name").innerHTML= $n;
			document.getElementById("Quetity").innerHTML=i;
			document.getElementById("Price").innerHTML=i*$p;
			
			totalPrice=(i*$p);
			document.getElementById("total").innerHTML=totalPrice;
		}

	</script>
<!--<form>
    <h4>Your Review Here</h4>
    <div  >
        <h4 > Name* :</h4>
        <input type="text"  name="name" value="" >
    </div>

    <div>
        <h4 class="c">Email Address* :</h4>
        <input type="text"   name="email" value="" >

    </div>
    <div>
        <h4 >Email Address* :</h4>
        <textarea type="text" name="message" cols="40" rows="5" >Message...</textarea>
    </div>
    <input type="submit" value="Submit" >

</form>-->

<?php include 'footer.php'; ?>