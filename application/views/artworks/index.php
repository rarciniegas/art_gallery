<div class="col-md-6 mx-auto">
  <div class="card card-body bg-light mt-5">
		<h2><?= $title ;?></h2>
    <ul class="list-group">
      <?php foreach($artworks as $artwork) : ?>
	       <li class="list-group-item"><?php echo $artwork['title']; ?></a></li>
       <?php endforeach; ?>
    </ul>
  </div>
</div>