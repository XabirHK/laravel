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


	</div>
	
      
@stop

