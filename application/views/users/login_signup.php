
  <span id="brand2">DeepForecasting</span>
  <h2 class="title">Track the present, See the future.</h2>

  <div class="cont">
  <div class="signup">
    <?php echo validation_errors(); ?>
    <div style="color:#fff">Register</div>
  <?php echo form_open('users/register'); ?>
      <div>
        <input type="text" name="username" placeholder="UserName">
      </div>

      <div>
        <input type="email" name="email" placeholder="Email">
      </div>

      <div>
        <input type="password" name="password" placeholder="Password">
      </div>

      <div>
        <input type="password" name="password2" placeholder="Confirm password">
      </div>

      <div>
        <input type="submit" class="btn btn-primary" value="Signup" class="btn">
      </div>
      <span style="color:#fff">By signing up you indicate that you have read and agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</span>
    <?php echo form_close(); ?>
  </div>


  <div class="login">
    <div style="color:#fff">Login</div>
      <?php echo form_open('users/login'); ?>
      <div>
        <input type="text" name="email" placeholder="Email">
        <!-- <input type="email" name="email" placeholder="Email"> -->
      </div>
      <div>
        <input type="password" name="password" placeholder="Password">
      </div>
      <div>
        <input type="submit" value="Login" class="btn">
      </div>
      <span><a href="#">Forgot Password?</a></span>
      <?php echo form_close(); ?>
    </div>
  </div>


</div>
