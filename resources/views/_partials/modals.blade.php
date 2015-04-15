<!-- Modal Create -->
<div id="modal1" class="modal">
	{{--<form class="col s12">--}}
	{!! Form::open(array('route' => 'test.store', 'class' => 'col s12')) !!}
	<div class="modal-content">
		<h4>Create Post</h4>

		<div class="row">
			<div class="row">
				<div class="input-field col s12">
					<i class="mdi-av-subtitles prefix"></i>
					<input id="icon_title" name="title" type="text" class="validate">
					<label for="icon_title">Title</label>
				</div>
				<div class="input-field col s12">
					<i class="mdi-content-add prefix"></i>
					<textarea id="icon_content" name="content" class="materialize-textarea" length="255" validate"></textarea>
					<label for="icon_content">Content</label>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Save</button>
		<button type="reset" class="modal-action waves-effect waves-green btn-flat">Reset</button>
	</div>
	{!! Form::close() !!}
</div>


<!-- Modal Delete -->
<div id="modal2" class="delete-post modal">
	{{--<form class="col s12">--}}
	{!! Form::open(array('route' => 'test.store', 'class' => 'col s12')) !!}
	<div class="modal-content">
		<h4>Delete Post</h4>

		<h6><i class="mdi-alert-warning"></i> Warning: Can't be restore once you deleted it.</h6>
	</div>
	<div class="modal-footer">
		<button type="button" class="modal-action modal-close waves-effect waves-green btn-flat red confirm-action">Yes</button>
		<button type="button" class="modal-action modal-close waves-effect waves-green btn-flat">No</button>
	</div>
	{!! Form::close() !!}
</div>