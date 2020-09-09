<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . 'public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="science.php" name="c1">Science</a>
   <a class="active" href="maths.php" name="c2">Maths</a>
  <a class="active" href="physics.php" name="c3">Physics</a>
  <div class="search-container">
    <form action="#" method="post">
      <input type="text" placeholder="Search.." name="search">
      <input type="submit" name="submit" value="SUBMIT">
    </form>
      <a class="active" href="createpost.html">Create Post</a>
  </div>
</div>

<?php 
if(isset($_POST['submit'])){

$string = $_POST['search']; 
//echo "Sucess" .$string ;
     $str_arr = explode (" ", $string); 
     $posts = getPublishedPostsTag($str_arr); 
     }
     
   ?>

<?php foreach ($posts as $post): ?>
  <div class="post" >
    <h4> <?php echo $post['title']; ?> </h4>
    <?php if($post['category_id']==0) { ?>
    <img src="science.jpg" width="50" height="60"  >
    <?php } else if($post['category_id']==1) { ?>
    <img src="math.jpg" width="50" height="60"  >
    <?php }  else if($post['category_id']==2) { ?>
    <img src="phy1.jpg" width="50" height="60"  >
    <?php } ?>
    <h5> Catogery </h5>
    </div>

    <?php endforeach ?>

   
</body>
</html>
 