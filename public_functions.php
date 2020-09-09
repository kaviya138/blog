<?php
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts ";
	$result = mysqli_query($conn, $sql);
	
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		
		array_push($final_posts, $post);
	}
	return $final_posts;
}

function getPublishedPostsCatogery($cname) {
	global $conn;
	$sql = "SELECT * FROM posts where category_id IN (SELECT c_id FROM category WHERE c_name = '$cname' )  ";
	$result = mysqli_query($conn, $sql);
	
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	$count= mysqli_num_rows ( $result );
	echo "Number of row in the table : " . $count ; 
	if(mysqli_num_rows ( $result ) > 1)
	{

	foreach ($posts as $post) {
		
		array_push($final_posts, $post);
	}
	return $final_posts;
}
return $posts;
}



function getPublishedPostsTag($str_arr)	
 {
	// use global $conn object in function
	//echo "Count of search" .count($str_arr);
	global $conn;
	  
	$tags=array();
	$final_posts = array();
	foreach($str_arr as $t)
	{
	$sql = "SELECT (post_id) from post_tag where tag_id = (SELECT id FROM tags where name ='$t')";
	$result = mysqli_query($conn, $sql);
	$posts_id= mysqli_fetch_all($result, MYSQLI_ASSOC);
	$count=mysqli_num_rows ( $result );
	//echo "Number" .$count;
	
	foreach ($posts_id as $pid) 
	{
		global $conn;
		$pid=(int)$pid;
		//echo "Post_id       " .$pid;
		$sql_posts = "SELECT * from posts where id='$pid'" ;
		$result_posts = mysqli_query($conn, $sql_posts);
	    $post= mysqli_fetch_all($result_posts, MYSQLI_ASSOC);

	    array_push($final_posts, $post);
	   

}
if($count==1)
	{
		return $post; 
	}



		


}
return $post;
}


?>