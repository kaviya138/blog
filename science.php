<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . 'public_functions.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="science.php">Science</a>
  <div class="search-container">
    <form>
      <input type="text" placeholder="Search.." name="search">
      <button class="active" type="submit">Submit</button>
    </form>
      <a class="active" href="createpost.html">Create Post</a>
  </div>
</div>
<?php $posts = getPublishedPostsCatogery("science"); ?>
  <?php foreach ($posts as $post): ?>
  <div class="post" >
    <h4> <?php echo $post['title']; ?> </h4>
    <img src="banner.jpg" width="50" height="60"  >
    <h5> Catogery </h5>
    </div>
    <?php endforeach ?>
</body>
</html>
 