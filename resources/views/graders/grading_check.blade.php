@extends('graders.layout', ['title' => 'Grading System'])

@section('style')
<link href="{{ url('graders/css/profile-old.css') }}" rel="stylesheet" type="text/css"/>
<style type="text/css">
	h3 {
		line-height: 30px;
	}
	.form-control {
		font-size: 50px;
		height: 100px;
		text-align: center;
	}
	.btn {
		font-size: 20px;
	}
</style>
@endsection

@section('content')
<h3 class="page-title">
	Grading System (Ref# {{ substr($camper->profile->Telephone, 0, -3) . 'xxx' }})
</h3>
<!-- BEGIN PAGE CONTENT-->
<form action="{{ url('wearehiring/grading') }}" method="post" class="form-horizontal">
	<div class="form-body">
		<div class="row profile">
			<div class="col-md-12">
				@foreach($answers as $answer)
				@if($answer->question->QuestionID < 5)
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box grey">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>{{ $answer->question->QuestionText }}
								</div>
							</div>
							<div class="portlet-body">
								{{ $answer->AnswerText }}
							</div>
						</div>
						<!-- END Portlet PORTLET-->
					</div>
				</div>
				@else
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box {{ $answer->scoreByGrader ? 'green':'yellow' }}">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-rocket"></i>{{ $answer->question->QuestionText }}
								</div>
							</div>
							<div class="portlet-body">
								@if($answer->question->QuestionID == 7)
								Attachment: <a href="//jwc.in.th/storage/{{ $answer->Attachment }}" target="_blank">{{ $answer->Attachment }}</a>
								@endif
								<h3>{{ $answer->AnswerText }}</h3>
								@for ($i = 0; $i < $answer->question->Criteria ; $i++)
								<input type="hidden" name="answers[]" value="{{ encrypt($answer->AnswerID) }}">
								<input type="hidden" name="criteria[]" value="{{ $i+1 }}">
								@endfor
							</div>
						</div>
						<!-- END Portlet PORTLET-->
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-2 control-label">Score</label>
							@if(!$answer->scoreByGrader->isEmpty())
							@foreach($answer->scoreByGrader as $score)
							<div class="col-md-2">
								<input type="number" class="form-control" name="scores[]" value="{{ $score->ScoreValue }}" step="0.5" required>
							</div>
							@endforeach
							@else
							@for ($i = 0; $i < $answer->question->Criteria ; $i++)
							<div class="col-md-2">
								<input type="number" class="form-control" name="scores[]" step="0.5" required>
							</div>
							@endfor
							@endif
						</div>
					</div>
				</div>
				@endif
				@endforeach
				<hr>
			</div>
		</div>
	</div>
	<div class="form-actions">
		<input type="hidden" name="secret" value="{{ encrypt($camper->CamperID) }}">
		<div class="row">
			<div class="col-md-offset-4 col-md-8">
				<a href="{{ url('wearehiring/grading') }}"><button type="button" class="btn default">ยกเลิก</button></a>
				<button type="submit" class="btn blue">บันทึก</button>
		</div>
	</div>
</form>
<!-- END PAGE CONTENT-->

@endsection