<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>

<div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <div class="form-group">
				  <label>User name</label>
				  <input type="text" class="form-control" name="user_name" placeholder="NameUser name">
			  </div>
        <div class="form-group">
				  <label>First name</label>
				  <input type="text" class="form-control" name="first_name" placeholder="First name">
			  </div>
        <div class="form-group">
				  <label>Last name</label>
				  <input type="text" class="form-control" name="last_name" placeholder="Last name">
			  </div>
        <div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo base_url(); ?>/users/login" class="btn btn-light btn-block">Login</a>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>


<?php echo form_close(); ?>