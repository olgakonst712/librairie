
<?php include 'app/views/parts/header.php' ?>




  <div id="main">
    <?php foreach ($films as $film): ?>
    <div class="sectionfilm"><a href="app/views/parts/single.php?film_id=<?php echo $film['film_id'];?>"><img src="public/asset/image/<?php echo $film['film_photo_url']; ?>"></a> </div>
    <?php endforeach ?>
  </div>
  <div class="cl">&nbsp;</div>
  <div id="news">
    <div class="head">
      <h3>NEWS</h3>
      <p class="text-right"><a href="#">See all</a></p>
    </div>
    <div class="content">
      <p class="date">12.04.09</p>
      <h4>Disney's A Christmas Carol</h4>
      <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning filmmaker Robert Zemeckis, captures... </p>
      <a href="#">Read more</a> </div>
    <div class="content">
      <p class="date">11.04.09</p>
      <h4>Where the Wild Things Are</h4>
      <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...</p>
      <a href="#">Read more</a> </div>
    <div class="content">
      <p class="date">10.04.09</p>
      <h4>The Box</h4>
      <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing fatal and irrevocable consequences.</p>
      <a href="#">Read more</a> </div>
  </div>
  
  <!-- end NEWS --> 
  
  <!-- Coming -->
  <div id="coming">
    <div class="head">
      <h3>COMING SOON<strong>!</strong></h3>
      <p class="text-right"><a href="#">See all</a></p>
    </div>
    <div class="content">
      <h4>The Princess and the Frog </h4>
      <a href="#"><img src="public/asset/image/movie2.jpg" width="78" alt="coming soon" /></a>
      <p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
      <a href="#">Read more</a> </div>
    <div class="cl">&nbsp;</div>
    <div class="content">
      <h4>The Princess and the Frog </h4>
      <a href="#"><img src="public/asset/image/movie1.jpg" width="78" alt="coming soon" /></a>
      <p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
      <a href="#">Read more</a> </div>
  </div>
  <!-- end Coming -->
  <div class="cl">&nbsp;</div>
  
  <!-- end Main -->
  <?php include 'app/views/parts/footer.php' ?>
<!-- Footer -->