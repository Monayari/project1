<!DOCTYPE HTML>
<html>
@extends('layouts.master')
@section('pagetitle','koosharayan|coursespage')

@section('content')
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

        @section('title')
        <h1>دوره ها</h1>
        @endsection
	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <x-coursespage title="دوره های اموزشی"
                    des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است "
                   text=""
                   txt=""
                    />
				</div>
			</div>
		</div>
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">

                        <x-slidbar img="images/12.png"

                        alt="work"
                        txt=""
                        des=""
                        />

					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
                            <x-coursespage title=""
                            des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است "
                           text=""
                           txt="ما از شما میخواهیم زبان انگلیسی را یادبگیرید"

                            />

							<ul class="list-nav">
								<li><i class="icon-check2"></i>لورم ایپسوم متن ساختگی با تولید  نامفهوم </li>
								<li><i class="icon-check2"></i>لورم ایپسوم متن ساختگی با تولید  نامفهوم</li>
								<li><i class="icon-check2"></i>لورم ایپسوم متن ساختگی با تولید  نامفهوم</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> تماشای ویدیو</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">

                    <x-slidbar img="images/11.png"

                    alt="work"
                    txt=""
                    des=""
                    />
                	</div>
					<div class="col-md-4 animate-box ani-box2">
						<div class="mt">
							<div>

                          @component('components.coursespage')
                          @slot('title')

                          @endslot

                          @slot('des')
                          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است


                          @endslot

                          @slot('text')
                          <i class="icon-user"></i>دوره های اموزشی رایگان
                          @endslot
                          @slot('txt')

                          @endslot



                                      @endcomponent

							</div>
							<div>

                           @component('components.coursespage')
                           @slot('title')

                           @endslot

                           @slot('des')
                           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است


                           @endslot

                           @slot('text')
                           <i class="icon-video2"></i>دوره های اموزشی رایگان
                           @endslot
                           @slot('txt')

                           @endslot

                              @endcomponent

							</div>
							<div>

                           @component('components.coursespage')
                           @slot('title')

                           @endslot

                           @slot('des')
                           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است


                           @endslot

                           @slot('text')
                           <i class="icon-shield"></i>دوره های اموزشی رایگان
                           @endslot
                           @slot('txt')

                           @endslot
                         @endcomponent

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-project">
		<div class="container-fluid proj-bottom">
			<div class="row">

                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
                    <x-slidbar img="images/19.jpg"


                txt="فروشگاه انلاین"
                des="دیدن دوره"
                alt="Free HTML5 Website Template by FreeHTML5.co"
                />
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
                <x-slidbar img="images/17.png"

                alt="Free HTML5 Website Template by FreeHTML5.co"
                txt=" تاکسی انلاین"
                des="دیدن دوره"
                />
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
<x-slidbar img="images/22.png"

alt="Free HTML5 Website Template by FreeHTML5.co"

txt="اتومبیلرانی"

des="دیدن دوره"
/>

                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
                <x-slidbar img="images/51.png"

                alt="Free HTML5 Website Template by FreeHTML5.co"
                txt=" لیست خرید"
                des="دیدن دوره"
                />
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
                <x-slidbar img="images/15.png"

                alt="Free HTML5 Website Template by FreeHTML5.co"
                txt=" تدریس انلاین"
                des="دیدن دوره"
                />
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#">
                <x-slidbar img="images/16.png"

                alt="Free HTML5 Website Template by FreeHTML5.co"
                txt=" نوبت دهی"
                des="دیدن دوره"
                />
                    </a>
                </div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">

                    <x-coursespage title="بهترین قالب ها را از ما بخواهید "
                    des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "
                   text=""
                   txt=""
                    />

					</div>
					<div class="col-md-4 animate-box">

                <x-coursespage title="بهترین قالب ها را از ما بخواهید "
                    des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "
                   text=""
                   txt=""
                    />

					</div>
					<div class="col-md-4 animate-box">

                        <x-coursespage title="بهترین قالب ها را از ما بخواهید "
                        des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "
                       text=""
                       txt=""
                        />

					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">اموزش دوره های رایگان</a></p>
				</div>
			</div>
		</div>
	</div>




	</div>
@endsection
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>



	</body>
</html>

