<div class="row">
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-action top black">
				<span class="card-title white-text">Error</span>
			</div>

			<div class="card-content" style="width: 100%;">
				<span class="flow-text">Cloudflare not detected</span>
				<p>The resource tested is from a domain that does not appear to be utilizing Cloudflare. Neither CF-RAY or CF-Cache-Status were in the header.</p>
			</div>

			<div class="card-right valign-wrapper" style="width: 0%; display: none;">
				&nbsp;&nbsp;<a href="javascript:history.go(0);" class="btn brand-blue"><i class="material-icons hide-on-med-and-up">refresh</i><span class="hide-on-small-only"> Retest</span></a>&nbsp;&nbsp;
			</div>

			<ul class="collapsible">
				<li>
					<div class="collapsible-header">
						<div class="right"><a href="#!">Details</a></div>
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