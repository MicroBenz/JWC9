@extends('graders.layout')

@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	Dashboard
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS -->
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light purple-soft">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $all }}
				</div>
				<div class="desc">
					All Campers
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light green-soft">
			<div class="visual">
				<i class="fa fa-trophy"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $submit }}
				</div>
				<div class="desc">
					Submit Campers
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light grey-silver">
			<div class="visual">
				<i class="fa fa-flag"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $all-$submit }}
				</div>
				<div class="desc">
					Waiting Campers
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light blue">
			<div class="visual">
				<i class="fa fa-pencil"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $content }}
				</div>
				<div class="desc">
					Content Campers
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light yellow">
			<div class="visual">
				<i class="fa fa-picture-o"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $designer }}
				</div>
				<div class="desc">
					Designer Campers
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="dashboard-stat dashboard-stat-light red">
			<div class="visual">
				<i class="fa fa-line-chart"></i>
			</div>
			<div class="details">
				<div class="number">
					{{ $marketing }}
				</div>
				<div class="desc">
					Marketing Campers
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END DASHBOARD STATS -->
@endsection