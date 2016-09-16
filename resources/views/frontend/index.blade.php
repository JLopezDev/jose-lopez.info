@extends('layouts.default', ['pageTitle' => 'Home'])

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div id="photo-header" class="text-center">
                <!-- PHOTO (AVATAR) -->
                <div id="photo">
                    <img src="/img/profile.jpg" width="250" height="250" alt="avatar">
                </div>
                <div id="text-header">
                    <h1>Hello,<br>I'm Jose <span>Lopez</span><sup>31yo</sup> and this is my resum&eacute;/cv</h1>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <!-- ABOUT ME -->
            <div class="box">
                <h2>About Me</h2>
                <p>Experienced PHP programmer looking for a challenging and rewarding opportunities while using open
                    sourced materials to design Web-Based solutions. Comfortable working along side CSS and HTML
                    programmers, project managers, designers and database administrators in the administration of
                    software architecture.</p>
            </div>
            <!-- EDUCATION -->
            {{--<div class="box">--}}
                {{--<h2>Education</h2>--}}
                {{--<ul id="education" class="clearfix">--}}
                    {{--<li>--}}
                        {{--<div class="year pull-left">1990</div>--}}
                        {{--<div class="description pull-right">--}}
                            {{--<h3>I was born in Katowice</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, exercitationem,--}}
                                {{--totam, dolores iste dolore est aut modi.</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="year pull-left">2005</div>--}}
                        {{--<div class="description pull-right">--}}
                            {{--<h3>Secondary school specializing in artistic</h3>--}}
                            {{--<p>Eos, explicabo, nam, tenetur et ab eius deserunt aspernatur ipsum ducimus quibusdam quis--}}
                                {{--voluptatibus.</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="year pull-left">2009</div>--}}
                        {{--<div class="description pull-right">--}}
                            {{--<h3>First level graduation in Graphic Design</h3>--}}
                            {{--<p>Aspernatur, mollitia, quos maxime eius suscipit sed beatae ducimus quaerat quibusdam--}}
                                {{--perferendis? Iusto, quibusdam asperiores unde repellat.</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="year pull-left">2012</div>--}}
                        {{--<div class="description pull-right">--}}
                            {{--<h3>Second level graduation in Graphic Design</h3>--}}
                            {{--<p>Ducimus, aliquam tempore autem itaque et accusantium!</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
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
                                <li> Provided technical support in the assurance of quality systems and system changes </li>
                                <li> Code, develop, debut and test development projects</li>
                                <li> Meet with clients to discuss system requirements and project statuses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                    <div class="title only pull-right">josel786@gmail.com</div>
                </div>
                {{--<div class="contact-item">--}}
                {{--<div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>--}}
                {{--<div class="title pull-right">Twitter</div>--}}
                {{--<div class="description pull-right">https://twitter.com/WordPress</div>--}}
                {{--</div>--}}
                {{--<div class="contact-item">--}}
                {{--<div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>--}}
                {{--<div class="title pull-right">Facebook</div>--}}
                {{--<div class="description pull-right">https://www.facebook.com/facebook</div>--}}
                {{--</div>--}}
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
                    <div class="title pull-right">Skype</div>
                    <div class="description pull-right">jose.lopez.305</div>
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
            </div>
        </div>
    </div>
@stop
