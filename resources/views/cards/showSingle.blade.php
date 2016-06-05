@extends('layouts.main') <!-- extends the main layout which DO NOT contain big header image -->


@section('content')
	<div class="container">
		<h1>Single Card</h1>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>Name</th>
	                <th>Bank Name</th>
	                <th>Discount</th>
	                <th>Date</th>
	                
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>#</th>
	                <th>Name</th>
	                <th>Bank Name</th>
	                <th>Discount</th>
	                <th>Date</th>
	            </tr>
	        </tfoot>
	        <tbody>

	        
	        	 <tr>
	                <td></td>
	                <td>{{$card->title}}</td>
	                <td>{{$card->banktitle}}</td>
	                <td>{{$card->discount}}</td>
	                <td>{{date_format($card->created_at,'d-M-Y')}}</td>
	                
	            </tr>
	        	
	        
	            
	        </tbody>
    	</table>

    	

    	<?php if (!$card->notes->isEmpty()): ?> <!-- mean if the notes is not empty then show the table -->

	    	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>#</th>
		                <th>Body</th>
		                <th>Date</th>
		                <th>Created by</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>#</th>
		                <th>Body</th>
		                <th>Date</th>
		                <th>Created by</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		        <tbody>

		        	<?php $cnt='1'; foreach ($card->notes as $note): ?>
		        		<tr>
			                <td>{{$cnt}}</td>
			                <td>{{$note->body}}</td>
			                <td>{{date_format($note->created_at,'d-M-Y')}}</td>
			                <td><a href="#">{{$note->user->name}}</a></td>
			                <td><a href="/notes/{{$note->id}}/edit"><button class="btn btn-primary btn-xs">Edit</button></a></td>
		            	</tr>
		        	<?php $cnt++; endforeach ?>

		        </tbody>
	    	</table>

    	<?php endif ?>

    <hr>

    <h1>Add a new note</h1>

    <form method="POST" action="/cards/{{$card->id}}/notes">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    
	    <div class="form-group">
	    	<textarea name="body" class="form-control" ></textarea>
	    </div>
	    <div class="form-group">
	    	<button type="submit" class="btn btn-primary">Add Note</button>
	    </div>
    	
    	
    </form>
    
	</div>
	
      
@stop

