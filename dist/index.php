<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CF-Cache-Status</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <!-- <link rel="stylesheet" href="css/materialize.css"> -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<!-- <link rel="stylesheet" href="css/material-icons.css"> -->
	<link rel="stylesheet" href="css/optimized.css">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=A07RLdrO2d">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=A07RLdrO2d">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=A07RLdrO2d">
	<link rel="manifest" href="/site.webmanifest?v=A07RLdrO2d">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=A07RLdrO2d" color="#f38020">
	<link rel="shortcut icon" href="/favicon.ico?v=A07RLdrO2d">
	<meta name="apple-mobile-web-app-title" content="CF-Cache-Status">
	<meta name="application-name" content="CF-Cache-Status">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png?v=A07RLdrO2d">
	<meta name="theme-color" content="#ffffff">
	<script defer src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script defer src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js'></script>
	<script defer src="js/index.js"></script>
</head>
<body>

	<nav class="navbar white">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="https://cf-cache-status.net" class="brand-logo">
	
						<!-- OUTLINE ONLY ICON -->
						<!-- <svg class="cache-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M11.243 10.987h1.11v1.11h-1.11zM11.243 6.185h1.11v1.11h-1.11z"></path><path d="M14.523 4.848a1.033 1.033 0 0 0-.112-.429H14.4l-2.136-2.768H3.745L1.58 4.419h.015a.9.9 0 0 0-.117.43v3.785a.914.914 0 0 0 .155.508.914.914 0 0 0-.154.506v3.785a.915.915 0 0 0 .914.914h11.215a.915.915 0 0 0 .914-.914V9.649a1.168 1.168 0 0 0-.149-.517.907.907 0 0 0 .149-.5zm-1.092 8.407H2.571V9.827h10.86zm0-4.8H2.571V5.026h10.86z"></path></svg> -->
						
						<!-- FULL COLOR ICON -->
						<svg width="256px" height="256px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Cache"><rect id="Rectangle-Copy" fill="#FCC77A" x="24" y="68" width="207" height="162"></rect><path d="M187.300571,182.619429 L207.597714,182.619429 L207.597714,202.916571 L187.300571,202.916571 L187.300571,182.619429 Z M187.300571,94.8114286 L207.597714,94.8114286 L207.597714,115.108571 L187.300571,115.108571 L187.300571,94.8114286 Z" id="Shape" fill="#F38020" fill-rule="nonzero"></path><path d="M247.277714,70.3634286 C247.170877,67.6311608 246.472117,64.9546604 245.229714,62.5188571 L245.028571,62.5188571 L205.970286,11.904 L50.1942857,11.904 L10.6057143,62.5188571 L10.88,62.5188571 C9.5189935,64.9190207 8.78329874,67.6228561 8.74057143,70.3817143 L8.74057143,139.593143 C8.74502781,142.901813 9.73144464,146.134714 11.5748571,148.882286 C9.74481832,151.621542 8.76512366,154.840539 8.75885714,158.134857 L8.75885714,227.346286 C8.76893496,236.572522 16.2457637,244.049351 25.472,244.059429 L230.546286,244.059429 C239.772522,244.049351 247.249351,236.572522 247.259429,227.346286 L247.259429,158.153143 C247.099318,154.832814 246.166376,151.595696 244.534857,148.699429 C246.318897,145.984429 247.26629,142.80526 247.259429,139.556571 L247.277714,70.3634286 Z M227.309714,224.091429 L28.7268571,224.091429 L28.7268571,161.408 L227.309714,161.408 L227.309714,224.091429 Z M227.309714,136.32 L28.7268571,136.32 L28.7268571,73.6182857 L227.309714,73.6182857 L227.309714,136.32 Z" id="Shape" fill="#F38020" fill-rule="nonzero"></path></g></g></svg>
						
						&nbsp;CF-Cache-Status
					</a>
					<!-- NAVIGATION LINKS -->
					<!-- <ul class="right">
						<li><a href="https://s.codepen.io/j_holtslander/fullpage/mjgoXY" target="_blank"><i class="material-icons">fullscreen</i><span class="hide-on-small-only"> Fullscreen</span></a></li>
					</ul> -->
				</div>
			</div>
		</div>
	</nav>
	<nav class="search-bar z-depth-0">
			<div class="container">
				<div class="nav-wrapper">
					<form id="url-test-bar" method="get">
							<div class="input-field">
								<input id="search" name="url" type="search" required placeholder="Resource URL to test" autocomplete="off"<?php if($_GET['url']!==''&&$_GET['url']!==null){echo ' value="'.$_GET['url'].'"';}?>>
								<label class="label-icon" for="search"><i class="material-icons">search</i></label>
								<i id="X" class="material-icons">close</i>
							</div>
					</form>
				</div>
			</div>
		</nav>



