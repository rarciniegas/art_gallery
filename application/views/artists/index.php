<div class="col-md-6 mx-auto">
  <div class="card card-body bg-light mt-5">
		<h2><?= $title; ?></h2>
		<ul class="list-group">
			<?php foreach($artists as $artist) : ?>
				<li class="list-group-item"><a href="<?php echo site_url('/artists/posts/'.$artist['id']); ?>"><?php echo $artist['last_name']; ?>, <?php echo $artist['first_name']; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>