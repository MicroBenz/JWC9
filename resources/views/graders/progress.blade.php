@extends('graders.layout', ['title' => 'Progress Dashboard'])

@section('content')
<h3 class="page-title">
	Progress Dashboard
</h3>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Whole Grading Progress
				</div>
			</div>
			<div class="portlet-body">
				<h4></h4>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $all }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $all }}%">
						{{ number_format((float)$all, 2, '.', '') }}% Complete
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Content Creator
				</div>
			</div>
			<div class="portlet-body">
				<h4></h4>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $content["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $content["percentnow"] }}%">
						{{ number_format((float)$content["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				<h4>By Grader</h4>
				@foreach($content["graders"] as $grader)
				<h6>{{ $grader["grader"]->FacebookName }}</h6>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $grader["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $grader["percentnow"] }}%">
						{{ number_format((float)$grader["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Designer
				</div>
			</div>
			<div class="portlet-body">
				<h4></h4>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $design["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $design["percentnow"] }}%">
						{{ number_format((float)$design["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				<h4>By Grader</h4>
				@foreach($design["graders"] as $grader)
				<h6>{{ $grader["grader"]->FacebookName }}</h6>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $grader["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $grader["percentnow"] }}%">
						{{ number_format((float)$grader["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Marketing
				</div>
			</div>
			<div class="portlet-body">
				<h4></h4>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $market["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $market["percentnow"] }}%">
						{{ number_format((float)$market["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				<h4>By Grader</h4>
				@foreach($market["graders"] as $grader)
				<h6>{{ $grader["grader"]->FacebookName }}</h6>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $grader["percentnow"] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $grader["percentnow"] }}%">
						{{ number_format((float)$grader["percentnow"], 2, '.', '') }}% Complete
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection