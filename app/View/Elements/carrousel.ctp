<script>
$(document).ready(function() {
	$('.previous_pub').click(function(){
		$('#carrousel_pub ul').prepend($('#carrousel_pub ul li:last'));
	});
	$('.next_pub').click(function(){
		$('#carrousel_pub ul').append($('#carrousel_pub ul li:first'));
	});
	
	$('.previous_rest').click(function(){
		$('#carrousel_rest ul').prepend($('#carrousel_rest ul li:last'));
	});
	$('.next_rest').click(function(){
		$('#carrousel_rest ul').append($('#carrousel_rest ul li:first'));
	});
})
</script>
<div class = "wrap">
<div class = "carousel">
<span>Pub<br></span>
<a class="previous previous_pub"></a>
<div id="carrousel_pub">
    <ul class="ch-grid">
		<li>
			<div class="ch-item">				
				<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/pub.jpg"); background-repeat:no-repeat; background-size: cover;'></div>
					<div class="ch-info-back">
						<h3>Temple bar</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">				
				<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/live.jpg"); background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back">
						<h3>Legends</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">				
				<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/salads.jpg"); background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back">
						<h3>Xs cosa</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">
				<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/beer.jpg"); background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back">
						<h3>You</h3>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">
			<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/nightlife.jpg"); background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back">
						<h3>Love</h3>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>
<a class="next next_pub"></a>
</div>
<hr></hr>
<div class = "carousel">
<span>Restaurants<br></span>
<a class="previous previous_rest"></a>
<div id="carrousel_rest">
    <ul class="ch-grid">
		<li>
			<div class="ch-item">				
				<div class="ch-info" style='border-radius:0%'>
					<div class="ch-info-front" style='background-image:url("img/images/nightlife.jpg"); border-radius:0%; background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>Temple bar</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">				
				<div class="ch-info" style='border-radius:0%'>
					<div class="ch-info-front" style='background-image:url("img/images/beer.jpg"); border-radius:0%; background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>Legends</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">				
				<div class="ch-info" style='border-radius:0%'>
					<div class="ch-info-front" style='background-image:url("img/images/salads.jpg");border-radius:0%; background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>Xs cosa</h3>
					</div>	
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">
				<div class="ch-info" style='border-radius:0%'>
					<div class="ch-info-front" style='background-image:url("img/images/4.jpg"); border-radius:0%;background-repeat: no-repeat; background-size: cover;'></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>You</h3>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">
			<div class="ch-info">
					<div class="ch-info-front" style='background-image:url("img/images/pub.jpg"); background-repeat: no-repeat; border-radius:0%; background-size: cover;'></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>Love</h3>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item">
			<div class="ch-info" style='border-radius:0%'>
					<div class="ch-info-front" style='background-image:url("img/images/live.jpg"); border-radius:0%; background-size: cover; '></div>
					<div class="ch-info-back" style='border-radius:0%'>
						<h3>ksdjks</h3>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>
<a class="next next_rest"></a>
</div>
</div>