
<title>Create Ticket</title>
<!-- 	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->

 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">Create Your Ticket</div>
				<div class="panel-body">
					<div class="col-md-6 center">
						<form>
							<input type="text" name="ticket_name" class="form-control">
							<input type="text" name="ticket_pa" class="form-control">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection