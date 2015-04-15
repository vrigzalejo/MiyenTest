<div class="row scrollspy" id="add-post" style="margin-top: 2em;">

	<div style="float:right;">
		<a id="delete-item" class="waves-effect waves-light btn red"><i
					class="mdi-action-delete left"></i>Delete</a>

		<!-- Modal Trigger -->
		<a class="modal-trigger waves-effect waves-light btn" href="#modal1"><i class="mdi-content-add left"></i>Create
			Post</a>

	</div>
</div>


@include('_partials.modals')

<div class="row z-depth-2">
	<div class="col s12">
		<table class="hoverable">
			<thead>
			<tr>
				<th>
					<input class="check-all" type="checkbox" id="test5" <?php if(empty($posts)) echo "disabled"; ?>/>
					<label for="test5"></label>

				</th>
				<th data-field="id">Title</th>
				<th data-field="name">Content</th>
				<th data-field="price">Created</th>
				<th data-field="delete"></th>
			</tr>
			</thead>
			<tbody>
			@if(!empty($posts))
				@foreach($posts as $post)
					<tr>
						<td>
							<input type="checkbox" data-post-id="{{ $post->id }}" id="test{{ $post->id }}"/>
							<label for="test{{ $post->id }}"></label>
						</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->content }}</td>
						<td>{{ \Carbon\Carbon::parse( $post->updated_at)->diffForHumans() }}</td>
						<td>
							{!! Form::open(array('method' => 'DELETE', 'route' => array('test.destroy', $post->id)))!!}

							{!! Form::button('<i class="mdi-action-delete"></i>', array( 'type'=>'submit', 'class' => 'waves-effect waves-light btn red', 'onclick' => "var x='Do you want to delete [$post->title]?'; return confirm(x)")) !!}

							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
	</div>
</div>
