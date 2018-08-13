<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(!$this->session->userdata('user_role')) :?>
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/admin.css" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/comp_profile.css'); ?>" />

      <link  rel="stylesheet" href="<?php echo base_url();?>asset/css/editprofile.css" />

        <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />

        <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" />

      <link rel="stylesheet" href="<?php echo base_url();?>asset/css/home.css" />

    <title>DeepForecasting</title>
    <style>
    /*.flash{
      margin: 15px 0 5px;
    }*/
	#brand2 {
		display: block;
		width: 100%;
		text-align: center;
		font-size: 0.8125em;
		font-weight: 400;
		text-shadow: 1px 2px 3px rgba(0,0,0,0.3);
		letter-spacing: -1px;
		color: rgba(209, 29, 29, 0.884);
		font-family: Georgia,Times,"Times New Roman","Hiragino Kaku Gothic Pro","Meiryo",serif;
	}

    </style>

</head>
<body style="padding: 50px 0 0 0; ">

    <nav class="navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img class="img-responsive" src="<?php echo base_url();?>asset/images/logo.jpg"><span><h1><span id="brand2">DeepForecasting</span></h1></span>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="nav-collapse">

            <ul class="nav navbar-nav navbar-right">
              <li class="active" id="home"><a href="<?php echo base_url(); ?>view" id="main">Home</a></li>
              <!-- <li id="fea"><a href="#features" id="fe">Features</a></li> -->
              <li><a href="<?php echo base_url(); ?>home" id="fe">Trend</a></li>

            <?php if(!$this->session->userdata('user_role')) :?>
                <li id="conta"><a href="#contact" id="cont">Contact us<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>
            <?php endif; ?>
              <?php if($this->session->userdata('user_role')) :?>
                  <li id="conta"><a href="<?php echo base_url(); ?>admin" id="cont">Add Company</a></li>
              <?php endif; ?>
            <?php if(!$this->session->userdata('logged_in')) :?>
                <li id="account"><a href="<?php echo base_url();?>users/register">Login</a></li>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) :?>
              <li id="account"><a href="<?php echo base_url();?>users/edit/<?php echo $this->session->userdata('idUser'); ?>"> <?php echo $this->session->userdata('username'); ?> </a></li>
              <li>
                <?php echo form_open('view/search',['class'=>'navbar-form navbar-right','role'=>'search']); ?>
                    <div class="form-group">
                        <input type="text" name="query" class="form-control " placeholder="Search">
                    </div>
                <?php echo form_close(); ?>

              </li>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Logout<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Change Password</a></li>
                    <li id="account"><a href="<?php echo base_url();?>users/logout">logout</a></li>
                  </ul>
              </li>
            <?php endif; ?>
              </li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav> <!-- End Navbar -->


      <!-- main container -->
      <div class="container-fluid" style="padding-right: 0; padding-left: 0; margin-right: 0; margin-left: 0;">
        <!-- flash messege -->
      <div class="flash">
        <?php if($this->session->flashdata('insert_company_failed')):?>
          <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('insert_company_failed').'</p>';?>
        <?php endif; ?>
      <div>

        <div class="flash">
          <?php if($this->session->flashdata('insert_company_successful')):?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('insert_company_successful').'</p>';?>
          <?php endif; ?>
        <div>
