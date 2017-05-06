@extends('graders.layout', ['title' => 'Rank'])

@section('style')
<style type="text/css">
	i.fa.fa-check-circle {
		color: green;
	}

	i.fa.fa-times-circle {
		color: red;
	}

	i.fa.fa-question-circle {
		color: #c49f47;
	}
</style>
@endsection
@section('content')
<h3 class="page-title">
	Rank
</h3>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Content Creator
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table id="content" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Camper ID
								</th>
								<th>
									Code
								</th>
								<th>
									Profile
								</th>
								<th>
									1st Score
								</th>
								<th>
									2nd Score
								</th>
								<th>
									Total Score
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($contents as $count => $content)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{!! "<a href=\"grading/".encrypt($content->FacebookUniqueID)."\" target=\"_blank\">".$content->CamperID."</a>" !!}
								<td>
									{{ substr($content->profile->Telephone, 0, -3) . 'xxx' }}
								</td>
								<td>
									<i class="fa fa-{{ $content->verify ? $content->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($content->scores as $score)
								<td>
									{{ number_format((float)$score["ScoreValue"], 2, '.', '') }}
								</td>
								@endforeach
								<td>
									{!! "<a href=\"grading/".encrypt($content->FacebookUniqueID)."/YnlwYXNz\" target=\"_blank\">".number_format((float)$content->total, 2, '.', '')."</a>" !!}
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
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Designer
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table id="design" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Camper ID
								</th>
								<th>
									Code
								</th>
								<th>
									Profile
								</th>
								<th>
									1st Score
								</th>
								<th>
									2nd Score
								</th>
								<th>
									Total Score
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($designs as $count => $design)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{!! "<a href=\"grading/".encrypt($design->FacebookUniqueID)."\" target=\"_blank\">".$design->CamperID."</a>" !!}
								<td>
									{{ substr($design->profile->Telephone, 0, -3) . 'xxx' }}
								</td>
								<td>
									<i class="fa fa-{{ $design->verify ? $design->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($design->scores as $score)
								<td>
									{{ number_format((float)$score["ScoreValue"], 2, '.', '') }}
								</td>
								@endforeach
								<td>
									{!! "<a href=\"grading/".encrypt($design->FacebookUniqueID)."/YnlwYXNz\" target=\"_blank\">".number_format((float)$design->total, 2, '.', '')."</a>" !!}
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
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Marketing
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table id="market" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Camper ID
								</th>
								<th>
									Code
								</th>
								<th>
									Profile
								</th>
								<th>
									1st Score
								</th>
								<th>
									2nd Score
								</th>
								<th>
									Total Score
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($markets as $count => $market)
							<tr>
								<td>
									{{ $count+1 }}
								</td>
								<td>
									{!! "<a href=\"grading/".encrypt($market->FacebookUniqueID)."\" target=\"_blank\">".$market->CamperID."</a>" !!}
								<td>
									{{ substr($market->profile->Telephone, 0, -3) . 'xxx' }}
								</td>
								<td>
									<i class="fa fa-{{ $market->verify ? $market->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($market->scores as $score)
								<td>
									{{ number_format((float)$score["ScoreValue"], 2, '.', '') }}
								</td>
								@endforeach
								<td>
									{!! "<a href=\"grading/".encrypt($market->FacebookUniqueID)."/YnlwYXNz\" target=\"_blank\">".number_format((float)$market->total, 2, '.', '')."</a>" !!}
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

@section('script')
<script type="text/javascript">
	$('#content').dataTable({
        "paging":   false,
        "info":     false,
        "filter":	false,
    });
    $('#design').dataTable({
        "paging":   false,
        "info":     false,
        "filter":	false,
    });
	$('#market').dataTable({
        "paging":   false,
        "info":     false,
        "filter":	false,
    });
</script>
@endsection