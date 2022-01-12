<!DOCTYPE HTML>
<html>
    @extends('layouts.master')
    @section('pagetitle','koosharayan|pricingpage')
@section('content')
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

        @section('title')
        <h1>طرح قیمت گذاری</h1>
        @endsection
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">

                      <div class="price-box">
                        <x-pricingpage
                        title="پیشرفته"

                           pric="$"
                           s="9"
                           btn="انتخاب طرح"

                       />
                      </div>
                        {{-- </div> --}}
						{{-- <div class="price-box">
							<h2 class="pricing-plan">پیشرفته</h2>
							<div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm"> انتخاب طرح </a>
						</div> --}}
					</div>

					<div class="col-md-3 animate-box">
                         <div class="price-box">
						<x-pricingpage
                        title="پایه"

                           pric="$"
                           s="27"
                           btn="انتخاب طرح"

                       />
                         </div>
						{{-- <div class="price-box">
							<h2 class="pricing-plan">پایه</h2>
							<div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm"> انتخاب طرح</a>
						</div> --}}
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
                            <x-pricingpage
                            title="حرفه ای"

                               pric="$"
                               s="74"
                               btn="انتخاب طرح"

                           />
							{{-- <h2 class="pricing-plan pricing-plan-offer">حرفه ای <span>بهترین پیشنهاد </span></h2>
							<div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm"> انتخاب طرح</a> --}}
						</div>
					</div>

					<div class="col-md-3 animate-box">
                     <div class="price-box">
                        <x-pricingpage
                        title="نامحدود"

                           pric="$"
                           s="140"
                           btn="انتخاب طرح"

                       />
                     </div>
						{{-- <div class="price-box">
							<h2 class="pricing-plan">نامحدود</h2>
							<div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm"> انتخاب طرح</a>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>


	</body>
</html>

