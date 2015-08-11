<section class="service-parlex" id="service">
	<section class="parlex-back">
		<div class="w-container">
			<div class="wrap">
				<div class="service-combo">
					<div class="services">
						<h1 class="service-heading">SERVICES</h1>
						<div class="services-text">WHAT WE DO?</div>
						<div class="sepreater service"></div>
					</div>
					<div class="services-text">
						“ THE BEST RESULTS ARE OBTAINED BY TASKING THE RIGHT PEOPLE TO THE
						RIGHT PROJECT ” <br>We understand that everybody has their unique
						strengths and we put that knowledge to use by assembling the most
						efficient team possible for your project. You know your business
						better than anyone. Your insights, combined with our skills and
						creativity, will result in branding and marketing that truly stand
						out. We’re ready to get started.
					</div>
					<div class="w-row">
						@foreach ($services as $key => $service)
						<div class="w-col w-col-3 services-column">
							<div class="service-icon">
								<img src="mulodo/images/services/{{ $service['img'] }}">
							</div>
							<h4 class="service-head">{{ $service['title'] }}</h4>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
</section>