@extends('graders.layout')

@section('content')
<h3 class="page-title">
	Sneak Peek
</h3>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Completed Application
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
									Facebook
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
								</th>
								<th>
									Team
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($campers as $count => $camper)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{!! "<a href=\"//fb.com/".$camper->FacebookUniqueID."\" target=\"_blank\">".$camper->fbaccount->FacebookName."</a>" !!}
								</td>
								<td>
									{{ $camper->profile->FirstName." ".$camper->profile->LastName }}
								</td>
								<td>
									{{ $camper->profile->Nickname }}
								</td>
								<td>
									{{ $camper->team->TeamName }}
								</td>
								<td>
									<a href="sneakpeek/{{ encrypt($camper->FacebookUniqueID) }}" class="btn default btn-xs green-stripe">
									View
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