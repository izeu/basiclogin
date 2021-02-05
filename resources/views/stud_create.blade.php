<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>

<!-- library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<!-- library bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<br>
<br>

        @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
	            <strong>{{ $message }}</strong>
            </div>
        @endif

@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="container">
	<table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="50%">
	<tr>
        <td>First Name</td>
        <td><input type='text' name='first_name' /></td>
	<tr>
        <td>Last Name</td>
        <td><input type="text" name='last_name'/></td>
	</tr>
	<tr>
	<td>City Name</td>
	    <td>
            <select name="city_name">
            <option value="trg">Terengganu</option>
            <option value="kl">Kuala Lumpur</option>
	        </select>
        </td>
	</tr>
	<tr>
        <td>Email</td>
        <td><input type="text" name='email'/></td>
	</tr>

	<tr>
	    <td colspan = '2'>
	        <input type = 'submit' value = "Add student"/>
	    </td>
	</tr>
	</table>
    </div>
</form>
</br>
</br>
</body>
</html>