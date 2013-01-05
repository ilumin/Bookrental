<form action="<?php echo $config['app']['baseUrl']; ?>" class="form-login" method="post" autocomplete="off">

  <h1>Pug Book Rent</h1>

  <div class="control-group">
    <div class="controls">
      <input type="text" id="username" name="username" placeholder="Username">
    </div>
    <div class="controls">
      <input type="password" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <?php if( isset($_error) ): ?>
  <div class="well well-small info-error"><?php echo $_error; ?></div>
  <?php endif; ?>

  <button type="submit" class="btn btn-primary">Sign in</button>

</form>