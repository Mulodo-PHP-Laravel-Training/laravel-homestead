<div class="portfolio-parlex" id="portfolio">
	<div class="parlex3-back">
		<div class="w-container">
			<div class="wrap">
				<div class="portfolio">
					<h1 class="portfolio-heading">PORTFOLIO</h1>
					<div class="portfolio-text">OUR WORK</div>
					<div class="sepreater"></div>
				</div>
				<p class="porfolio-paragraph">
					THE BEST RESULTS ARE OBTAINED BY TASKING THE RIGHT PEOPLE TO THE
					RIGHT PROJECT <br>We do what we love. Our clients love what we do.
				</p>
				<div class="container demo-1">
					<ul class="grid cs-style-1">
						@foreach ($portfolio as $key => $item)
						<li>
							<figure>
								<img class="portfolio-images"
									src="mulodo/images/portfolio/{{ $item['img'] }}"
									alt="{{ $item['title'] }}">
								<figcaption>
									<h3>{{ $item['title'] }}</h3>
									<span>{{ $item['des'] }}</span> <a href="#">Take a look</a>
								</figcaption>
							</figure>
						</li>
						@endforeach
					</ul>
				</div>
				<!-- /container -->
			</div>
		</div>
	</div>
</div>