<?php
include("includes/db.php");

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Add Laptop</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>    
<style type="text/css">
body{
	background-image: url('3.jpg');
    background-size: cover;
	
}
table{
	color:white;
	background-image: url('1.jpg');
    background-size: cover;
}
</style>

</head>
<body>

<form method="POST"  action="laptop.php" enctype="multipart/form-data">
<table width="700px" height="650px" align="center" border='1px' >

<tr align= "center">
<td colspan="2" height=80px><h1>Insert Laptop</h1></td>
</tr>


<tr>
<td align="right"><b>Product category</b></td>
<td><select name="product_cat"/>
<option>Select a Category</option>
<?php
			   
			   $get_cats = "select * from laptopcat";
			   $run_cats = mysqli_query($con, $get_cats);
			   while($row_cats = mysqli_fetch_array($run_cats))
			   {   
			   $cat_id= $row_cats['cat_id']; 
			   $cat_title=$row_cats['cat_title'];
			   echo "<option value='$cat_id'>$cat_title</option>";
			   
			   }
			   
			   ?>
</select></td>
</tr>
<tr>
<td align="right" ><b>Product Title</b></td>
<td ><input type="text" name="product_title" size="50"/></td>
</tr>
<tr>
<td align="right"><b>Product Price</b></td>
<td><select name="product_price"/>
<option>Select as per price</option>
<?php
			   
			   $get_price = "select * from pricecat";
			   $run_price = mysqli_query($con, $get_price);
			   while($row_price = mysqli_fetch_array($run_price))
			   {   
			   $price_id= $row_price['price_id']; 
			   $price_title=$row_price['price_title'];
			   echo " <option value='$price_id'>$price_title</option>";
			   
			   }
			   
			   ?>


</select></td>
</tr>

<tr>
<td align="right"><b>Product Image 1</b></td>
<td><input type="file" name="product_img1"/></td>
</tr>

<tr>
<td align="right"><b>Product Image 2</b></td>
<td><input type="file" name="product_img2"/></td>
</tr>
<tr>
<td align="right"><b>Product Image 3</b></td>
<td><input type="file" name="product_img3"/></td>
</tr>

<tr>
<td align="right"><b>Product Image 4</b></td>
<td><input type="file" name="product_img4"/></td>
</tr>

<tr>
<td align="right"><b>Product Cost</b></td>
<td><input type="text" name="product_cost" /></td>
</tr>
<tr>
<td align="right"><b>Product Size</b></td>
<td><input type="text" name="size" size="50"/></td>
</tr>
<tr>
<td align="right"><b>Product Color</b></td>
<td><input type="text" name="color" size="50"/></td>
</tr>
<tr>
<td align="right"><b>Product Ram</b></td>
<td><input type="text" name="ram" size="50"/></td>
</tr>
<tr>
<td align="right"><b>Product Rom</b></td>
<td><input type="text" name="rom" size="50"/></td>
</tr>
<tr>
<td align="right"><b>Product Processor</b></td>
<td><input type="text" name="processor" size="50"/></td>
</tr>


<tr>
<td align="right"><b>Product Description</b></td>
<td><textarea name="product_desc" cols="35" rows="10"></textarea></td>
</tr>

<tr>
<td align="right"><b>Product Keywords</b></td>
<td><input type="text" name="product_keywords" size="50"/></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" name="insert_product" value="Insert Product"/></td>
</tr>

</table>
</form>
</body>
</html>


<?php
if(isset($_POST['insert_product']))
{
	//text data variables
	$product_title=$_POST['product_title'];
    $product_cat=$_POST['product_cat'];
	$product_price=$_POST['product_price'];
	$product_cost=$_POST['product_cost'];
	$product_desc=$_POST['product_desc'];
	$product_size=$_POST['size'];
	$product_color=$_POST['color'];
	$product_ram=$_POST['ram'];
	$product_rom=$_POST['rom'];
	$product_processor=$_POST['processor'];
	
	$product_keywords=$_POST['product_keywords'];
	
	
	//image_names
	$product_img1 = $_FILES['product_img1']['name'] ;
	$product_img2 = $_FILES['product_img2']['name'] ;
	$product_img3 = $_FILES['product_img3']['name'] ;
	$product_img4 = $_FILES['product_img4']['name'] ;
	
	//image temp names
	$temp_name1 = $_FILES['product_img1']['tmp_name'] ;
	$temp_name2 = $_FILES['product_img2']['tmp_name'] ;
	$temp_name3 = $_FILES['product_img3']['tmp_name'] ;
	$temp_name4 = $_FILES['product_img4']['tmp_name'] ;
	
	
	
	
	if($product_title=='' OR $product_cat=='' OR $product_price=='' OR $product_cost==''OR $product_size==''OR $product_color==''OR $product_ram==' 'OR $product_rom==''OR $product_processor==''OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='')
	{
		echo "<script>alert('please fill all the fields')</script>";
	    exit();
	}
	else
	{   
           //uploading images to its folder
		   move_uploaded_file($temp_name1,"product_images/$product_img1");
		   move_uploaded_file($temp_name2,"product_images/$product_img2");
		   move_uploaded_file($temp_name3,"product_images/$product_img3");
		   move_uploaded_file($temp_name4,"product_images/$product_img4");
		
		$insert_product = "insert into laptop (cat_id,price_id,date,product_title,product_img1,product_img2,product_img3,product_img4,product_cost,product_size,product_color,product_ram,product_rom,product_processor,product_desc,product_keywords,tablename)
		                            values ('$product_cat','$product_price',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_img4','$product_cost','$product_size','$product_color','$product_ram','$product_rom','$product_processor','$product_desc','$product_keywords','laptop')";
	
	    $run_product= mysqli_query($con, $insert_product);
		
		if($run_product)
		{
			echo "<script> alert('Product inserted successfully') </script>";
		}
		else
		{
			echo "<script> alert('Product not inserted successfully') </script>";
		}
	
	}
}

?> 



