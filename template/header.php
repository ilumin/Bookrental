<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Book Rentals System</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Book Rentals System for my project in BSD Chula">
  <meta name="author" content="BSD7EX">

  <link href="<?php echo $config['app']['baseUrl']; ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $config['app']['baseUrl']; ?>css/style.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

  <?php if( $_page!='login' ): ?>
  <div class="navbar-wrapper">
    <div class="container">

      <div class="navbar">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <a class="brand" href="<?php echo $config['app']['baseUrl'].'?page=dashboard'; ?>">Pugkung Book Rentals</a>

          <div class="nav-collapse collapse">
            
            <ul class="nav">
              <?php foreach($config['app']['navigator'] as $page => $navigator): ?>
              <li<?php if($_page==$page): ?> class="active"<?php endif; ?>>
                <a href="<?php echo $config['app']['baseUrl'].$navigator['url']; ?>"><?php echo $navigator['label']; ?></a></li>
              <?php endforeach; ?>
            </ul>

            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Admin</a>
            </p>

          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->

      </div><!-- /.navbar -->

    </div> <!-- /.container -->
  </div><!-- /.navbar-wrapper -->
  <?php endif; ?>

  <div class="container page-container">
    <div class="space-top"></div>
