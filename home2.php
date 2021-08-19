
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
			display: green;
			font-size: 20px;
			color:darkblue;
		}
		span{
			color:red;
			font-style: bold;
		}

		
	</style>



	<?php  while ($product=mysqli_fetch_assoc($queryResult)) {?>
	<div class="shopping">
		<img width="300px" height="200px" src="images/2.jpg">
		<p>Product Name:<?php  echo $product['categoryName'];   ?></p>
		<p>Price: <?php  echo $product['price'];   ?></p>
		<button onclick="myFunction()">Add To Cart</button>
	</div>
	 <?php   }  ?>

	

	<div class="shopping" id="item">
		<p>Items List</p>
		<p >
			<img width="50px" height="50px" src="images/2.jpg">
			Quentity: <span id="Quetity">0</span> Price: <span id="Price">0</span></p>
		
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
			document.getElementById("Quetity").innerHTML=i;
			document.getElementById("Price").innerHTML=i*300;
			
			totalPrice=(i*300);
			document.getElementById("total").innerHTML=totalPrice;
		}

	</script>
<?php include 'footer.php'; ?>