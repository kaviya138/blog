<!DOCTYPE html>
<html>
<body>
<?php 
$conn = mysqli_connect("localhost", "root", "", "myblog");
if($conn==false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else
	{
	$var1=mysqli_real_escape_string($conn, $_POST['name']);
    $var2=mysqli_real_escape_string($conn, $_POST['category_name']);
	$var3=mysqli_real_escape_string($conn, $_POST['Tags']);
    if($var2=="science")
    {
    	$cid=0;
    }
    else if($var2=="maths")
    {
    	$cid=1;
    }
    else {
    	$cid=2;
    }

   
	$sql_post2 = "INSERT INTO posts(user_id, category_id,title) VALUES (101 , '$cid' , '$var1')";	
	$res_post2= mysqli_query($conn, $sql_post2);
	header("location: frontpage.php");
    }
	mysqli_close($conn);

	
	

	
	/* $sql_cat= "SELECT * FROM category where c_name = '$var1'";
	$res_cat= mysqli_query($conn, $sql_cat)
	$count =mysqli_num_rows ( $res_cat );
	echo "number of rows" . $count;
	
	if(mysqli_num_rows ( $res_cat )>0)
	{
		$cid=$res['c_id'];
		$sql_post2 = "INSERT INTO posts(category_id,title) VALUES ('$cid','$var2')";	
		$res_post2= mysqli_query($conn, $sql_post2)
if($res_post2)
{
echo "Records created successfully";
        
}
else {
	echo "ERROR: Could not able to update $sql. " . mysqli_error($conn);
}
		
		
	}
	else
	{
		$sql = "INSERT INTO category(c_id,c_name) VALUES ( 102,'$var1')";
		$res= mysqli_query($conn, $sql);
		if($res)
		{
		    $sql_post1 = "INSERT INTO posts(catagory_id,title) VALUES (102,'$var2')";
		    $res_post1= mysqli_query($conn, $sql_post1);
		    if($res_post1)
		    {
		    	echo "Inserted values successfully in posts";
		    }	
		    else{

		    echo "ERROR: Could not able to update $sql. " . mysqli_error($conn);
		}

		}
		else
		{
			echo "ERROR: Could not able to update $sql. " . mysqli_error($conn);
		}
		
	}*/
	
   
	?>
	