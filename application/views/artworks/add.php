<?php echo validation_errors(); ?>

<?php echo form_open_multipart('artworks/add'); ?>
<div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
			<h2><?= $title ;?></h2>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
	  <label>Artist</label>
	  <select name="artist_id" class="form-control">
		  <?php foreach($artists as $artist): ?>
		  	<option value="<?php echo $artist['id']; ?>"><?php echo $artist['last_name']; ?>, <?php echo $artist['first_name']; ?> </option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="description" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
		<label>Created</label>
		<input type="date"  class="form-control" name="created" placeholder="Created">
	</div>
  <div class="form-group">
    <label>Medium</label>
    <input type="text" class="form-control" name="medium" placeholder="Medium">
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="Subject">
  </div>
  <div class="form-group">
    <label>Collection</label>
    <input type="text" class="form-control" name="collection" placeholder="Collection">
  </div>
  <div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" name="location" placeholder="Location">
  </div>
  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
</form>