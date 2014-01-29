<?php 

	echo "<script src='jquery.min.js'> </script>
	 <script src='omtmScript.js'> </script>
	 <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<link type='text/css' rel='stylesheet' href='stylesheet.css'/>";

	$url = "https://docs.google.com/spreadsheet/pub?key=0AiSo9ldMVP1cdFM0ME1KNnJXQzR0VXNGT0pVVWNlbkE&output=csv";

	$csv = file_get_contents($url);
	$lines = explode("\n",$csv);
	$company_info = array();

	foreach($lines as $line){
		$cols = explode(",", $line);
		array_push($company_info, $cols[1]." ".$cols[2]);
	};

	$idArr = array (
	"tl" => $company_info[1],
	"ml" => $company_info[2], 
	"bl" => $company_info[3], 
	"tc" => $company_info[4], 
	"mc" => $company_info[5], 
	"bc" => $company_info[6], 
	"tr" => $company_info[7], 
	"mr" => $company_info[8], 
	"br" => $company_info[9]
	);

	$acronyms = array (
		"tl", "ml", "bl", "tc", "mc", "bc", "tr", "mr", "br"
	);


	//echo $idArr['tl'];
	//var_dump($idArr);

	$i=0;
	$quote = '"';
	$company_array = array ();
	for ($i = 0; $i<10 ; $i++) {
		$ind = $acronyms[$i];
		
		$para = $idArr[$ind];
		array_push($company_array, $company_info[$i]);

	};
	

	echo "<body id='container'>
		<!-- Remix Education ----------- ID = topLeft ---->
			<div id='topLeft' class='company-card'>
				<!--  -->
					<h1>Remix Education</h1>
						<img id='topLeft' class='company-card' src='Beta\remix.jpg'>
						<img id='topLeft' class='company-card arrow' src='Beta\arrow.png'>
						<div class='textField tl'>"
						.$company_array[1].
						"</div>
					<footer id='topLeft'>
					<img id='footer' src='Beta\bottom.png'>
					</footer>
			
			</div><br>
			<!-- Alliance Virtual Offices ----------- ID = midLeft ---->
			<div id='midLeft' class='company-card'>
				<h1>Alliance Virtual Office</h1>
					<img id='midLeft' class='company-card' src='Beta\AVO.jpg'>
					<img id='midLeft' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField ml'>"
						.$company_array[2]."
					</div>
				<footer id='midLeft'> 
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- APAX Software ----------- ID = botLeft ---->
			<div id='botLeft' class='company-card'>
				<h1>APAX Software, LLC</h1>
					<img id='botLeft' class='company-card' src='Beta\APAX.png'>
					<img id='botLeft' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField bl'>"
						.$company_array[3]."
					</div>
				<footer  id='botLeft'>
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Team Alpha ----------- ID = topCenter ---->
			<div id='topCenter' class='company-card'>
				<h1>Team Alpha</h1>
					<img id='topCenter' class='company-card' src='Beta\Team Alpha.jpg'>
					<img id='topCenter' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField tc'>"
						.$company_array[4]."
					</div>
				<footer id='topCenter'>
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Awesome Inc U ----------- ID = midCenter ---->
			<div id='midCenter' class='company-card'>
				<h1>Awesome Inc U</h1>
					<img id='midCenter' class='company-card' src='Beta\AINCU.jpg'>
					<img id='midCenter' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField mc'>"
					.$company_array[5]."
					</div>
				<footer id='midCenter' >
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Tag a Pet ----------- ID = botCenter ---->
			<div id='botCenter' class='company-card'>
				<h1>TagaPet</h1>
					<img id='botCenter' class='company-card' src='Beta\tag a pet.png'>
					<img id='botCenter' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField bc'>"
					.$company_array[6]."
					</div>
				<footer id='botCenter'>
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Done in 60 ----------- ID = topRight ---->
			<div id='topRight' class='company-card'>
				<h1>Done in 60 sec</h1>
					<img id='topRight' class='company-card' src='Beta\done in 60.jpg'>
					<img id='topRight' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField tr'>"
					.$company_array[7]."
					</div>
				<footer id='topRight'>
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Premiere Dance ----------- ID = midRight ---->
			<div id='midRight' class='company-card'>
				<h1>Premiere Dance</h1>
					<img id='midRight' class='company-card' src='Beta\prem dance.jpg'>
					<img id='midRight' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField mr'>"
					.$company_array[8]."
					</div>
				<footer id='midRight'>
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>
			<!-- Done in 60 ----------- ID = topRight ---->
			<div id='botRight' class='company-card'>
				<h1>Control My ADHD</h1>
					<img id='botRight' class='company-card' src='Beta\adhd.jpg'>
					<img id='botRight' class='company-card arrow' src='Beta\arrow.png'>
					<div class='textField br'>"
					.$company_array[9]."
					</div>
				<footer id='botRight' >
				<img id='footer' src='Beta\bottom.png'>
				</footer>
			</div><br>

			
		</body></html> ";

	




?>

