
<hr class="profile-hr">
<section class="profile">
<div class="container">
  <?php echo form_open_multipart('users/edit/'.$user['idUser']);?>
    <h3><?= $title ?></h3>
    <div class="col-md-6">
      <input type="hidden" name="id" value="<?php echo $user['idUser']; ?>">
        <div class="form">
          <label for="f-name">First Name</label>
          <input type="text" name="first_name" value="<?php echo $user['username']; ?>" id="f-name">
          <label for="l-name">Last Name</label>
          <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>" id="l-name">
          <label for="email">Email</label>
          <input type="email" name="email" value="<?php echo $user['email']; ?>" id="email">
          <label for="phone">Phone</label>
          <input type="number" name="phone" value="<?php echo $user['phone']; ?>" id="phone">
          <label for="bio">Bio</label>
          <textarea id="bio" name="bio" > <?php echo $user['bio']; ?> </textarea>
          <div class="save-btn text-right">
              <button class="btn btn-primary">Save Profile</button>
              <!-- <input type="submit" class="btn btn-primary" value="Save Profile" class="btn"> -->

          </div>
        </div>
    </div>
    <!-- for large and medium screens -->
    <div class="col-md-3 hidden-xs col-md-offset-3 text-center">
      <div class="profile-img">
        <img src="<?php echo base_url(); ?>asset/images/upload_photo/<?php echo $user['profile_image'] ;?>" width="250" height="250">
      </div>
      <div class="upload-btn">
              <span id="btn-name">Change Image</span>
<input type="file" name="userfile" class="form-control-file" id="upload" style="margin-bottom:10px" />
      </div>
  </div>
  <!-- for small screens only -->
  <div class="col-xs-12 visible-xs text-center">
          <div class="profile-img">
              <img src="<?php echo base_url(); ?>asset/images/upload_photo/<?php echo $user['profile_image'] ;?>">

          </div>
          <div class="upload-btn text-center">
                  <span id="btn-name">Change Image</span>
                  <input type="file" name="file_upload" class="form-control-file" id="upload" style="margin-bottom:10px">

          </div>
      </div>

      <?php echo form_close(); ?>

</div>
</section>
