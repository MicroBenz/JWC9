@extends('graders.layout', ['title' => 'Slip Checking System'])

@section('content')
<h3 class="page-title">
	Slip Checking System
</h3>
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Waiting Checking
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
								</th>
								<th>
									Money
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($waitings as $count => $waiting)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{{ $waiting->FirstName." ".$waiting->LastName }}
								</td>
								<td>
									{{ $waiting->Nickname }}
								</td>
								<td>
									{{ $waiting->Money }}
								</td>
								<td>
									<a href="slip/{{ encrypt($waiting->FacebookUniqueID) }}" class="btn default btn-xs yellow-stripe">
									Check
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END CONDENSED TABLE PORTLET-->
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Waiting Confirm
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
								</th>
								<th>
									Money
								</th>
								<th>
									Telephone
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($initials as $count => $initial)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{{ $initial->FirstName." ".$initial->LastName }}
								</td>
								<td>
									{{ $initial->Nickname }}
								</td>
								<td>
									{{ $initial->Money }}
								</td>
								<td>
									{{ $initial->Telephone }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END CONDENSED TABLE PORTLET-->
	</div>
	<div class="col-md-6">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Checking Completed
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Code
								</th>
								<th>
									Team
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($checked as $count => $check)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{{ $check->FirstName." ".$check->LastName }}
								</td>
								<td>
									{{ $check->Nickname }}
								</td>
								<td>
									{{ $check->Money }}
								</td>
								<td>
									<a href="slip/{{ encrypt($check->FacebookUniqueID) }}" class="btn default btn-xs green-stripe">
									Re-Check
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END CONDENSED TABLE PORTLET-->
	</div>
</div>
@endsection