@extends('layouts.main') <!-- extends the main layout which DO NOT contain big header image -->


@section('content')
	<div class="container">
	    <h1>Edit Note</h1>

	    <form method="POST" action="/notes/{{ $note->id }}">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	{{ method_field('PATCH') }}
	    
		    <div class="form-group">
		    	<textarea name="body" class="form-control" required>{{$note->body}}</textarea>
		    </div>
		    <div class="form-group">
		    	<button type="submit" class="btn btn-primary">Update Note</button>
		    </div>

	    </form>

	</div>

	
      
@stop

