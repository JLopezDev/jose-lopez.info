@extends('layouts.default', ['pageTitle' => 'Home'])

@section('scripts')
    <script>
        var callback = function () {
            $('.item-skills').each(function () {
                newWidth = $(this).parent().width() * $(this).data('percent');
                $(this).width(0);
                $(this).animate({
                    width: newWidth,
                }, 1000);
            });
            $('.icons-red').each(function () {
                height = $(this).height();
                $(this).animate({
                    height: 14,
                }, 2000);
            });
        };
        $(document).ready(callback);

        var resize;
        window.onresize = function () {
            clearTimeout(resize);
            resize = setTimeout(function () {
                callback();
            }, 100);
        };

        // bot spam prevention
        var email = document.getElementById('email');
        email.textContent = email.textContent.replace(' at ', '@').replace(' dot ', '.');
        console.log(email.textContent);
    </script>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div id="photo-header" class="text-center">
                <!-- PHOTO (AVATAR) -->
                <div id="photo">
                    <img src="/img/profile.jpg" width="250" height="250" alt="avatar">
                </div>
                <div id="text-header">
                    <h1>Hello,<br>I'm Jose
                        <span>Lopez</span><sup>{{ \Carbon\Carbon::createFromDate('1985', '02', '05')->diffInYears(\Carbon\Carbon::now())  }}</sup>
                        and this is my resum&eacute;/cv</h1>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            {{--ABOUT ME--}}
            <div class="box">
                <h2>About Me</h2>
                <p>Experienced PHP programmer looking for a challenging and rewarding opportunities while using open
                    sourced materials to design Web-Based solutions. I'm Comfortable working along side CSS and HTML
                    programmers, project managers, designers and database administrators in the administration of
                    software architecture. As well has being able to handle those responsibilities on my own with the
                    exception of designing.</p>
            </div>

            {{--EDUCATION--}}
            <div class="box">
                <h2>Education
                    <small>On-the-job/Self-taught</small>
                </h2>
                <ul id="education" class="clearfix">
                    <li>
                        <div class="year pull-left">2011</div>
                        <div class="description pull-right">
                            <h3>Front-end</h3>
                            <p>Using the resources available (eg. youtube, udemy, books) I taught myself basic HTML/CSS
                                and Javascript (jQuery). After 6 months I was hired as a junior front-end developer.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year pull-left">2012</div>
                        <div class="description pull-right">
                            <h3>Back-end</h3>
                            <p>While working on the front-end I was exposed the PHP. I took it upon myself to learn
                                about the back-end. As well as learning PHP's best practices (eg. SOLID, DRY, etc...)
                                and design patterns (eg. Facade, Decorator, MVC, etc..) I also gained knowledge on the
                                LAMP
                                (Linux, Apache, MySQL, PHP) stack and how to configure Ubuntu 14.04 as a web server.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year pull-left">
                            2013
                        </div>
                        <div class="description pull-right">
                            <h3>Fullstack / Continuing Education</h3>
                            <p>I took on more responsibility at work and started planning and
                                implementing the technology stack on some of our smaller projects. Configuring the
                                server and
                                deploying the code into production. As well as changing company procedure to include the
                                usage
                                of a VCS.
                            </p>
                            <p>I try keep up with the and evaluate the newest technology trends's and
                                best practices and determine if it will make sense to implement them into the company's
                                workflow.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- EXPERIENCES -->
            <div class="box">
                <h2>Experiences</h2>
                <div class="job clearfix">
                    <div class="col-xs-3">
                        <div class="where">UP3 Group, LLC</div>
                        <div class="year">2011 - Present</div>
                    </div>
                    <div class="col-xs-9">
                        <div class="profession">Front-end developer / PHP programmer</div>
                        <div class="description">
                            <ul class="list-unstyled">
                                <li> Convert PSD mockups into HTML/CSS code</li>
                                <li> Maintain front-end code for projects</li>
                                <li> Update images, text and layout for projects</li>
                                <li> Design and implement PHP MySQL solutions as per project specifications</li>
                                <li> Collaborate with team members in the development of database structuring</li>
                                <li> Manage and maintain development of PHP backend for web applications</li>
                                <li> Provided technical support in the assurance of quality systems and system changes
                                </li>
                                <li> Code, develop, debut and test development projects</li>
                                <li> Meet with clients to discuss system requirements and project statuses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--<!-- ACHIEVEMENTS -->--}}
            {{--<div class="box">--}}
            {{--<h2>Achievements</h2>--}}
            {{--<div class="job clearfix">--}}
            {{--<div class="col-xs-12">--}}
            {{--<div class="description">--}}
            {{--<ul class="list-unstyled">--}}
            {{--<li> Company wide change implementing VCS</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-xs-12 col-sm-5">
            <!-- CONTACT -->
            <div class="box clearfix">
                <h2>Contact</h2>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
                    <div class="title only pull-right">786 397 5435</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
                    <div class="title only pull-right">jose.lopez.305</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                    <div class="title only pull-right"><span id="email">josel786 at gmail dot com</span></div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-github fa-fw"></span></div>
                    <div class="title only pull-right"><a href="https://github.com/JLopezDev" target="_blank">github.com/JLopezDev</a>
                    </div>
                </div>
            </div>
            <!-- SKILLS -->
            <div class="box">
                <h2>Skills</h2>
                <div class="skills">
                    <div class="item-skills" data-percent="0.90">HTML5</div>
                    <div class="item-skills" data-percent="0.90">CSS3</div>
                    <div class="item-skills" data-percent="0.90">PHP 5.5.9+</div>
                    <div class="item-skills" data-percent="0.80">Laravel 5.1 (framework)</div>
                    <div class="item-skills" data-percent="0.70">jQuery 1.11+</div>
                    <div class="item-skills" data-percent="0.65">Javascript</div>
                    <div class="item-skills" data-percent="0.40">WordPress</div>
                    <div class="item-skills" data-percent="0.40">Node 4.5</div>
                    <div class="item-skills" data-percent="0.30">Python 3.4+</div>
                    <div class="item-skills" data-percent="0.30">Django 1.10</div>
                    <div class="skills-legend clearfix">
                        <div class="legend-left legend">Beginner</div>
                        <div class="legend-left legend"><span>Proficient</span></div>
                        <div class="legend-right legend"><span>Expert</span></div>
                        <div class="legend-right legend">Master</div>
                    </div>
                </div>
            </div>
            <!-- LANGUAGES -->
            <div class="box">
                <h2>Languages</h2>
                <div id="language-skills">
                    <div class="skill">English
                        <div class="icons pull-right">
                            <div style="width: 100%;" class="icons-red"></div>
                        </div>
                    </div>
                    <div class="skill">Spanish
                        <div class="icons pull-right">
                            <div style="width: 50%;" class="icons-red"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HOBBIES -->
            <div class="box">
                <h2>Hobbies</h2>
                <div class="hobby">Longboarding</div>
                <div class="hobby">Sporting Clays</div>
                <div class="hobby">Programming</div>
                <div class="hobby">RaspberryPi</div>
                <div class="hobby">Small Electronics</div>
                <div class="hobby">Gaming</div>
            </div>
        </div>
    </div>
@stop
