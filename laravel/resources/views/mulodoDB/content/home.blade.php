<div class="slidersection">
	<div class="sp-slideshow">

		<input id="button-1" type="radio" name="radio-set"
			class="sp-selector-1" checked="checked" /> <label for="button-1"
			class="button-label-1"></label> <input id="button-2" type="radio"
			name="radio-set" class="sp-selector-2" /> <label for="button-2"
			class="button-label-2"></label> <input id="button-3" type="radio"
			name="radio-set" class="sp-selector-3" /> <label for="button-3"
			class="button-label-3"></label> <input id="button-4" type="radio"
			name="radio-set" class="sp-selector-4" /> <label for="button-4"
			class="button-label-4"></label> <input id="button-5" type="radio"
			name="radio-set" class="sp-selector-5" /> <label for="button-5"
			class="button-label-5"></label> <label for="button-1"
			class="sp-arrow sp-a1"></label> <label for="button-2"
			class="sp-arrow sp-a2"></label> <label for="button-3"
			class="sp-arrow sp-a3"></label> <label for="button-4"
			class="sp-arrow sp-a4"></label> <label for="button-5"
			class="sp-arrow sp-a5"></label>

		<div class="sp-content">
			<div class="sp-parallax-bg"></div>
			<ul class="sp-slider clearfix">
				@foreach ($sliders as $slider)
				<li><img src="mulodo/images/slider/{{ $slider }}" alt="{{ $slider }}" /></li>
				@endforeach
			</ul>
		</div>
		<!-- sp-content -->

	</div>
	<!-- sp-slideshow -->
</div>