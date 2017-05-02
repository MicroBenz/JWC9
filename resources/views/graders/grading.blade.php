@extends('graders.layout', ['title' => 'Grading System'])

@section('content')
<h3 class="page-title">
	Grading System
</h3>
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Waiting Grading
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
							@foreach($waitings as $count => $waiting)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{{ $waiting->profile->EmergencyTel }}
								</td>
								<td>
									{{ $waiting->team->TeamName }}
								</td>
								<td>
									<a href="grading/{{ encrypt($waiting->FacebookUniqueID) }}" class="btn default btn-xs yellow-stripe">
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
	</div>
	<div class="col-md-6">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Grading Completed
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
							@foreach($completed as $count => $complete)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{{ $complete->profile->EmergencyTel }}
								</td>
								<td>
									{{ $complete->team->TeamName }}
								</td>
								<td>
									<a href="grading/{{ encrypt($complete->FacebookUniqueID) }}" class="btn default btn-xs green-stripe">
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