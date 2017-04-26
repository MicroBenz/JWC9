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
									Facebook
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
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
									{!! "<a href=\"//fb.com/".$content->FacebookUniqueID."\" target=\"_blank\">".$content->fbaccount->FacebookName."</a>" !!}
								</td>
								<td>
									{{ $content->profile->FirstName." ".$content->profile->LastName }}
								</td>
								<td>
									{{ $content->profile->Nickname }}
								</td>
								<td>
									<i class="fa fa-{{ $content->verify ? $content->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($content->scores as $score)
								<td>
									{{ $score["ScoreValue"] }}
								</td>
								@endforeach
								<td>
									{{ $content->total }}
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
									Facebook
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
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
									{!! "<a href=\"//fb.com/".$design->FacebookUniqueID."\" target=\"_blank\">".$design->fbaccount->FacebookName."</a>" !!}
								</td>
								<td>
									{{ $design->profile->FirstName." ".$design->profile->LastName }}
								</td>
								<td>
									{{ $design->profile->Nickname }}
								</td>
								<td>
									<i class="fa fa-{{ $design->verify ? $design->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($design->scores as $score)
								<td>
									{{ $score["ScoreValue"] }}
								</td>
								@endforeach
								<td>
									{{ $design->total }}
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
									Facebook
								</th>
								<th>
									Name
								</th>
								<th>
									Nickname
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
									{!! "<a href=\"//fb.com/".$market->FacebookUniqueID."\" target=\"_blank\">".$market->fbaccount->FacebookName."</a>" !!}
								</td>
								<td>
									{{ $market->profile->FirstName." ".$market->profile->LastName }}
								</td>
								<td>
									{{ $market->profile->Nickname }}
								</td>
								<td>
									<i class="fa fa-{{ $market->verify ? $market->verify == 'pass' ? 'check':'times':'question'}}-circle"></i>
								</td>
								@foreach($market->scores as $score)
								<td>
									{{ $score["ScoreValue"] }}
								</td>
								@endforeach
								<td>
									{{ $market->total }}
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