<div class="z-depth-2 scrollspy" id="upload">

	<div class="container">
		{!! Form::open(array('route' => array('test.upload'), 'files' => true, 'style' => 'padding-top: 2em;')) !!}
		<div class="file-field input-field">
			<input class="file-path validate" type="text"/>

			<div class="btn">
				<span>File</span>
				{!! Form::file('image', '') !!}
			</div>
		</div>
		<div style="float:right;">
			<!-- Modal Trigger -->
			<button type="submit" class="waves-effect waves-light btn"><i class="mdi-image-add-to-photos left"></i>Upload
			</button>

		</div>
		{!! Form::close() !!}

	</div>
	<div class="container uploads scrollspy" id="images">
		<div class="row" style="text-align: center; padding-top:4em; padding-bottom: 4em;">

			@foreach($images as $image)
				<div class="col m4 l3 s6">
					<a data-image-id="{{ $image }}" style="position: absolute;" title="Delete {{ $image }}"><i
								class="mdi-navigation-close"></i></a>

					<img class="tooltipped" data-position="top" data-delay="50" data-tooltip="{{ $image }}"
					     src="{{ asset('uploads') . '/' . $image }}"/>
				</div>
			@endforeach

		</div>
	</div>
</div>