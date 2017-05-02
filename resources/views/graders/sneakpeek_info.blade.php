@extends('graders.layout', ['title' => 'น้อง'.$camper->profile->Nickname])

@section('style')
<link href="{{ url('graders/css/profile-old.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<h3 class="page-title">
	Sneak Peek 
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
								<div class="col-md-12 profile-info">
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
									</ul>
								</div>
								<!--end col-md-12-->
							</div>
							<!--end row-->

						</div>
					</div>
				</div>

			</div>
		</div>
		<!--END TABS-->
		@foreach($camper->answers as $answer)
		<div class="row">
			<div class="col-md-12 ">
				<!-- BEGIN Portlet PORTLET-->
				<div class="portlet box green">
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
		@endforeach
	</div>
</div>
<!-- END PAGE CONTENT-->

@endsection