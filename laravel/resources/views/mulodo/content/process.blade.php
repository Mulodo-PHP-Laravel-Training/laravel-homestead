<div class="process-parlex">
	<div class="parlex2-back">
		<div class="w-container">
			<div class="wrap">
				<div class="process">
					<h1 class="our-process-heading">OUR PROCESS</h1>
					<div class="sepreater"></div>
				</div>
				<div class="process-text">
					<div class="process-text">Our process is straight forward, simple,
						&amp; successful.</div>
					<div class="w-row">
						@foreach ($processes as $key => $process)
						<div class="w-col w-col-3">
							<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
								<a href="#set-1" class="hi-icon hi-icon-{{ $process['icon'] }}">{{ $process['icon-name'] }}</a>
							</div>
							<h4 class="our-process-sys">{{ $process['title'] }}</h4>
							<p class="process-paragraph">{{ $process['des'] }}</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>