<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />



        <title>DeepForecasting | Track the present. See the future.</title>

    	<style>
    	body{
    		background-color: #cccccc;
    		background-image: url('<?php echo base_url(); ?>asset/images/7.jpg');
    		background-size: cover;
    		padding-top: 70px;
    	}
    	.container{
    		margin:50px auto;
    		background-color:rgba(0,0,0,.7);
    		border: 1px solid rgba(209, 41, 41, 0.7);
    		border-radius: 5px;
    		font-weight: 600;
    		height: 500px;
    		width: 55%;
    	}
      .flash{
        margin: 15px 0 5px;
      }
	  #brand21{
		  
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
    	#brand2{
    		display: block;
    		width: 100%;
    		margin: 25px 0 10px;
    		text-align: center;
    		font-size: 20px;
    		font-weight: 400;
    		text-shadow: 1px 2px 3px rgba(0,0,0,0.3);
    		letter-spacing: -1px;
    		color:rgba(209, 29, 29, 0.884);
    	}
    	.title{
    		font-size: 19px;
    		font-weight: 400;
    		font-family: Georgia,Times,"Times New Roman","Hiragino Kaku Gothic Pro","Meiryo",serif;
    		margin: 4px 0 32px;
    		color: #999;
    		text-align: center;
    		line-height: 0.5;
    	}

    	* {
    		-webkit-box-sizing: border-box;
    		-moz-box-sizing: border-box;
    		box-sizing: border-box;
    	}
    	.signup, .login{
    		width: 50%;
    		float: left;
    		margin: 25px 0;
    		padding: 0 1% 0;


    	}

    	.signup{
    		border-right: 2px solid #ddd;
    		padding-right: 32px;
    	}

    	.login{
    		float:right;
    		padding-left: 32px;
    	}
    	.cont{
    		padding: 0 32px;
    		position: relative;
    	}

    	.signup form div,
    	.login form div{
    		margin: 15px 0;
    	}

    	.login input,
    	.signup input {
    		border:  1px solid #CCC;
    		background-color: #EEE;
    		border-radius: 2px;
    		width: 100%;
    		padding: 7px;
    	}

    	.login input[type="submit"],
    	.signup input[type="submit"]{

    		color: white;
    		border:  1px solid rgb(27, 121, 209);
    		background-color: #507cc0;
    		border-radius: 2px;

    		width: 30%;
    		padding: 5px;

    		float: right;
    		font-size: 1em;
    		line-height: 1.4;
    	}

    	.signup form span,
    	.login form span{
    		width: 70%;
    		float: left;
    		font-size: 0.7125em;
    		line-height: 1.4;
    	}


    	</style>

</head>
<body>

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
                <img class="img-responsive" src="<?php echo base_url();?>asset/images/logo.jpg"><span><h1><span id="brand21">DeepForecasting</span></h1></span>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active" id="home"><a href="<?php echo base_url(); ?>view" id="main">Home</a></li>
              <!-- <li id="fea"><a href="#features" id="fe">Features</a></li> -->
              <!-- <li><a href="trend.html" id="fe">Trend</a></li> -->
              <!-- <li id="account"><a href="<?php echo base_url();?>users/register">Account</a></li> -->
              <li id="conta"><a href="#contact" id="cont">Contact us <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a>
              </li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav> <!-- End Navbar -->

      <!-- main container -->
      <div class="container">
        <!-- flash messege -->
      <div class="flash">
        <?php if($this->session->flashdata('user_registered')):?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
        <?php endif; ?>
      <div>

        <div class="flash">
          <?php if($this->session->flashdata('user_loggedin')):?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
          <?php endif; ?>
        <div>

          <div class="flash">
            <?php if($this->session->flashdata('login_failed')):?>
              <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
            <?php endif; ?>
          <div>

          <div class="flash">
            <?php if($this->session->flashdata('user_loggedout')):?>
              <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedout').'</p>';?>
            <?php endif; ?>
          <div>