<section>
	<div class="container">
		<!-- include _result-not-cloudflare.kit -->




<?php

// SET TIME OUT PERIOD FOR GET HEADERS (DEFAULT 60)
ini_set('default_socket_timeout', 5);

// GET HEADERS
$headers=false;
if (isset($_GET['url']) && $_GET['url']!==''){
	$headers = get_headers ($_GET['url']);
	// UNCOMMENT TO TEST
	// var_dump($headers);

	// TAKE AN ACTION IF THERE'S A TIMEOUT ON GETTING HEADERS (EG: NO HTTPS)
	if ($headers === false && count($http_response_header) === 0) {
	    include 'test-timed-out.php';
	}	
}







$status = '';
$ray = '';
$cachecontrol = '';

if (is_array($headers) || is_object($headers))
{
	foreach($headers as $head) {
		if (strpos($head, 'CF-Cache-Status') !== false) {
			$status = $head;
		}
		if (strpos($head, 'CF-RAY') !== false) {
			$ray = $head;
		}
		if (strpos($head, 'Cache-Control') !== false) {
			$cachecontrol = $head;
		}
		if ($ray !== '') {
			$cachecontrol = str_replace('Cache-Control: ', '', $cachecontrol);
		}
		if ($ray !== '') {
			$ray = str_replace('CF-RAY: ', '', $ray);
			// DATA CENTERS - https://www.cloudflarestatus.com/
			// NORTH AMERICA
			$ray = str_replace('-IAD','<br/>(Ashburn, VA, United States)', $ray);
			$ray = str_replace('-ATL','<br/>(Atlanta, GA, United States)', $ray);
			$ray = str_replace('-BOS','<br/>(Boston, MA, United States)', $ray);
			$ray = str_replace('-YYC','<br/>(Calgary, AB, Canada)', $ray);
			$ray = str_replace('-ORD','<br/>(Chicago, IL, United States)', $ray);
			$ray = str_replace('-DFW','<br/>(Dallas, TX, United States)', $ray);
			$ray = str_replace('-DEN','<br/>(Denver, CO, United States)', $ray);
			$ray = str_replace('-DTW','<br/>(Detroit, MI, United States)', $ray);
			$ray = str_replace('-IAH','<br/>(Houston, TX, United States)', $ray);
			$ray = str_replace('-IND','<br/>(Indianapolis, IN, United States)', $ray);
			$ray = str_replace('-JAX','<br/>(Jacksonville, FL, United States)', $ray);
			$ray = str_replace('-MCI','<br/>(Kansas City, MO, United States)', $ray);
			$ray = str_replace('-LAS','<br/>(Las Vegas, NV, United States)', $ray);
			$ray = str_replace('-LAX','<br/>(Los Angeles, CA, United States)', $ray);
			$ray = str_replace('-MFE','<br/>(McAllen, TX, United States)', $ray);
			$ray = str_replace('-MEM','<br/>(Memphis, TN, United States)', $ray);
			$ray = str_replace('-MEX','<br/>(Mexico City, Mexico)', $ray);
			$ray = str_replace('-MIA','<br/>(Miami, FL, United States)', $ray);
			$ray = str_replace('-MSP','<br/>(Minneapolis, MN, United States)', $ray);
			$ray = str_replace('-MGM','<br/>(Montgomery, AL, United States)', $ray);
			$ray = str_replace('-YUL','<br/>(Montréal, QC, Canada)', $ray);
			$ray = str_replace('-BNA','<br/>(Nashville, TN, United States)', $ray);
			$ray = str_replace('-EWR','<br/>(Newark, NJ, United States)', $ray);
			$ray = str_replace('-OMA','<br/>(Omaha, NE, United States)', $ray);
			$ray = str_replace('-PHX','<br/>(Phoenix, AZ, United States)', $ray);
			$ray = str_replace('-PIT','<br/>(Pittsburgh, PA, United States)', $ray);
			$ray = str_replace('-PDX','<br/>(Portland, OR, United States)', $ray);
			$ray = str_replace('-RIC','<br/>(Richmond, Virginia)', $ray);
			$ray = str_replace('-SMF','<br/>(Sacramento, CA, United States)', $ray);
			$ray = str_replace('-SLC','<br/>(Salt Lake City, UT, United States)', $ray);
			$ray = str_replace('-SAN','<br/>(San Diego, CA, United States)', $ray);
			$ray = str_replace('-SJC','<br/>(San Jose, CA, United States)', $ray);
			$ray = str_replace('-YXE','<br/>(Saskatoon, SK, Canada)', $ray);
			$ray = str_replace('-SEA','<br/>(Seattle, WA, United States)', $ray);
			$ray = str_replace('-STL','<br/>(St. Louis, MO, United States)', $ray);
			$ray = str_replace('-TPA','<br/>(Tampa, FL, United States)', $ray);
			$ray = str_replace('-YYZ','<br/>(Toronto, ON, Canada)', $ray);
			$ray = str_replace('-YVR','<br/>(Vancouver, BC, Canada)', $ray);
			$ray = str_replace('-TLH','<br/>(Tallahassee, FL, United States)', $ray);
			$ray = str_replace('-YWG','<br/>(Winnipeg, MB, Canada)', $ray);
			// EUROPE
			$ray = str_replace('-AMS','<br/>(Amsterdam, Netherlands)', $ray);
			$ray = str_replace('-ATH','<br/>(Athens, Greece)', $ray);
			$ray = str_replace('-BCN','<br/>(Barcelona, Spain)', $ray);
			$ray = str_replace('-BEG','<br/>(Belgrade, Serbia)', $ray);
			$ray = str_replace('-TXL','<br/>(Berlin, Germany)', $ray);
			$ray = str_replace('-BRU','<br/>(Brussels, Belgium)', $ray);
			$ray = str_replace('-OTP','<br/>(Bucharest, Romania)', $ray);
			$ray = str_replace('-BUD','<br/>(Budapest, Hungary)', $ray);
			$ray = str_replace('-KIV','<br/>(Chișinău, Moldova)', $ray);
			$ray = str_replace('-CPH','<br/>(Copenhagen, Denmark)', $ray);
			$ray = str_replace('-DUB','<br/>(Dublin, Ireland)', $ray);
			$ray = str_replace('-DUS','<br/>(Düsseldorf, Germany)', $ray);
			$ray = str_replace('-EDI','<br/>(Edinburgh, United Kingdom)', $ray);
			$ray = str_replace('-FRA','<br/>(Frankfurt, Germany)', $ray);
			$ray = str_replace('-HAM','<br/>(Hamburg, Germany)', $ray);
			$ray = str_replace('-HEL','<br/>(Helsinki, Finland)', $ray);
			$ray = str_replace('-IST','<br/>(Istanbul, Turkey)', $ray);
			$ray = str_replace('-KBP','<br/>(Kiev, Ukraine)', $ray);
			$ray = str_replace('-LIS','<br/>(Lisbon, Portugal)', $ray);
			$ray = str_replace('-LHR','<br/>(London, United Kingdom)', $ray);
			$ray = str_replace('-LUX','<br/>(Luxembourg City, Luxembourg)', $ray);
			$ray = str_replace('-MAD','<br/>(Madrid, Spain)', $ray);
			$ray = str_replace('-MAN','<br/>(Manchester, United Kingdom)', $ray);
			$ray = str_replace('-MRS','<br/>(Marseille, France)', $ray);
			$ray = str_replace('-MXP','<br/>(Milan, Italy)', $ray);
			$ray = str_replace('-DME','<br/>(Moscow, Russia)', $ray);
			$ray = str_replace('-MUC','<br/>(Munich, Germany)', $ray);
			$ray = str_replace('-OSL','<br/>(Oslo, Norway)', $ray);
			$ray = str_replace('-CDG','<br/>(Paris, France)', $ray);
			$ray = str_replace('-PRG','<br/>(Prague, Czech Republic)', $ray);
			$ray = str_replace('-KEF','<br/>(Reykjavík, Iceland)', $ray);
			$ray = str_replace('-RIX','<br/>(Riga, Latvia)', $ray);
			$ray = str_replace('-FCO','<br/>(Rome, Italy)', $ray);
			$ray = str_replace('-SOF','<br/>(Sofia, Bulgaria)', $ray);
			$ray = str_replace('-ARN','<br/>(Stockholm, Sweden)', $ray);
			$ray = str_replace('-TLL','<br/>(Tallinn, Estonia)', $ray);
			$ray = str_replace('-VIE','<br/>(Vienna, Austria)', $ray);
			$ray = str_replace('-VNO','<br/>(Vilnius, Lithuania)', $ray);
			$ray = str_replace('-WAW','<br/>(Warsaw, Poland)', $ray);
			$ray = str_replace('-ZAG','<br/>(Zagreb, Croatia)', $ray);
			$ray = str_replace('-ZRH','<br/>(Zürich, Switzerland)', $ray);
			// LATIN AMERICA & THE CARIBBEAN
			$ray = str_replace('-BOG','<br/>(Bogotá, Colombia)', $ray);
			$ray = str_replace('-EZE','<br/>(Buenos Aires, Argentina)', $ray);
			$ray = str_replace('-LIM','<br/>(Lima, Peru)', $ray);
			$ray = str_replace('-MDE','<br/>(Medellín, Colombia)', $ray);
			$ray = str_replace('-PTY','<br/>(Panama City, Panama)', $ray);
			$ray = str_replace('-UIO','<br/>(Quito, Ecuador)', $ray);
			$ray = str_replace('-GIG','<br/>(Rio de Janeiro, Brazil)', $ray);
			$ray = str_replace('-GRU','<br/>(São Paulo, Brazil)', $ray);
			$ray = str_replace('-SCL','<br/>(Valparaíso, Chile)', $ray);
			$ray = str_replace('-CUR','<br/>(Willemstad, Curaçao)', $ray);
			// OCEANIA
			$ray = str_replace('-AKL','<br/>(Auckland, New Zealand)', $ray);
			$ray = str_replace('-BNE','<br/>(Brisbane, QLD, Australia)', $ray);
			$ray = str_replace('-MEL','<br/>(Melbourne, VIC, Australia)', $ray);
			$ray = str_replace('-PER','<br/>(Perth, WA, Australia)', $ray);
			$ray = str_replace('-SYD','<br/>(Sydney, NSW, Australia)', $ray);
		}
	}
}
// IF RAY ID AND CACHE STATUS AREN'T SEEN
if ($ray=='' && $status=='' && $headers !==false) {
	include 'result-not-cloudflare.php';
}






