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
.names{
	margin: 25px;
}
.names p{
	font-size: 2.125em;
	margin: 40px 0 0 10px;
}
.names span{
	font-size: 1.5125em;
	margin: 40px 0 0 10px;
	color: grey;
}
label{
	margin: 15px 0 0 20px;
}


.accordion{
	width:100%;
	padding:20px 10px;
	color: #555;
	background-color:#E1E1E1;
	border:none;
	text-align:left;
	cursor:pointer;
}
.accordion:after{
	content: "✔";
	font-size: 17px;
	float: right;
}
.accordion.active:after{ content: "✖";}
.accordion.active{background-color:#BBB; }
.accordion:hover{
	background-color:#CCC;
	transition: 0.6s ease-in-out;
}
.content{
	color: #111;
	background-color:#FFF;
	border:solid 1px #DDD;
}
.content p{
	margin:0; 
	padding:20px; 
	text-align:justify;
}
table{ 
	width:100%; 
	border-collapse: collapse;
}
table, td, th{ 
	text-align:left; 
	border:dotted 1px #CCC;
}
td, th{ 
	padding:5px; 
	font-size:.8125em;
}
table tr th{ 
	color: #333; 
	background-color: #999; 
	font-size:.9125em;
}
table tr:nth-child(2n+1){ background-color: #DDD;}
.mp{
	margin: 15px;

}
.graph{
	height: 500px;
	width: 700px;
	margin: 0 200px;
}
</style>
	<?php
	
		$string = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\".$company['ticker']."\\news.json");
		$json_a = json_decode($string, true);
		$reputation = $json_a['sentiment'];
		
		$csv = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\". $company['ticker'] ."\\" .$company['ticker']. ".csv");
		$csv = str_getcsv($csv);
		
		@$prediction = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\". $company['ticker'] ."\\prediction.txt");
		
		$sd = file_get_contents("C:\\xampp\\htdocs\\deepforcasting\\tmpdata\\". $company['ticker'] ."\\sd.json");
		$sd = json_decode($sd);

	?>
	<?php
		@$sz = (int)(sizeof($csv)/7). "  ";
		@$l_1 = $csv[(($sz-1)*7)-2];
		@$l = $csv[($sz*7)-2]. "  ";
		
		//$res = "[ ".$l_1." => ".$l." ]";
		
		@$def = $l - $l_1;
		
		$alpha = $sz - 60;
		
		@$per = ($l - $l_1)/$l_1 * 100;
		
		if ($def>0){
			$status = "up";
			$status_color = "green";
		}
		else{
			$status = "down";
			$status_color = "red";
		}
		
		$i = 0;
		
	?>
    <div class="container">
	<div class="panel col-xs-8">
        <div class="row">
          <div class="col-xs-2"> <!-- for co image and name -->
              <img width="200px" height="200px" src="<?php echo base_url();?>asset/images/<?php echo $company['company_name']; ?>.png">
          </div>
          <div class="col-xs-2 names">
                <p><?=$company['company_name']; ?></p>
				<span><?="(".strtoupper($company['ticker']).")"; ?></span>
          </div>
          <div class="col-xs-offset-4 col-xs-3 text-right flags">
              <ul class="flages">
                  <li id="up" style="color:<?php if($def>0){echo "green";}elseif($def<0){echo "red";}else{echo "grey";}?>"><span class="glyphicon glyphicon-record" aria-hidden="true" title="Profit State"></span></li>
                  <li id="risk" style="color:<?php if($sd/10.0<10){echo "green";}elseif($sd/10.0>10){echo "red";}else{echo "grey";}?>"><span class="glyphicon glyphicon-record" aria-hidden="true" title="Risk State"></span></li>
                  <li id="news" style="color:<?php if($reputation>75){echo "green";}else{echo "red";}?>"><span class="glyphicon glyphicon-record" aria-hidden="true" title="Reputation State"></span></li>
              </ul>
          </div>
      </div> <!-- end of first row -->
	  
      <div class="row"> <!-- second row -->
		<label>Description: </label>
          <div class="col-xs-12 stock-tic">
              <p><?php echo $company['company_desc']; ?></p>
          </div><!-- end of second row -->
      </div>
	  
      
	  <div class="row">
	  <label>Official Website: </label>
          <div class="col-xs-12 stock-tic">
             <a href="<?=$company['company_link']; ?>" target="_blank"><?=$company['company_link']; ?></a>
          </div>
      </div>
    </div>
	</div> <!-- end of container -->

    <div class="container">
	<div class="panel">
        <div class="full">
			<h4>Analysis</h4>

			<button class="accordion">Historical Data</button>
			<div class="content">
				<p>The Last 3 Financial Month</p>
			  <div class="mp">
					<table>
						<tbody>
							<tr>
								<th>Date</th>
								<th>Open</th>
								<th>High</th>
								<th>Low</th>
								<th>Close</th>
								<th>Adj-Close</th>
								<th>Volume</th>
							</tr>
							<?php while ($i < 60):?>
								<tr>
									<td><?=$csv[(($alpha)*7)-6];?></td>
									<td><?=$csv[(($alpha)*7)-5];?></td>
									<td><?=$csv[(($alpha)*7)-4];?></td>
									<td><?=$csv[(($alpha)*7)-3];?></td>
									<td><?=$csv[(($alpha)*7)-2];?></td>
									<td><?=$csv[(($alpha)*7)-1];?></td>
									<td><?=$csv[(($alpha)*7)];?></td>
								</tr>
								<?php $alpha++; $i++;?>
							<?php endwhile;?>
						</tbody>
					</table>
				</div>			
			</div>
			
			<button class="accordion">Prediction & Other Statistics</button>
			<div class="content">
				<p>The predicted close price of tomorrow: <b><?=round($prediction, 4)?>$</b></p>
				<p>The current reputation (recent news): <b><?=$json_a['sentiment']?>%</b></p>
				<p>The Risk rate: <b><?=round($sd/10.0, 2)?>%</b></p>
				<p>The Last profit: 
					<b>
						<span style="color:<?=$status_color;?>"><?=round($def,2) . "$"?> <span style="color:black"><?=" (".round($per,2)."%)"?></span></span>
					</b>
				</p>
				
			</div>
			
			<button class="accordion">Recent News</button>
			<div class="content">

			  <p>Overall sentiment analysis: <b><?=$json_a['sentiment']?>%</b></p>
			  <ul>


				<?php foreach ($json_a['news'] as $news): ?>
					<?php if($news['sentiment'] != 0): ?>
					<li>
						<a href=<?=$news['a']?>><?=$news['text']?></a>
					</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
			</div>
			
			<button class="accordion">Open & Close Prices Figure</button>
			<div class="content">
			  <img class="graph" src="../../tmpdata/<?=$company['ticker']?>\\<?=$company['ticker']?>-closeopen.png">
			</div>
			
			<button class="accordion">Avarage & H-L Figure</button>
			<div class="content">
			  <img class="graph" src="../../tmpdata/<?=$company['ticker']?>\\<?=$company['ticker']?>-info.png">
			</div>
			
			<button class="accordion">EMD's Trend Signal</button>
			<div class="content">
			  <img class="graph" src="../../tmpdata/<?=$company['ticker']?>\\<?=$company['ticker']?>-trend.png">
			</div>
			
			<button class="accordion">Prices VS EMD's Trend Signal</button>
			<div class="content">
			  <img class="graph" src="../../tmpdata/<?=$company['ticker']?>\\<?=$company['ticker']?>-ds.png">
			</div>
			
		</div>	
	</div>
    </div><!-- end of container -->
	
<script>
/********************************************
Accordion
********************************************/
var accordion = document.getElementsByClassName('accordion');
var panel = document.getElementsByClassName('content');
for (i = 0; i < accordion.length; i++){ 
	panel[i].style.display="none";
	accordion[i].onclick = function(){
		var nS = this.nextElementSibling;
		if( nS.style.display=="none"){
			nS.style.display="block";
			nS.className += " animationMove";
			this.className += " active";
		}
		else{ 
			nS.style.display="none";
			nS.className = nS.className.replace(" animationMove", "");
			this.className = this.className.replace(" active","");
		}
	}
}
</script>