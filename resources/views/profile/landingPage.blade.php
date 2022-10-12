@extends('profile.includes.layout')
@section('content')
<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<h1 class="text-white font-tertiary">Hi! I’m <br> Himanshu <br> Web-Developer</h1>
			</div>
		</div>
	</div>
	<div class="layer-bg w-100">
		<img class="img-fluid w-100" src="{{asset('profile/images/illustrations/leaf-bg.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l2">
		<img src="{{asset('profile/images/illustrations/dots-cyan.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l3">
		<img src="{{asset('profile/images/illustrations/leaf-orange.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l4">
		<img src="{{asset('profile/images/illustrations/dots-orange.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l5">
		<img src="{{asset('profile/images/illustrations/leaf-yellow.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l6">
		<img src="{{asset('profile/images/illustrations/leaf-cyan.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l7">
		<img src="{{asset('profile/images/illustrations/dots-group-orange.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l8">
		<img src="{{asset('profile/images/illustrations/leaf-pink-round.png')}}" alt="bg-shape">
	</div>
	<div class="layer" id="l9">
		<img src="{{asset('profile/images/illustrations/leaf-cyan-2.png')}}" alt="bg-shape">
	</div>
	<!-- social icon -->
	<ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
		<li class="mb-3"><a class="text-white" href="#"><i class="ti-facebook"></i></a></li>
		<li class="mb-3"><a class="text-white" href="#"><i class="ti-instagram"></i></a></li>
		<li class="mb-3"><a class="text-white" href="#"><i class="ti-dribbble"></i></a></li>
		<li class="mb-3"><a class="text-white" href="#"><i class="ti-twitter"></i></a></li>
	</ul>
	<!-- /social icon -->
</section>
<!-- /hero area -->


<!-- about -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<p class="font-secondary paragraph-lg text-dark">
					A <b class="text-black-50">Senior Software Engineer</b> with over <b class="text-black-50">6 years of experience.</b>
					<br>
					<br>
					I have maintained, developed and launched multiple projects from scratch, carrying the development of its' back-end and front-end codebases.
					<br>
					<br>
					My current toolset includes PHP , Laravel Framework, Codeigniter Framework, MySQL, C, C++, Java, GIT, API, JSON and all the other various frameworks, libraries and technologies related to them.
				</p>
				<a href="{{route('about')}}" class="btn btn-transparent">know more</a>
			</div>
		</div>
	</div>
</section>
<!-- /about -->

<!-- skills -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Skills</h2>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="card shadow text-center">
                    <div class="position-relative rounded-top progress-wrapper" 
                    data-color="#fdb157">
                        <div class="wave" data-progress="90%"></div>
                    </div>
                    <div class="card-footer bg-white">
                        <h4 class="card-title">Web Development (90%)</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="card shadow text-center">
                    <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
                        <div class="wave" data-progress="60%"></div>
                    </div>
                    <div class="card-footer bg-white">
                        <h4 class="card-title">Web Design (60%)</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="card shadow text-center">
                    <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
                        <div class="wave" data-progress="80%"></div>
                    </div>
                    <div class="card-footer bg-white">
                        <h4 class="card-title">Costomization (80%)</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="card shadow text-center">
                    <div class="position-relative rounded-top progress-wrapper" data-color="
                    #ffbcaa">
                        <div class="wave" data-progress="70%"></div>
                    </div>
                    <div class="card-footer bg-white">
                        <h4 class="card-title">Web App (70%)</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /skills -->

<!-- experience -->
<section class="section">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Experience</h2>
            </div>
            <div class="col-lg-3 col-md-4 text-center">
				<img src="{{asset('profile/images/experience/icon-3.png')}}" alt="icon">
                <p class="mb-0">Since July 2022</p>
                <h4>Sr. Software Engineer</h4>
                <h6 class="text-light">NeoSOFT Technologies</h6>
            </div>
            <div class="col-lg-3 col-md-4 text-center">
                <img src="{{asset('profile/images/experience/icon-2.png')}}" alt="icon">
                <p class="mb-0">July 2018 - July 2022</p>
                <h4>Software Engineer</h4>
                <h6 class="text-light">Provab Technologies</h6>
            </div>
            <div class="col-lg-3 col-md-4 text-center">
				<img src="{{asset('profile/images/experience/icon-1.png')}}" alt="icon">
                <p class="mb-0">June 2016 - July 2018</p>
                <h4>Jr. Software Engieer</h4>
                <h6 class="text-light">The Cobox</h6>
            </div>
        </div>
    </div>
</section>
<!-- ./experience -->

<!-- services -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Services</h2>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card hover-shadow shadow">
                    <div class="card-body text-center px-4 py-5">
                        <i class="ti-palette icon mb-5 d-inline-block"></i>
                        <h4 class="mb-4">Backend Development</h4>
                        <p>Backend development is my personal favourite type of work.I've worked on CMS, APIs, business services, application services, and other projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card active-bg-primary hover-shadow shadow">
                    <div class="card-body text-center px-4 py-5">
                        <i class="ti-vector icon mb-5 d-inline-block"></i>
                        <h4 class="mb-4">Creative Ideas</h4>
                        <p>As design is my hobby, sometimes great ideas hit my mind for development. The senior developers and the managers also liked those, luckily, and I also got approval on some of my ideas too.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card hover-shadow shadow">
                    <div class="card-body text-center px-4 py-5">
                        <i class="ti-panel icon mb-5 d-inline-block"></i>
                        <h4 class="mb-4">Easy Customize</h4>
                        <p>Customization is one of the greatest things in the field of development. All the services are already integrated in their basic form. We just need to customise the services as per the application requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /services -->


<!-- blog -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Blogs</h2>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <article class="card shadow">
                    <img class="rounded card-img-top" src="{{asset('profile/images/blog/blog-1.png')}}" alt="post-thumb">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="#">
                                BitBucket (git) to cPanel Deployment
                            </a>
                        </h4>
                            <p class="cars-text">Click here to know, how to deploy code directly from BitBucket to cPanel without hassle quickly.</p>
                            <!-- <a href="#" class="btn btn-xs btn-primary">Read More</a> -->
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <article class="card shadow">
                    <img class="rounded card-img-top" src="{{asset('profile/images/blog/blog-2.png')}}" alt="
                    post-thumb">
                    <div class="card-body">
                        <h4 class="card-title"><a class="text-dark" href="#">PHP  Interview Questions for all levels</a>
                        </h4>
                        <p class="cars-text">You will get top interview questions to clear the PHP interview from Beginner to Experience level.</p>
                        <!-- <a href="#" class="btn btn-xs btn-primary">Read More</a> -->
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <article class="card shadow">
                    <img class="rounded card-img-top" src="{{asset('profile/images/blog/blog-3.png')}}" alt="
                    post-thumb">
                    <div class="card-body">
                        <h4 class="card-title"><a class="text-dark" href="#">Fundamentals of Technologies for Beginners</a>
                        </h4>
                        <p class="cars-text">This is the Basic blog about the fundaments of the technologies, On later we will add more contents for freshers.</p>
                        <!-- <a href="#" class="btn btn-xs btn-primary">Read More</a> -->
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- /blog -->

@include('profile.includes.contactUs-form')
@stop
