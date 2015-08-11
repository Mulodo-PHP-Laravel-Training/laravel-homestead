<div class="our-plan-parlex">
	<div class="parlex4-back">
		<div class="w-container">
			<div class="wrap">
				<div class="our-plans">
					<h1 class="ourplan-heading">OUR PLANS</h1>
					<div class="our-plan-text">SELECT YOUR BEST PLAN</div>
				</div>
				<div class="sepreater"></div>
				<p class="our-plan-paragraph">
					As a creative studio we believe no client is too big nor too small
					to work with us. We love what we do. And that shows. <br>We like to
					create things with fun, like-minded people.
				</p>
				<div class="w-row">
					@foreach ($plans as $key => $plan)
						<!-- {{ $pos = ($key + 1) }} -->
						<div class="w-col w-col-3">
						<div class="plan1 plan{{ $pos }}">
							<div class="plan{{ $pos }}-ser{{ $pos }}">
								<h4>{{ $plan['title'] }}</h4>
								<div class="price">{{ $plan['price'] }} / Month</div>
							</div>
							<p class="plan1-ser1-para">
								{{ $plan['des'] }}
							</p>
							<a class="plan-1-butn plan-1-butn{{ $pos }}" href="#">Sign Up!</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>