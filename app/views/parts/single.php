<?php 
include 'database/connect.php'

if (isset($_GET['genre'])){
  $query = $bdd->query('SELECT * FROM film WHERE `film_genre`="'. $_GET['genre'] .'"' );

} else {
  $query = $bdd->query('SELECT * FROM film');

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta content="musique" name="keywords">
<meta content="Download movies" name="description">
<link rel="stylesheet" type="text/css" href="../../../public/asset/css/style.css">
<title>Elders</title>
</head>

<body>
<main class="main-content">
  <div class="container">
    <div class="page">
      <div class="breadcrumbs"> <a href="../../../index.php">Back</a> </div>
      <div class="content">
        <div class="main">
          <div class="midle">
            <figure class="movie-poster"><img src="../../../public/asset/image/movie1.jpg" alt="#"></figure>
          </div>
          <div class="midle">
            <h2 class="movie-title">Titanic</h2>
            <div class="movie-summary">
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed.</p>
            </div>
            <ul class="movie-meta">
              <li><strong>Rating:</strong>
                <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span></div>
              </li>
              <li><strong>Length:</strong> 98 min</li>
              <li><strong>Premiere:</strong> 22 March 2013 (USA)</li>
              <li><strong>Category:</strong> Animation/Adventure/Comedy</li>
            </ul>
            <ul class="starring">
              <li><strong>Directors:</strong> Kirk de Mico (as Kirk DeMico). Chris Sanders</li>
              <li><strong>Writers:</strong> Chris Sanders (screenplay), Kirk De Micco (screenplay)</li>
              <li><strong>Stars:</strong> Nicolas Cage, Ryan Reynolds, Emma Stone</li>
            </ul>
          </div>
        </div>
        <div class="entry-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac pharetra libero. Integer in suscipit diam, sit amet eleifend nunc. Curabitur egestas nunc nulla, in aliquet risus efficitur quis. Vivamus facilisis est libero, vitae iaculis nulla cursus in. Suspendisse potenti. In et fringilla ipsum, quis varius quam. Morbi eleifend venenatis diam finibus vehicula. Suspendisse eu blandit metus. Sed feugiat pellentesque turpis, in lacinia ipsum. Vivamus nec luctus orci.</p>
          <p>Aenean vehicula eget risus sit amet posuere. Maecenas id risus maximus, malesuada leo eget, pellentesque arcu. Phasellus vitae leo rhoncus, consectetur mauris vitae, lacinia quam. Nunc turpis erat, accumsan eget justo quis, auctor ultricies magna. Mauris sodales, risus sit amet hendrerit tincidunt, erat ante facilisis sapien, sit amet maximus neque massa a felis. Nullam consectetur justo massa, vel commodo metus gravida in. Aliquam erat volutpat. Nullam a lorem sed lorem euismod gravida a eu velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis ac ligula vel pharetra. Aenean vitae nulla sed dui volutpat euismod. Nam ex quam, consequat id rutrum sed, porttitor id lectus. Vestibulum venenatis consectetur justo ut sagittis. Duis dignissim tincidunt quam, nec pulvinar libero luctus nec. Morbi blandit nec lorem in ullamcorper.</p>
          <p>Vestibulum et odio massa. Integer at odio ipsum. Proin vitae tristique nibh. Aenean semper ante sit amet ante ultricies tincidunt. Curabitur cursus, urna non ultricies posuere, dolor lacus cursus lorem, a dapibus nibh ex eget sem. Aliquam semper sagittis sapien a fermentum. Nullam sed iaculis lacus, et imperdiet risus. Praesent quis turpis ac nunc sodales tincidunt. Aliquam at leo odio. Sed a tempor nisl, et mattis felis. Nam mauris nunc, commodo ac orci ut, auctor viverra mauris.</p>
          <p>Quisque nec justo vitae metus consectetur ultrices. Duis venenatis lorem massa, eu pulvinar quam faucibus sed. Nulla fringilla lorem sit amet sagittis mattis. Nunc in leo a odio mollis consectetur. Etiam ac nisl eget diam ullamcorper porta. Aliquam consectetur neque eget metus egestas sollicitudin. Curabitur ultrices urna et feugiat malesuada.</p>
          <p>Nulla facilisi. Fusce sed dapibus leo, eu lobortis ante. Duis luctus mauris in ante semper, ut feugiat nisi condimentum. Nullam a odio et justo suscipit tempus. Vestibulum placerat dapibus quam, a egestas turpis efficitur id. Integer suscipit placerat placerat. Phasellus in lorem quis leo egestas accumsan. Nam et euismod ligula. Duis nec erat aliquam, sollicitudin diam non, ornare leo. Pellentesque augue leo, faucibus in nunc nec, tincidunt ullamcorper tortor. Phasellus aliquam condimentum elit. Nulla facilisi. Donec magna libero, bibendum eu faucibus et, mattis at felis. Integer turpis nibh, blandit nec elit vel, euismod laoreet quam. Donec vel ante nisi. Nunc luctus a tellus non.</p>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>