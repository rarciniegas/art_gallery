

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('artists/add'); ?>
	<div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
			<h2><?= $title ;?></h2>
			<div class="form-group">
				<label>First name</label>
				<input type="text" class="form-control" name="first_name" placeholder="First name">
			</div>
  		<div class="form-group">
				<label>Last name</label>
				<input type="text" class="form-control" name="last_name" placeholder="Last name">
			</div>
  		<div class="form-group">
    		<label>Body</label>
    		<textarea id="editor1" class="form-control" name="bio" placeholder="Add Bio"></textarea>
  		</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
</form>