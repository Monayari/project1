<!DOCTYPE HTML>
<html>

@extends('layouts.master')
@section('pagetitle','koosharayan|contactpage')
@section('content')

@section('title')
<h1>تماس باما</h1>
@endsection
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>اطلاعات تماس</h3>



						<ul>
							<li class="address"><a>ایلام میدان نبوت ،  خیابان حافظ پلاک 2356 </a></li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>باما در تماس باشید</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="نام">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="نام خانوادگی">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="ادرس ایمیل">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="موضوع">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="پیشنهادات ..."></textarea>
							</div>
						</div>
						<div class="form-group" style="float: left;">
							<input type="submit" value="ارسال پیام" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	</div>
@endsection
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>


	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>


	</body>
</html>