if ($_GET['url']!==''&&$_GET['url']!==null){
// If a test was done, do this
// 
// DISPLAY TEST RESULT
	include 'test-was-done.php';
}
else {
// If a test has not been done, do this
// 
// DISPLAY "READY TO TEST" RESULT
	include 'test-was-not-done.html';
}

?>


<!-- include _result-hit.kit -->
<!-- include _result-miss.kit -->
<!-- include _result-expired.kit -->
<!-- include _result-stale.kit -->
<!-- include _result-ignored.kit -->
<!-- include _result-revalidated.kit -->
<!-- include _result-updating.kit -->


		
		



		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<p>
							<h5 class="flow-text">What if there no "CF-Cache-Status" header?</h5>
							<p>
								If the "CF-Cache-Status" header is missing (but you are seeing other Cloudflare headers such as "CF-RAY"), this can indicate that the resource is not something Cloudflare would ordinarily cache. There is a <a href="https://support.cloudflare.com/hc/en-us/articles/200172516-Which-file-extensions-does-CloudFlare-cache-for-static-content-">list of file extensions Cloudflare caches by default</a> and you can utilize Page Rules to implement <a href="https://support.cloudflare.com/hc/en-us/articles/200172266-What-do-the-custom-caching-options-mean-in-Page-Rules-">custom caching options</a> (including static content and HTML).
							</p>
							<h6>Notes:</h6>
							<ul class="browser-default">
								<li>Cloudflare will not cache your site or static content if you have  no-cache and private headers coming from your server. If you want Cloudflare to cache content on your site, please make sure that the headers are changed to allow caching. If you don't know what your headers are returning, click the "Help" link at the bottom of your test result above or try <a href="http://redbot.org/">Redbot</a>.</li>
								<li>Cloudflare does not cache off-site or third-party resources (widgets, etc.).</li>
								<li>Cloudflare will only proxy and cache records where Cloudflare is proxying that record in your DNS settings.</li>
								<li>You can adjust your caching level and cache TTL in <a href="https://dash.cloudflare.com/">your Cloudflare</a> caching settings under the section '<strong>Speed</strong>'.</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5>Disclaimer</h5>
				<p>CF-Cache-Status is neither owned nor operated by Cloudflare Inc. This software available on this site is provided "as is" and there are no warranties expressed or implied.</p>
			</div>
			<div class="col l5 offset-l1 s12">
				<h5>Support links</h5>
				<ul>
					<li><a href="https://support.cloudflare.com/hc/en-us/articles/200172516-What-file-extensions-does-CloudFlare-cache-for-static-content-">What file extensions does Cloudflare cache?</a></li>
					<li><a href="https://support.cloudflare.com/hc/en-us/articles/202775670-How-Do-I-Tell-CloudFlare-What-to-Cache-">How do I tell Cloudflare what to cache?</a></li>
					<li><a href="https://support.cloudflare.com/hc/en-us/articles/115000150272-How-do-I-use-Cache-Everything-with-Cloudflare-">How do I use Cache Everything with Cloudflare?</a></li>
					<li><a href="https://support.cloudflare.com/hc/en-us/search?utf8=%E2%9C%93&query=caching&commit=Search">Cloudflare's caching articles</a></li>
					<li><a href="https://support.cloudflare.com/hc/en-us/search?utf8=%E2%9C%93&query=cdn&commit=Search">Cloudflare's CDN article</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
		&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Copyright <a href="https://jay.holtslander.ca/">Jay Holtslander</a> | Built with <a href="https://codekitapp.com/">CodeKit</a> | Hosted on: <a href="https://do.co/1pfRcaa">DigitalOcean</a> with <a href="https://bit.ly/1T39WpL">ServerPilot</a>
		</div>
	</div>
</footer>
<!-- include _chat-button.kit -->







</body>
</html>
