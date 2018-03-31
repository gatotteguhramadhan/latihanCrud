@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-offset-2">
				<div class="container">
					<div class="panel panel-default">
		                <div class="panel-heading">Edit Post</div>

		                <div class="panel-body">
		                    <form class="" action="{{route('post.update', $post)}}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}

						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="Post Title" value="{{$post->title}}">
						</div>
						
						<div class="form-group">
							<label>Category</label>
							<select name="category_id" class="form-control" id="">
							@foreach ($categories as $category)
								<option value="{{ $category->id }}"
								@if ($category->id === $post->category_id)
									selected
								@endif	> 
								{{$category->name}}
								</option>
							@endforeach		
							</select>
							
						</div>	

						<div class="form-group">
							<label>Content</label>
							<textarea name="content" rows="5" class="form-control" placeholder="Post Content">{{ $post->content }}</textarea>		
						</div>

						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="save">
						</div>
					</form> 
		                </div>
            		</div>
				</div>
			</div>
		</div>
	</div>
@endsection