<div class="row status dashboard-post-images">
	<div class="status-list col l4 m4 s12">
		<a href="#dashboard" title="Dashboard">
			<h6 style="vertical-align: bottom;" class="dpi-dashboard"><img src="/img/dashboard.jpg"
			                                                               style="vertical-align: middle;"/>
				Dashboard</h6>

		</a>
	</div>
	<div class="status-list col l4 m4 s12">
		<div class="row">
			<div class="col m6">
				<img src="/img/dpi-post-circle.png"/>
			</div>
			<div class="col m6">
				<h4>
					@if(!empty($posts))
						{{ count($posts) }}
					@endif
				</h4>
				<span>Post</span>
			</div>
		</div>
	</div>
	<div class="status-list col l4 m4 s12">
		<div class="row">
			<div class="row">
				<div class="col m6">
					<img src="/img/dpi-images-circle.png"/>
				</div>
				<div class="col m6">
					<h4>
						@if(!empty($countUploads))
							{{ $countUploads }}
						@else
							0
						@endif
					</h4>
					<span>Uploads</span>
				</div>
			</div>

		</div>
	</div>
</div>