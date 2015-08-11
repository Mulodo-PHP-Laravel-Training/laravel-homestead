<div class="team-parlex" id="team">
	<div class="parlex5-back">
		<div class="w-container">
			<div class="wrap">
				<div class="team">
					<h1 class="team">TEAM</h1>
					<div class="sepreater team-sep"></div>
				</div>
				<div class="team-text">
					<p class="team-text-para">Lorem ipsum dolor sit amet, consectetur
						adipiscing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
						occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.</p>
				</div>
				<div class="w-row team-member">
					@foreach ($teamMembers as $key => $member)
					<div class="w-col w-col-4">
						<div class="team-section">
							<div class="team-image">
								<img class="team-img"
									src="mulodo/images/team/{{ $member['img'] }}"
									alt="{{ $member['name'] }}">
							</div>
							<div class="team-des">
								<h4 class="team-name">{{ $member['name'] }}</h4>
								<div class="team-name-des">{{ $member['des'] }}</div>
							</div>
							<div class="team-social">
								<div class="w-clearfix social-section">
									<a href="{{ $member['social_fb'] }}"><img class="social"
										src="mulodo/images/social/Facebook.png"
										alt="52dd249c929b601f5400054c_Facebook.png"></a> <a
										href="{{ $member['social_tw'] }}"><img class="social"
										src="mulodo/images/social/Twitter.png"
										alt="52dd24f2929b601f54000551_Twitter.png"></a> <a
										href="{{ $member['social_linkedin'] }}"><img class="social"
										src="mulodo/images/social/Linkedin.png"
										alt="52dd2672e64ce6cb2000053a_Linkedin.png"></a> <a
										href="{{ $member['social_google'] }}"><img class="social"
										src="mulodo/images/social/Google-plus.png"
										alt="52dd26a55b54031d540005af_Google-plus.png"></a> <a
										href="{{ $member['social_rss'] }}"><img class="social"
										src="mulodo/images/social/RSS.png"
										alt="52dd26d25b54031d540005b4_RSS.png"></a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>