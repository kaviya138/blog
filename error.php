function getPublishedPostsTag($str_arr)	
 {
	// use global $conn object in function
	echo "Count of search" .count($str_arr);
	global $conn;
	  
	$tags=array();
	 $final_posts = array() ;
	 $final_pids =array();
	foreach($str_arr as $t)
	{
	$sql = "SELECT (post_id) from post_tag where tag_id = (SELECT id FROM tags where name ='$t')";
	$result = mysqli_query($conn, $sql);
	$posts_id= mysqli_fetch_all($result, MYSQLI_ASSOC);
	$count=mysqli_num_rows ( $result );
	echo "Number" .$count;	
	$pid=(int)$posts_id;
	array_push($final_pids ,$pid );
	//echo "Post_id       " .$pid;
}
	$sql_posts = "SELECT * from posts where id in ('$final_pids')" ;
	$result_posts = mysqli_query($conn, $sql_posts);
	$post= mysqli_fetch_all($result_posts, MYSQLI_ASSOC);
	//array.append($final_posts, $post);
	   


echo "Count of after" .count($final_posts);
		



return $post;
}
