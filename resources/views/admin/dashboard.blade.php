@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header" style="font-size:20px;font-weight:600;background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">Admin Dashboard</div>

				<div class="card-body">
					<div class="row py-2">
						<div class="col-md-12">
							<a href="{{ route('admin.users.index') }}" style="text-decoration: none;color: #7B68EE;padding: 0 25px;font-size: 18px;font-weight: 600;">Manage Users</a>
						</div>
					</div>
					<div class="row py-2">
						<div class="col-md-12">
							<a href="{{ route('admin.content.index') }}" style="text-decoration: none;color: #7B68EE;padding: 0 25px;font-size: 18px;font-weight: 600;">Manage Movie</a>
						</div>
					</div>
					<!-- <div class="row py-2">
						<div class="col-md-12">
							<a href="{{ route('admin.req.index') }}" style="text-decoration: none;color: #7B68EE;padding: 0 25px;font-size: 18px;font-weight: 600;">Manage Request</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
