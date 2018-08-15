<style>
body{
	background-color:white;
	background-image:none;
}
.panel {
    width: 100%;
    min-height: 400px;
    background-color: #fafafa;
    border: 1px solid #ECF0F1;
    padding: 15px;
    margin-bottom: 25px;
	background-position: center center;
}
.dropd0wn .container {
	width: 75%;
    min-height: 40px;
    background-color: #fafafa;
    border: 3px solid #ECF0F1;
    padding: 15px;
    margin: 0 auto;
	background-position: center center;
}
.dropd0wn {
    margin-top: 20px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    min-height: 70px;
}
.media-object{
	margin: 0 15px 0 0;
}
hr{
	
	width: 100%;
	height: 5px;
	color: white;
	padding:0;
	margin:7px 0;
}
.arrow{
	display: inline-block;
	width: 70px;
	height: 70px;
	
}
.price-info{
	display: inline-block;
	font-size: 1.75em;
	margin:0;
	padding: 0 15px;
}
.more{
	display: inline-block;
	font-size: 1.125em;
	margin: 12px 10px;
	padding: 0 15px;
}
</style>
<!-- Start dropdown-menu section -->
<section class="drop">
  <div class="col-md-10 col-md-offset-1 dropdown dropd0wn">
    <div class="container">
      <div class="content">
          <button class="btn btn-danger dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown">
            Companies
            <span class="glyphicon glyphicon-chevron-right"></span>
          </button>
          <ul class="dropdown-menu dropd0wn-menu" role="menu" aria-labelledby="dropdownMenu1">
            <?php foreach ($company as $comp) : ?>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>comp_profile/company_info/<?php echo $comp->idCompany; ?>"> <?php echo $comp->company_name; ?> </a></li>
            <?php endforeach; ?>
          </ul>

      </div>
    </div>
  </div>
</section>
<!-- End dropdown-menu section -->

<!--start company-details section-->
<section class="company-details">
  <div class="container">

      <div class="col-md-10 col-md-offset-1 details">
		
		
		<?php foreach ($company as $comp) : ?>
			<?php
				@$csv = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\". $comp->ticker ."\\" .$comp->ticker. ".csv");
				@$csv = str_getcsv($csv);

				@$sz = (int)(sizeof($csv)/7). "  ";
				@$l_1 = $csv[(($sz-1)*7)-2];
				@$l = $csv[($sz*7)-2]. "  ";
				
				//$res = "[ ".$l_1." => ".$l." ]";
				
				@$def = $l - $l_1;
				
				@$per = ($l - $l_1)/$l_1 * 100;
				
				if ($def>0){
					$status = "up";
					$status_color = "green";
				}
				else{
					$status = "down";
					$status_color = "red";
				}
				

				
			?>
          <div class="panel">
              <a class="pull-left" href="#">
                  <img class="media-object" src="<?php echo base_url();?>asset/images/<?=$comp->company_name;?>.png" width="64" height="64" alt="Image 03" />
              </a>
              <div class="media-body">
                  <h3 class="media-heading">
                      <?=$comp->company_name; ?>
                  </h3>
                   <?=strtoupper($comp->ticker); ?>
              </div>
			  <br>
              <hr>
              <img class="arrow" src="<?=base_url();?>asset/images/<?=$status;?>.png" alt=""/>
              
			  <h4 class="price-info" style="color:<?=$status_color;?>"><?=round($def,2) . "$"?> <span style="color:black"><?=" (".round($per,2)."%)"?></span></h4><br><br>
              <hr>
			  <h4><b>Recent News</b></h4>
			  <ul>
			  <?php
				
					@$string = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\". $comp->ticker ."\\news.json");
					@$json_a = json_decode($string, true);
					@$i = 0;
					
					foreach ($json_a['news'] as $news): ?>
					<?php $i++; if($i >=10)break;?>
					<li><p>
						<a href=<?=$news['a']?>><?=$news['text']?></a>
					</li></p>

				<?php endforeach; ?>
			</ul>
			<span class="more"><a href="<?php echo base_url() ."comp_profile/company_info/". $comp->idCompany;?>">Click for more</a></span>
		  </div>
		  <?php endforeach; ?>

      </div>
      <div class="col-md-4 col-md-offset-2">
        <div class="img-trand">
          <img src="<?php echo base_url();?>asset/images/00.jpg" alt="">
          <img src="<?php echo base_url();?>asset/images/00.jpg" alt="">
        </div>
      </div>

  </div>
</section>
<!--end company-details section-->
