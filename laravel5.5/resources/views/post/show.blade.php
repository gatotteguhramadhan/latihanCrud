@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-offset-2">
				<div class="panel panel-default">
	                <div class="panel-heading">{{ $post->title}} | <small>{{ $post->category->name}}</small>	
	                </div>
                <div class="panel-body">
                    <p>{{ $post->content}}</p>
                </div>
            </div>
			</div>
		</div>
	</div>
@endsection