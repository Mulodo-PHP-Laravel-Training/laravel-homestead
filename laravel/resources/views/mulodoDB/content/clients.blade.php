<div class="clients-parlex">
	<div class="parlex6-back">
		<div class="w-container">
			<div class="wrap-client">
				<div class="clients-sub">
					<div id="clients">
						<div class="clients-wrap">
							<ul id="clients-list" class="clearfix">
								@foreach ($clients as $key=>$client)
								<li><img src="mulodo/images/clients/{{ $client }}" alt="{{ $key }}"></li>
								@endforeach
							</ul>
						</div>
						<!-- @end .clients-wrap -->
					</div>
					<!-- @end #clients -->
				</div>
			</div>
		</div>
	</div>
</div>