@extends('main')

@section('title','|Edit Blog Post')

@section('content')
	<div class="row">
		{!! Form::model($post, ['route'=>['posts.update', $post->id]]) !!}
		<div class="col-md-8">
			{{Form::label('title', 'Title:')}}
			{{Form::text('title',null, ["class"=>'form-control input-lg'])}}
			{{Form::label('Body', 'Body:', ["class"=>'form-spacing-top'])}}
			{{Form::textarea('body',null, ['class'=>'form-control input-lg'])}}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Created At:</dt>
				  <dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Last Updated:</dt>
				  <dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-md-6">
						{!!Html::Linkroute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
						
					</div>

					<div class="col-md-6">
						{!!Html::Linkroute('posts.update', 'Save Changes', array($post->id), array('class'=>'btn btn-success btn-block')) !!}
					</div>
				</div>

			</div>
		</div>

	</div>


@endsection<!--end of row (form)-->
