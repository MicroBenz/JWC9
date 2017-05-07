@extends('graders.layout', ['title' => 'Slip Checking System'])

@section('style')
<link href="{{ url('graders/css/profile-old.css') }}" rel="stylesheet" type="text/css"/>
<style type="text/css">
	.portlet.box > .portlet-body {
		padding: 5px 40px 40px 40px;
	}
</style>
@endsection

@section('content')
<h3 class="page-title">
	Slip Checking System (Ref# {{ $camper->CamperID }})
</h3>
<!-- BEGIN PAGE CONTENT-->
<form action="{{ url('wearehiring/slip') }}" method="post" class="form-horizontal">
	<div class="form-body">
		<div class="row profile">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-rocket"></i>{{ $camper->FirstName." ".$camper->LastName." (".$camper->Nickname.")" }}
								</div>
							</div>
							<div class="portlet-body">
								<h1>Money: {{ $camper->Money }}</h1>
								Slip Attachment: <br><a href="//jwc.in.th/storage/slip/{{ $camper->Slip }}" target="_blank"><img src="//jwc.in.th/storage/slip/{{ $camper->Slip }}" style="max-width: 400px;"></a><br><br>
								<div class="form-group">
									<label>Judgement</label>
									<select class="form-control input-lg" name="checked">
										<option value="โปรดอัพโหลดหลักฐานการโอนเงิน">หลักฐานไม่ผ่าน เช่น รูปภาพไม่ชัด หรือไม่ตรงกับยอดในสมุด</option>
										<option value="ยืนยันสำเร็จ">อนุมัติหลักฐานการโอนเงิน</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- END Portlet PORTLET-->
				</div>
			</div>
			<hr>
		</div>
	</div>
	<div class="form-actions">
		<input type="hidden" name="secret" value="{{ encrypt($camper->CamperID) }}">
		<div class="row">
			<div class="col-md-offset-4 col-md-8">
				<a href="{{ url('wearehiring/slip') }}"><button type="button" class="btn default">ยกเลิก</button></a>
				<button type="submit" class="btn blue">บันทึก</button>
			</div>
		</div>
	</form>
	<!-- END PAGE CONTENT-->

	@endsection