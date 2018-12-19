<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="css/query.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <title>!404</title>
  <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
      <div id="left" class="column">
			<div id="top-left"class="top-left"><a href="index.php"><img class="img-responsive" src="images/logo4.png" alt="logo" style="width:148px; height:70px;"></a></div>
			<div class="bottom" style ="background-color: #028fcc;">
				<div class="collapser"><p><button class="parameter" data-toggle="collapse" data-target="#demo" style="font-family: verdana;">Topic</button><span class="glyphicon glyphicon-star" aria-hidden="true"></span></p></div>
				<div id="demo" class="collapse" style="color:#fff">
				<form action="query.php" method="post">
				<input type="hidden" name="query" value="<?php echo $_POST['query'];?>">
				<?php
				if(isset($_POST["city"])){
					echo '<input type="hidden" name="city" value="'.$_POST["city"].'"/>';
				}
				if(isset($_POST["topic"])){
					echo '<input type="hidden" name="topic" value="'.$_POST["topic"].'"/>';
				}
				if(isset($_POST["lang"])){
					echo '<input type="hidden" name="lang" value="'.$_POST["lang"].'"/>';
				}
				?>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="topic" value="environment" class="parameter">Environment</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="topic" value="crime" class="parameter">Crime</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="topic" value="politics" class="parameter">Politics</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="topic" value="social unrest" class="parameter">Social Unrest</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="topic" value="infra" class="parameter">Infrastructure</button></p>
				</form>
				</div>
				<div class="collapser"><p><button class="parameter" data-toggle="collapse" data-target="#demo1" style="font-family: verdana;">City</button></p></div>
				<div id="demo1" class="collapse in" style="color:#fff">
				<form action="query.php" method="post">
				<input type="hidden" name="query" value="<?php echo $_POST['query'];?>">
				<?php
				if(isset($_POST["topic"])){
					echo '<input type="hidden" name="topic" value="'.$_POST["topic"].'"/>';
				}
				if(isset($_POST["city"])){
					echo '<input type="hidden" name="city" value="'.$_POST["city"].'"/>';
				}
				if(isset($_POST["lang"])){
					echo '<input type="hidden" name="lang" value="'.$_POST["lang"].'"/>';
				}
				?>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="delhi" class="parameter">Delhi</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="nyc" class="parameter">New York City</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="mexico city" class="parameter">Mexico City</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="paris" class="parameter">Paris</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="bangkok" class="parameter">Bangkok</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="california" class="parameter">California</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="buenos aires" class="parameter">Buenos Aires</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="dublin" class="parameter">Dublin</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="city" value="sydney" class="parameter">Sydney</button></p>
				</form>
				</div>
				<div class="collapser"><p><button class="parameter" data-toggle="collapse" data-target="#demo2" style="font-family: verdana;">Language</button></p></div>
				<div id="demo2" class="collapse" style="color:#fff">
				<form action="query.php" method="post">
				<input type="hidden" name="query" value="<?php echo $_POST['query'];?>">
				<?php
				if(isset($_POST["city"])){
					echo '<input type="hidden" name="city" value="'.$_POST["city"].'"/>';
				}
				if(isset($_POST["topic"])){
					echo '<input type="hidden" name="topic" value="'.$_POST["topic"].'"/>';
				}
				if(isset($_POST["lang"])){
					echo '<input type="hidden" name="lang" value="'.$_POST["lang"].'"/>';
				}
				?>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="lang" value="en" class="parameter">English</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="lang" value="fr" class="parameter">French</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="lang" value="es" class="parameter">Spanish</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="lang" value="hi" class="parameter">Hindi</button></p>
				<p><button style="font: 16px/1.3 'Lucida Grande',verdana" type="submit" name="lang" value="th" class="parameter">Thai</button></p>
				</form>
				</div>
			</div>
		</div>
		<div id="right" class="column">
			
			<div class="top-right">
				<form action="query.php" method="post">
				<ul>
					
					
					<li><input type="text" class= "form-control" name="query" style="color:#000; width:64vw; margin-top:13px;" value="<?php echo $_POST['query'];?>" autofocus/> </li>
					<li><input value="Search Now" type="submit" class="btn-submit"></li>
					</form>
					<li><form action="Map.html" method="post">
					<input value="Data Analytics" type="submit" class="btn-submit">
					</form></li>
					
				</ul>
				
			</div>
			<div class="bottom">
					<?php
				
				if(isset($_POST["query"])){
				$ch = curl_init();
				
				$query = $_POST["query"];
				$encode = urlencode($query);
				$url;
				if(isset($_POST["topic"]) or isset($_POST["city"]) or isset($_POST["lang"])){
					if(isset($_POST["topic"]) and isset($_POST["city"]) and isset($_POST["lang"])){
						$topic = urlencode($_POST["topic"]);
						$city = urlencode($_POST["city"]);
						$lang = urlencode($_POST["lang"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=city:".$city."&fq=topic:".$topic."&fq=lang:".$lang."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20tweet_hashtags^3&rows=100&wt=php&indent=true";
						curl_setopt($ch, CURLOPT_URL, $url);
					}
					
					if(isset($_POST["topic"]) and isset($_POST["lang"])){
						$topic = urlencode($_POST["topic"]);
						$lang = urlencode($_POST["lang"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=lang:".$lang."&fq=topic:".$topic."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true";
						curl_setopt($ch, CURLOPT_URL, $url);
					}
					
					if(isset($_POST["lang"]) and isset($_POST["city"])){
						$lang = urlencode($_POST["lang"]);
						$city = urlencode($_POST["city"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=city:".$city."&fq=lang:".$lang."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true";
						curl_setopt($ch, CURLOPT_URL, $url);
					}
					
					if(isset($_POST["topic"]) and isset($_POST["city"])){
						$topic = urlencode($_POST["topic"]);
						$city = urlencode($_POST["city"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=city:".$city."&fq=topic:".$topic."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true";
						curl_setopt($ch, CURLOPT_URL, $url);
					}
					
					else if(isset($_POST["topic"])){
						$topic = urlencode($_POST["topic"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=topic:".$topic."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true"; 
						curl_setopt($ch, CURLOPT_URL, $url);
					}
					else if(isset($_POST["city"])){
						$city = urlencode($_POST["city"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=city:".$city."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true"; 
						curl_setopt($ch, CURLOPT_URL, $url);	
					}
					else if(isset($_POST["lang"])){
						$lang = urlencode($_POST["lang"]);
						$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&fq=lang:".$lang."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true"; 
						curl_setopt($ch, CURLOPT_URL, $url);	
					}
				}
				else{
				$url = "http://ec2-100-27-22-93.compute-1.amazonaws.com:8983/solr/IRF18P1/select?defType=dismax&q=".$encode."&qf=text_en^6%20text_hi^6%20text_es^6%20text_fr^6%20text_th^6%20text^6%20tweet_text^6%20tweet_hashtags^3&rows=100&wt=php&indent=true&debugQuery=true";
				curl_setopt($ch, CURLOPT_URL, $url);
				}
 				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				
				
				
				$results = curl_exec($ch);
				curl_close($ch);
	
				
				eval("\$results = " . $results . ";");
	
				echo "<p style='padding-left:10px;background-color:#027db3; font-size:20px; color:#fff;'>Retrieved:  ";
				if($results['response']['numFound']>20){
					echo "20 ";
				}
				else{
					echo $results['response']['numFound']." ";
				}
				echo "results. Found: " . $results['response']['numFound'] . " results. ";
				
				if(isset($_POST["topic"]) or isset($_POST["city"]) or isset($_POST["lang"])){
					if(isset($_POST["topic"]) and isset($_POST["city"]) and isset($_POST["lang"])){
						echo '<span style="float:right;">Filters: Topic = '.ucwords($_POST["topic"]).', City = '.ucwords($_POST["city"]).', Language = '.ucwords($_POST["lang"]).' </span></p>';
					}
					
					else if(isset($_POST["topic"]) and isset($_POST["lang"])){
						echo '<span style="float:right;">Filters: Topic = '.ucwords($_POST["topic"]).', Language = '.ucwords($_POST["lang"]).' </span></p>';
					}
					
					else if(isset($_POST["lang"]) and isset($_POST["city"])){
						echo '<span style="float:right;">Filters: Language = '.ucwords($_POST["lang"]).', City = '.ucwords($_POST["city"]).' </span></p>';
					}
					
					else if(isset($_POST["topic"]) and isset($_POST["city"])){
						echo '<span style="float:right;">Filters: Topic = '.ucwords($_POST["topic"]).', City = '.ucwords($_POST["city"]).' </span></p>';
					}
					else if(isset($_POST["topic"])){
						echo '<span style="float:right;">Filters: Topic = '.ucwords($_POST["topic"]).'</span></p>';
					}
					else if(isset($_POST["city"])){
						echo '<span style="float:right;">Filters: City = '.ucwords($_POST["city"]).'</span></p>';	
					}
					else if(isset($_POST["lang"])){
						echo '<span style="float:right;">Filters: Language = '.ucwords($_POST["lang"]).'</span></p>';	
					}
				}
				else{
				echo "</p>";
				}
				
				
				$c=0;
				foreach($results['response']['docs'] as $item) {
					
					
					if(array_key_exists('user.name', $item)){
						echo "<div class = 'tweet-section'>";
						if(array_key_exists('id', $item)){
						$id = $item['id'];
						
						echo "<h5><a><span class='glyphicon glyphicon-user'></span></a>&nbsp;<a href='https://twitter.com/statuses/".$id."' target='_blank'><b>".implode(" ",$item['user.name'])."</b></a></h5>";
						if(array_key_exists('text', $item)){
						echo "<p>".implode(" ",$item['text'])."</p>";
					}
					if(array_key_exists('topic', $item) or array_key_exists('city', $itm)){
						if(array_key_exists('city', $item) and array_key_exists('topic', $item)){
							echo "<p>Topic: ".ucwords(implode(" ",$item['topic']))."&nbsp;&nbsp;&nbsp;&nbsp;City: ".ucwords(implode(" ",$item['city']))."</p>";
						}
						else if(array_key_exists('city', $item)){
							$city = (implode(" ",$item['city']));
							echo "<p>City: ".ucwords($city)."</p>";
						}
						else if(array_key_exists('topic', $item)){
							echo "<p>Topic: ".ucwords(implode(" ",$item['topic']))."</p>";
						}
							
					}
					if(array_key_exists('polarity', $item)){
						$i = (int)$item['polarity'];
						if($i<0){
							echo "<p>Reaction:😄</p>";
						}
						else if($i==0){
							echo "<p>Reaction:😐</p>";
						}
						else if($i>0){
							echo "<p>Reaction:🙁</p>";
						}
					}
					}
					echo "</div>";
					$c+=1;
					}
					else{
						continue;
					}
					if($c>20){
						break;
					}
				}
			}
				else{
					header('Location: index.php');
				}
			?>
			</div>
		</div>
</body>
</html>