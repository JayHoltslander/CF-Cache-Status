<?php
// IF CF-CACHE-STATUS = HIT, DISPLAY THIS
if ($status=="CF-Cache-Status: HIT") {?>
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top success">
				<span class="card-title">Success</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAABOFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8CSeP7AAAAZ3RSTlMAAQIDBAUGBwgJCwwQERITFRYaGxwdHiYqKy4vMDEyMzQ1Njc4OTs9Pj9HSUtMTVFVV1tdXmNoaWttcHFzdHeCg4WIjI+dnqWmqqutr7C5ury+wMHDxcfIyszO1dnc3ubo7/X3+fv9ANBSswAAAeZJREFUGBmNwQdDEmEABuD3u9FFVtDQhqkx1HZq2qKiJTFEGTJMi4K49///g+DuPm7BHc+DmVRjyVCxGD2Tb9LWyGd0xFgv0e/HGiJkLxh2nsYc1045W/MqZtkxOY/5EiHiO6N8E/BTa4x2pMBLlBmnJODxmfEKcD3mIh5BSgy4iEECjhIXU4JtmYu6DUuNkc7ft+moYuIGI5UV4CsdKYy9YZSywNgX2l5jrM8IZQFLgZY+gCQjVARs4oKWJLDJ+SoC0iEtOeADpeHm0gt6VQQk4y8teaBKx/AWgHW6KgokvUdbGejRNriJiQ1KFQWS3qOjA/yhbRm2h7RVFEh6l1IfGNJShpTmRFWBpHU5NQR+01LHVJZkVYGkdej6BbRo28JUjlUFktamRwMo0pHF1B0Fktam1yGwTymDMO2UPq+Ae5xKI0hr0e8ukKBrA35aiwEJAC261uGlNhnQwthTeqzBpTYZ9ARjhkmPB5DUBoNMAxOf6LUKm1pnyEdYEia9VjGh1hliXobtgD73AagnDDuAQ/ykz7a4csKwMwEpZTKemYIrx3hZeO0xzi78dhltB0E5k/OZaYQlu5yncx2ziP0RZ/m3JzCH8W7EoNHbS4igb9fodbSlI46+8rxQPD47LhaeregI+Q/16zg36cVDtwAAAABJRU5ErkJggg==">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="success-text">Hit</span></span>
				<p>
					The resource requested is in Cloudflare's CDN cache, and was served from there.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}


// IF CF-CACHE-STATUS = MISS, DISPLAY THIS
if ($status=="CF-Cache-Status: MISS") {?> 
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top danger">
				<span class="card-title">Error</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMAAQIDBw0ODxATFBUXGBkaHB4hJyorLC0ubW9wcXN0dXh/i46gr7CytLXFx8jMz9Xz9ff7/VUolP4AAAFaSURBVEjHnZZ9Q4IwEMZJYLUkCUNNpRQwLYWUtvv+X60hpsDee/68PT/Yy213jiOS52Pse46R3MniQOEsup/HA419lBHoiGRPCvtwCwJ9PErsg3eQaHkn8qMSpCp83h9VoNDpue+PKShFXnrf1/gZ0fkHqkCrU2sdgxIMVNz2agVGWl7PixvaBEwbLowvwI4bSetwyp954w/BFIAmr3JzIDvnMzEHSJ3tUzAHIGbxxAaYs3hhA+xZnNoAhN13sAHAc5Ad4DvYDsD2gPWUhIs+pkxH8aIdChaikoOT6iBJDakWDJjZAJM6valFerv/uUA2V3TUXOovU2B7eTUC02fmWijWZlv0dnsqv038Zave3f/o/RVqP99jbUbRqFsgXjUEjfslaKycVRXxRe5BsfISCcuudHdXsn4g+BTZd0NFLxDm/dYhD3XNySwp/pqTIpm6Zi2NhzBG4vbnF/6vTGJVLtFgAAAAAElFTkSuQmCC">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="danger-text">Miss</span></span>
				<p>
					The resource is not in Cloudflare's CDN cache. It was served from the origin server instead.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}

// IF CF-CACHE-STATUS = EXPIRED, DISPLAY THIS
if ($status=="CF-Cache-Status: EXPIRED") {?>  
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top danger">
				<span class="card-title">Warning</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMAAQIDBw0ODxATFBUXGBkaHB4hJyorLC0ubW9wcXN0dXh/i46gr7CytLXFx8jMz9Xz9ff7/VUolP4AAAFaSURBVEjHnZZ9Q4IwEMZJYLUkCUNNpRQwLYWUtvv+X60hpsDee/68PT/Yy213jiOS52Pse46R3MniQOEsup/HA419lBHoiGRPCvtwCwJ9PErsg3eQaHkn8qMSpCp83h9VoNDpue+PKShFXnrf1/gZ0fkHqkCrU2sdgxIMVNz2agVGWl7PixvaBEwbLowvwI4bSetwyp954w/BFIAmr3JzIDvnMzEHSJ3tUzAHIGbxxAaYs3hhA+xZnNoAhN13sAHAc5Ad4DvYDsD2gPWUhIs+pkxH8aIdChaikoOT6iBJDakWDJjZAJM6valFerv/uUA2V3TUXOovU2B7eTUC02fmWijWZlv0dnsqv038Zave3f/o/RVqP99jbUbRqFsgXjUEjfslaKycVRXxRe5BsfISCcuudHdXsn4g+BTZd0NFLxDm/dYhD3XNySwp/pqTIpm6Zi2NhzBG4vbnF/6vTGJVLtFgAAAAAElFTkSuQmCC">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="danger-text">Expired</span></span>
				<p>
					The resource was in Cloudflare's CDN cache but has since expired, served from the origin server instead.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}

// IF CF-CACHE-STATUS = STALE, DISPLAY THIS
if ($status=="CF-Cache-Status: STALE") {?> 
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top warning">
				<span class="card-title">Warning</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMAAQIDBw0ODxATFBUXGBkaHB4hJyorLC0ubW9wcXN0dXh/i46gr7CytLXFx8jMz9Xz9ff7/VUolP4AAAFaSURBVEjHnZZ9Q4IwEMZJYLUkCUNNpRQwLYWUtvv+X60hpsDee/68PT/Yy213jiOS52Pse46R3MniQOEsup/HA419lBHoiGRPCvtwCwJ9PErsg3eQaHkn8qMSpCp83h9VoNDpue+PKShFXnrf1/gZ0fkHqkCrU2sdgxIMVNz2agVGWl7PixvaBEwbLowvwI4bSetwyp954w/BFIAmr3JzIDvnMzEHSJ3tUzAHIGbxxAaYs3hhA+xZnNoAhN13sAHAc5Ad4DvYDsD2gPWUhIs+pkxH8aIdChaikoOT6iBJDakWDJjZAJM6valFerv/uUA2V3TUXOovU2B7eTUC02fmWijWZlv0dnsqv038Zave3f/o/RVqP99jbUbRqFsgXjUEjfslaKycVRXxRe5BsfISCcuudHdXsn4g+BTZd0NFLxDm/dYhD3XNySwp/pqTIpm6Zi2NhzBG4vbnF/6vTGJVLtFgAAAAAElFTkSuQmCC">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="warning-text">Stale</span></span>
				<p>
					The resource is in Cloudflare's CDN cache but is expired. Served from CDN cache because another visitor's request has caused the CDN to fetch the resource from the origin server. This is a very uncommon occurrence and will only impact visitors that want the page right when it expires.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}

// IF CF-CACHE-STATUS = IGNORED, DISPLAY THIS
if ($status=="CF-Cache-Status: IGNORED") {?> 
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top warning">
				<span class="card-title">Warning</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMAAQIDBw0ODxATFBUXGBkaHB4hJyorLC0ubW9wcXN0dXh/i46gr7CytLXFx8jMz9Xz9ff7/VUolP4AAAFaSURBVEjHnZZ9Q4IwEMZJYLUkCUNNpRQwLYWUtvv+X60hpsDee/68PT/Yy213jiOS52Pse46R3MniQOEsup/HA419lBHoiGRPCvtwCwJ9PErsg3eQaHkn8qMSpCp83h9VoNDpue+PKShFXnrf1/gZ0fkHqkCrU2sdgxIMVNz2agVGWl7PixvaBEwbLowvwI4bSetwyp954w/BFIAmr3JzIDvnMzEHSJ3tUzAHIGbxxAaYs3hhA+xZnNoAhN13sAHAc5Ad4DvYDsD2gPWUhIs+pkxH8aIdChaikoOT6iBJDakWDJjZAJM6valFerv/uUA2V3TUXOovU2B7eTUC02fmWijWZlv0dnsqv038Zave3f/o/RVqP99jbUbRqFsgXjUEjfslaKycVRXxRe5BsfISCcuudHdXsn4g+BTZd0NFLxDm/dYhD3XNySwp/pqTIpm6Zi2NhzBG4vbnF/6vTGJVLtFgAAAAAElFTkSuQmCC">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="warning-text">Ignored</span></span>
				<p>
					The resource is cacheable but is not in Cloudflare's CDN cache because it hasn't met the threshold (number of requests, usually 3). Served from the origin server instead. Will become a HIT once it passes the threshold.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}

// IF CF-CACHE-STATUS = REVALIDATED, DISPLAY THIS
if ($status=="CF-Cache-Status: REVALIDATED") {?>
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top success">
				<span class="card-title">Success</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAABOFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8CSeP7AAAAZ3RSTlMAAQIDBAUGBwgJCwwQERITFRYaGxwdHiYqKy4vMDEyMzQ1Njc4OTs9Pj9HSUtMTVFVV1tdXmNoaWttcHFzdHeCg4WIjI+dnqWmqqutr7C5ury+wMHDxcfIyszO1dnc3ubo7/X3+fv9ANBSswAAAeZJREFUGBmNwQdDEmEABuD3u9FFVtDQhqkx1HZq2qKiJTFEGTJMi4K49///g+DuPm7BHc+DmVRjyVCxGD2Tb9LWyGd0xFgv0e/HGiJkLxh2nsYc1045W/MqZtkxOY/5EiHiO6N8E/BTa4x2pMBLlBmnJODxmfEKcD3mIh5BSgy4iEECjhIXU4JtmYu6DUuNkc7ft+moYuIGI5UV4CsdKYy9YZSywNgX2l5jrM8IZQFLgZY+gCQjVARs4oKWJLDJ+SoC0iEtOeADpeHm0gt6VQQk4y8teaBKx/AWgHW6KgokvUdbGejRNriJiQ1KFQWS3qOjA/yhbRm2h7RVFEh6l1IfGNJShpTmRFWBpHU5NQR+01LHVJZkVYGkdej6BbRo28JUjlUFktamRwMo0pHF1B0Fktam1yGwTymDMO2UPq+Ae5xKI0hr0e8ukKBrA35aiwEJAC261uGlNhnQwthTeqzBpTYZ9ARjhkmPB5DUBoNMAxOf6LUKm1pnyEdYEia9VjGh1hliXobtgD73AagnDDuAQ/ykz7a4csKwMwEpZTKemYIrx3hZeO0xzi78dhltB0E5k/OZaYQlu5yncx2ziP0RZ/m3JzCH8W7EoNHbS4igb9fodbSlI46+8rxQPD47LhaeregI+Q/16zg36cVDtwAAAABJRU5ErkJggg==">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="success-text">Revalidated</span></span>
				<p>
					Cloudflare had a stale representation of the object in their CDN cache, but they revalidated it by checking using either an If-Modified-Since header or an If-None-Match header.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}

// IF CF-CACHE-STATUS = REVALIDATED, DISPLAY THIS
if ($status=="CF-Cache-Status: REVALIDATED") {?> 
<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top warning">
				<span class="card-title">Warning</span>
				<img style="display: inline-block; float: right; margin-top:5px;" width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMAAQIDBw0ODxATFBUXGBkaHB4hJyorLC0ubW9wcXN0dXh/i46gr7CytLXFx8jMz9Xz9ff7/VUolP4AAAFaSURBVEjHnZZ9Q4IwEMZJYLUkCUNNpRQwLYWUtvv+X60hpsDee/68PT/Yy213jiOS52Pse46R3MniQOEsup/HA419lBHoiGRPCvtwCwJ9PErsg3eQaHkn8qMSpCp83h9VoNDpue+PKShFXnrf1/gZ0fkHqkCrU2sdgxIMVNz2agVGWl7PixvaBEwbLowvwI4bSetwyp954w/BFIAmr3JzIDvnMzEHSJ3tUzAHIGbxxAaYs3hhA+xZnNoAhN13sAHAc5Ad4DvYDsD2gPWUhIs+pkxH8aIdChaikoOT6iBJDakWDJjZAJM6valFerv/uUA2V3TUXOovU2B7eTUC02fmWijWZlv0dnsqv038Zave3f/o/RVqP99jbUbRqFsgXjUEjfslaKycVRXxRe5BsfISCcuudHdXsn4g+BTZd0NFLxDm/dYhD3XNySwp/pqTIpm6Zi2NhzBG4vbnF/6vTGJVLtFgAAAAAElFTkSuQmCC">
			</div>
			<div class="card-content" style="width: 70%;">
				<span class="flow-text">CF-Cache-Status: <span class="warning-text">Updating</span></span>
				<p>
					Cloudflare's CDN cache is currently populating for that resource and the response was served stale from the existing cached item. This status is typically only seen when large and/or very popular resources are being added to the cache.
				</p>
				<?php
					include 'result-details.php';
				?>
			</div>
			<div class="card-right valign-wrapper" style="width: 30%; display: flex;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Test again</span></a>&nbsp;&nbsp;
			</div>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Help</a></div>
					</div>
					<div class="collapsible-body">
						<strong>Note:</strong> Cloudflare's static content caching is dependent on both (a) where most of your visitors are coming from and which Cloudflare datacenter they are hitting, and (b) how may times those resources are requested at the specific datacenter. As such, Cloudflare does not cache the same resources for your site globally at every <a href="https://www.cloudflare.com/network/">datacenter location</a>.
						<h5>The response recieved</h5>
						<div class="card grey-text text-lighten-1 black">
							<div class="card-content">
								<?php
									var_dump($headers);
								?>
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
	</div>
</div>
<?php
}
?>