<div class="container">
<h2><?= $title ?></h2>
<?php foreach($artworks as $artwork) : ?>
  <h3><?php echo $artwork['title']; ?></h3>
  <div class="row">
    <div class="col-md-3">
      <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/<?php echo $artwork['image']; ?>">
    </div>
    <div class="col-md-9">
      <?php echo $artwork['description']; ?>
			<?php echo $artwork['created']; ?>
      <?php echo $artwork['medium']; ?>
      <?php echo $artwork['subject']; ?>
      <?php echo $artwork['collection']; ?>
      <?php echo $artwork['location']; ?>
    </div>
  </div>
<?php endforeach; ?>
</div>