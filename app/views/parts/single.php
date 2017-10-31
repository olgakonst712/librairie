<?php  
include '../../../database/connect.php';
  
  $id = $_GET['film_id'];

  $single_film = $bdd->query('SELECT * FROM film WHERE film_id ="' .$id .'"');
  $single_film = $single_film->fetchAll();

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
          
<figure class="movie-poster"><img src=<?php echo "../../../public/asset/image/" .$single_film[0]['film_photo_url']; ?>></figure>
         
          </div>
          <div class="midle">
            <h2 class="movie-title"><?php echo $single_film[0]['film_titre']; ?></h2>
            <div class="movie-summary">
              <p><?php echo $single_film[0]['film_explication']; ?></p>
              <p>Nemo enim ipsam voluptatem quia 
            </div>
            <ul class="movie-meta">
              <li><strong>Rating:</strong>
                <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating"><?php echo $single_film[0]['film_rating']; ?></strong> out of 5</span></div>
              </li>
              <li><strong>Length:</strong><?php echo $single_film[0]['film_lenght']; ?></li>
              <li><strong>Premiere:</strong><?php echo $single_film[0]['film_date_sortie']; ?></li>
              <li><strong>Category:</strong><?php echo $single_film[0]['film_genre']; ?></li>
            </ul>
            <ul class="starring">
              <li><strong>Directors:</strong><?php echo $single_film[0]['film_director']; ?></li>
              
              <li><strong>Stars:</strong><?php echo $single_film[0]['film_starts']; ?></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</main>
</body>
</html>