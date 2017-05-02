@extends('graders.layout', ['title' => 'Grading System'])

@section('style')
<link href="{{ url('graders/css/profile-old.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('graders/css/icheck_orange.css') }}" rel="stylesheet" type="text/css"/>
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
	label {
		font-size: 20px;
	}
	textarea {
		font-size: 20px;
	}
</style>
@endsection

@section('content')
<h3 class="page-title">
	Grading System (Ref# {{ substr($camper->profile->Telephone, 0, -3) . 'xxx' }})
</h3>
<!-- BEGIN PAGE CONTENT-->
<div class="row profile">
	<div class="col-md-12">
		<!--BEGIN TABS-->
		<div class="tabbable tabbable-custom tabbable-noborder">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1_1">
					<div class="row">
						<div class="col-md-3">
							<ul class="list-unstyled profile-nav">
								<li>
									<img src="//jwc.in.th/storage/{{ $camper->profile->ProfilePicture }}" class="img-responsive" alt=""/>
								</li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-8 profile-info">
									<h1>{{ $camper->profile->FirstName." ".$camper->profile->LastName." (".$camper->profile->FirstNameEN." ".$camper->profile->LastNameEN.")"." - น้อง".$camper->profile->Nickname }}</h1>
									<ul class="list-inline">
										<li>
											<i class="fa fa-map-marker"></i> {{ $camper->profile->province->ProvinceName }}
										</li>
										<li>
											<i class="fa fa-calendar"></i> {{ $camper->profile->Birthday }}
										</li>
										<li>
											<i class="fa fa-briefcase"></i> {{ $camper->team->TeamName }}
										</li>
										<li>
											<i class="fa fa-venus-mars"></i> {{ $camper->profile->Gender }}
										</li>
										<li>
											<i class="fa fa-heart"></i> {{ $camper->profile->Religion }}
										</li>
										<li>
											<i class="fa fa-graduation-cap"></i> {{ $camper->profile->school->SchoolName }}
										</li>
										<li>
											<i class="fa fa-book"></i> {{ $camper->profile->EducationLevel." (".$camper->profile->EducationMajor.")" }}
										</li>
										<li>
											<i class="fa fa-tint"></i> {{ $camper->profile->BloodType }}
										</li>
										<li>
											<i class="fa fa-envelope"></i> {{ $camper->profile->Email }}
										</li>
										<li>
											<i class="fa fa-mobile"></i> {{ $camper->profile->Telephone }}
										</li>
										<li>
											<i class="fa fa-cutlery"></i> {{ $camper->profile->FoodType }}
										</li>
									</ul>
								</div>
								<!--end col-md-12-->
								<div class="col-md-4">
									<div class="portlet sale-summary">
										<div class="portlet-title">
											<div class="caption">
												ประวัติการแพ้
											</div>
											<div class="tools">
												<a class="reload" href="javascript:;">
												</a>
											</div>
										</div>
										<div class="portlet-body">
											<ul class="list-unstyled">
												<li>
													<span class="sale-info">{{ $camper->Profile->Allergy }}</span>
												</li>
												<li>
													<span class="sale-info">{{ $camper->Profile->DrucAllergic }}</span>
												</li>
												<li>
													<span class="sale-info">{{ $camper->Profile->FoodAllergic }}</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!--end col-md-4-->
							</div>
							<!--end row-->

						</div>
					</div>
				</div>

			</div>
		</div>
		<!--END TABS-->
	</div>
</div>
<form action="{{ url('wearehiring/grading') }}" method="post" class="form-horizontal">
	<div class="form-body">
		<div class="row profile">
			<div class="col-md-12">
				@foreach($answers as $answer)
				<?php
					if($answer->question->QuestionID == 1)
					{
						$answerid = encrypt($answer->AnswerID);
						$pass = false;
						$fail = false;
						if(!$answer->scoreByGrader->isEmpty())
						{
							$color = 'green';
							if($answer->scoreByGrader[0]->ScoreValue == 1)
							{
								$pass = true;
							}
							else
							{
								$fail = true;
							}
						}
						else
						{
							$pass = true;
							$color = 'yellow';
						}
					}
				?>
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box {{ $color }}">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>{{ $answer->question->QuestionText }}
								</div>
							</div>
							<div class="portlet-body">
								<textarea style="width: 100%; min-height: 240px;" disabled>{{ $answer->AnswerText }}</textarea>
							</div>
						</div>
						<!-- END Portlet PORTLET-->
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<hr>
	<div class="form-group">
		<input type="hidden" name="answers[]" value="{{ $answerid }}">
		<input type="hidden" name="criteria[]" value="0">
		<div class="col-md-offset-4 col-md-8">
			<div class="input-group">
				<div class="icheck-inline">
					<label>
						<input type="radio" name="scores[]" {{ $pass ? 'checked':'' }} class="icheck" value="1"> ผ่าน
					</label>
					<label>
						<input type="radio" name="scores[]" {{ $fail ? 'checked': '' }} class="icheck" value="0"> ไม่ผ่าน
					</label>
				</div>
			</div>
		</div>
	</div>
	<hr>
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

@section('script')
<script src="{{ url('graders/js/icheck.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-orange',
    radioClass: 'iradio_square-orange',
    increaseArea: '20%' // optional
  });
});
</script>
@endsection