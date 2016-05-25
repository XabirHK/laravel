@extends('layouts.main') <!-- extends the main layout which DO NOT contain big header image -->


@section('content')
	<div class="container">
		<h1>All Cards</h1>
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

	        <?php $cnt='1'; foreach ($cards as $card): ?>
	        	<a href="#">
	        	<tr>
	                <td>{{$cnt}}</td>
	                <td><a href='cards/{{$card->id}}'>{{$card->title}}</a></td>
	                <td>{{$card->banktitle}}</td>
	                <td>{{$card->discount}}</td>
	                <td>{{date_format($card->created_at,'d-M-Y')}}</td>
	            </tr>
	            </a>
	        	
	        <?php $cnt++; endforeach ?>
	            
	        </tbody>
    	</table> 


	</div>
	
      
@stop

@section('footer')
    <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
    
	<script type="text/javascript">
		$('document').ready(function() {
	    	$('#example').DataTable();
		} );
	</script>

	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    
@stop