@extends('profile.includes.layout')
@section('content')
<!-- page title -->
<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white font-tertiary">About Me</h1>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img src="{{asset('profile/images/illustrations/leaf-bg-top.png')}}" alt="illustrations" class="bg-shape-1 w-100">
    <img src="{{asset('profile/images/illustrations/dots-group-sm.png')}}" alt="illustrations" class="bg-shape-2">
    <img src="{{asset('profile/images/illustrations/leaf-yellow.png')}}" alt="illustrations" class="bg-shape-3">
    <img src="{{asset('profile/images/illustrations/leaf-orange.png')}}" alt="illustrations" class="bg-shape-4">
    <img src="{{asset('profile/images/illustrations/dots-group-cyan.png')}}" alt="illustrations" class="bg-shape-5">
    <img src="{{asset('profile/images/illustrations/leaf-cyan-lg.png')}}" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->


<!-- about -->
<section class="section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="paragraph-lg text-dark">
					A <b class="text-black-50">Senior Software Engineer</b> with over <b class="text-black-50">6 years of experience.</b>
					<br>
					<br>
					I have maintained, developed and launched multiple projects from scratch, carrying the development of its' back-end and front-end codebases.
					<br>
				</p>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Technologies</th>
                            <td>PHP, CSS, Mysql, JavaScript, C, C++, Java</td>
                        </tr>
                        <tr>
                            <th scope="row">Frameworks</th>
                            <td>Laravel, Code-Igniter, Jquery</td>
                        </tr>
                        <tr>
                            <th scope="row">Operating System</th>
                            <td>MacOS, Windows, Ubuntu</td>
                        </tr>
                        <tr>
                            <th scope="row">Tools</th>
                            <td>GIT, Jira, Postman </td>
                        </tr>
                        <tr>
                            <th scope="row">Others Integrations</th>
                            <td>Google APIs, Meta APIs, Payment gateways </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p class="paragraph-lg"><b>I can help you with all the sides of your project:</b></p>
                <ul class="list-group"> 
                    <li class="list-group-item">Verifying good UI/UX design</li>
                    <li class="list-group-item">Leading/co-developing the back-end and front-end</li>
                    <li class="list-group-item">Mentoring the team</li>
                    <li class="list-group-item">Estimating tasks</li>
                    <li class="list-group-item">Researching possible techs</li>
                    <li class="list-group-item">Leading, launching and monitoring the project</li>
                </ul>
            </div>
            <div class="col-md-4 text-center drag-lg-top">
                <div class="shadow-down mb-4">
                    <img src="{{asset('profile/images/about/author.jpg')}}" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
                </div>
                <h4>Himanshu Sharma</h4>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<!-- Work Process -->
<section class="section">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Work Process</h2>
            </div>
            <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
                <div class="">
                    <img src="{{asset('profile/images/icons/plan.png')}}" class="mb-4" alt="icon">
                    <h4 class="mb-4">Creative Ideas</h4>
                    <p>As design is my hobby, sometimes great ideas hit my mind for development. The senior developers and the managers also liked those, luckily, and I also got approval on some of my ideas too.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
                <img src="{{asset('profile/images/icons/design.png')}}" class="mb-4" alt="icon">
                <h4 class="mb-4">Design and Develop</h4>
                <p>Designing and Development is my personal favourite type of work. 
                    I've worked on CMS, APIs, business services, application services, and other projects. And also design some new Web templates</p>
            </div>
            <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
                <img src="{{asset('profile/images/icons/print.png')}}" class="mb-4" alt="icon">
                <h4 class="mb-4">Easy Customization</h4>
                <p>Customization is one of the greatest things in the field of development. All the services are already integrated in their basic form. We just need to customise the services as per the application requirements.</p>
            </div>
        </div>
    </div>
</section>
<!-- ./Work Process -->
@include('profile.includes.contactUs-form')
@stop
