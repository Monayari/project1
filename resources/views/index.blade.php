<html>

@extends('layouts.master')
@section('pagetitle','koosharayan|indexgpage')
@section('content')
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

        @section('title')
        <h1 class="h-header"> هنر اموزش هنر کمک به کشف است </h1>
                        <h2>قالب های رایگان html5 ساخته شده توسط<a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                        <p class="btns-header"><a class="btn btn-primary btn-lg btn-learn" href="#">یه دوره بردار! </a>
                         <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> تماشای دوره </a></p>
                         @endsection

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">دانشجویان</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">دوره ها</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"> مدرس </span>
				</div>
				<div class="col-md-3 text-center animate-box">

					<span class="fh5co-counter js-counter" data-from="0" data-to="997585" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"> تعداد ساعت اموزش </span>
				</div>
			</div>
		</div>
	</div>

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
					<div class="col-md-8 col-md-push-5 animate-box">
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
								<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم چاپ<i class="icon-check2"></i></li>
								<li>لورم ایپسوم متن ساختگی با تولید سادگی <i class="icon-check2"></i></li>
								<li>لورم ایپسوم متن ساختگی با تولید سادگی چاپ<i class="icon-check2"></i></li>
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
					<div class="col-md-8 col-md-pull-1 animate-box">
                        <x-slidbar img="images/11.png"

                        alt="work"
                        txt=""
                        des=""
                        />

					</div>
					<div class="col-md-4  animate-box ani-box2">
						<div class="mt text-right">
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
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <x-coursespage title="بهترین قالب ها را از ما بخواهید "
                    des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "
                   text=""
                   txt=""
                    />

				</div>
			</div>
		</div>
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
                        <x-coursespage title=""

                        text="ایپسوم متن ساختگی با تولید سادگی "

                        des=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
                        txt=""
                        />

					</div>
					<div class="col-md-4 animate-box">
                        <x-coursespage title=""

                        text="ایپسوم متن ساختگی با تولید سادگی "

                        des=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
                        txt=""
                        />

					</div>
					<div class="col-md-4 animate-box">
                        <x-coursespage title=""

                        text="ایپسوم متن ساختگی با تولید سادگی "

                        des=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
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

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <x-coursespage title="شروع دوره"

                    text=""

                    des=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
                    txt=""
                    />

				</div>
			</div>

            <x-indexpage t1="گام اول"

            s1="ایجاد دوره رایگان"
            t2="گام دوم"
            s2="بروزرسانی محتوا"
            t3="گام سوم"
            s3="زیبا کردن دوره"
            t4="گام چهارم"
            s4="کسب درامدگ"

            />


		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>معرفی تیم</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>

										<img src="images/25.jpg" alt="user">
									</figure>
									<span> رضاملکی <a href="#" class="twitter">برنامه نویس</a></span>
									<blockquote>
										<p>&ldquo; لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز .&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>

										<img src="images/26.jpg" class="rounded-circle" alt="user">
									</figure>
									<span>مریم اقبالی <a href="#" class="twitter">مدیرداخلی</a></span>
									<blockquote>
										<p>&ldquo; لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است   .&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/27.jpg" alt="user">
									</figure>
									<span>امیر یعقوبی <a href="#" class="twitter">طراح و توسعه دهنده</a></span>
									<blockquote>
										<p>&ldquo; لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <x-coursespage title="پست های اخیر"

                    text=""
               des="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز"
                    txt=""
                    />

                    {{-- <h2>پست های اخیر</h2> --}}
					{{-- <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز </p> --}}
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
                    <x-button    img="images/40.jpg"
                    title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"
                        text="دوشنبه 3 تیر"
                        date="21"
                        description=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "

                        btn="ادامه مطلب"

                     />

				</div>
				<div class="col-lg-4 col-md-4">
                    <x-button    img="images/33.png"
                    title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"
                        text="سه شنبه 8 خرداد"
                        date="21"
                        description=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "

                        btn="ادامه مطلب"

                     />

				</div>
				<div class="col-lg-4 col-md-4">

                    <x-button    img="images/51.png"
                    title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"
                        text="شنبه 14 اذر"
                        date="21"
                        description=" لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است "

                        btn="ادامه مطلب"

                     />

				</div>
                @endsection
			</div>
		</div>
	</div>





	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>



	</body>
</html>

