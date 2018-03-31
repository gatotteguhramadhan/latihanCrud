@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="" action="{{route('post.store')}}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" placeholder="Post Title">
			</div>
			
			<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control" id="">
				@foreach ($categories as $category)
					<option value="{{ $category->id }}"> {{$category->name}}</option>
				@endforeach		
				</select>
				
			</div>	

			<div class="form-group">
				<label>Content</label>
				<textarea name="content" rows="5" class="form-control" placeholder="Post Content"></textarea>		
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="save">
			</div>
		</form>
	</div>
@endsection