@extends('layouts.app')
@section('content')
<br><br>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		@if(Session::has('success'))
		<div class="alert alert-success" data-dismiss="close">
			{{Session::get('success')}}
		</div>
		@endif

		@if(!isset($article->id))
		<form action="add-new-article-record" method="post">
		@else
		<form action="update-article-record" method="post">
		@endif

		{{csrf_field()}}

		
		<div class="form-group">
            <label for="title">Title</label>            
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value={{$article->title}}>
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" rows="5" id="content" name="content">
            {{$article->content}}

            </textarea>
            <span class="text-danger">{{ $errors->first('content') }}</span>
        </div>

        <input type="hidden" name="id" value="{{$article->id}}"> 
        <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
</div>
	
@endsection