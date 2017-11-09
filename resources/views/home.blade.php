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
      var emailString = email.textContent.replace(' at ', '@').replace(' dot ', '.');
      $(email).html($('<a />', {
         href: 'mailto:' + emailString,
         text: emailString
      }));
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
            <p>Experienced PHP programmer looking for a challenging and rewarding opportunities. I'm Comfortable working
               along side CSS and HTML programmers, project managers, designers and database administrators in the
               administration of
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
                        and Javascript (jQuery). After 6 months I was hired as a front-end developer at Up3 Group. </p>
                  </div>
               </li>
               <li>
                  <div class="year pull-left">2012</div>
                  <div class="description pull-right">
                     <h3>Back-end</h3>
                     <p>I learned PHP best practices and design patterns. Learned about the LAMP (Linux, Apache, MySQL,
                        PHP) stack and how to configure a web server.</p>
                     <p>I Became quite good at SQL queries and soon started designing database schemas. Manipulating
                        data
                        is one of funnest parts of web development.</p>
                  </div>
               </li>
               <li>
                  <div class="year pull-left">
                     2013
                  </div>
                  <div class="description pull-right">
                     <h3>Fullstack / Continuing Education</h3>
                     <p>Taking on more responsibility at work I started planning and
                        implementing the technology stack on some of our smaller projects. Configuring the
                        server and deploying the code into production. Started using Git to keep track of the and deploy
                        the codebase.
                     </p>
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
                        <li><b> Frontend: </b> <br> PSD to HTML/CSS; turning the design into a functional and responsive
                           web application using HTML, CSS and JavaScript. Using libraries like, Angular 4, Vue.js or
                           jQuery.
                        </li>
                        <li><b>Backend:</b> <br> Using mainly PHP/MySQL as the primary technology I create the
                           persistence
                           layer of an application. I collaborate with the team to discuss and implement solutions to
                           technical that arise when creating any project that requires a persistence layer.
                           Design and implement the project's database Schema and simple ways to interact with the
                           project's data.
                        </li>
                        <li><b> Code Maintenance: </b> <br> I write documentation and use Git keep track of all code
                           changes to deploy them to projects.
                        </li>
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
               <div class="title only pull-right"><span id="email">jopezdev at gmail dot com</span></div>
            </div>
            <div class="contact-item">
               <div class="icon pull-left text-center"><span class="fa fa-github fa-fw"></span></div>
               <div class="title only pull-right"><a href="https://github.com/jopezdev" target="_blank">github.com/jopezdev</a>
               </div>
            </div>
            <div class="contact-item">
               <div class="icon pull-left text-center"><span class="fa fa-linkedin fa-fw"></span></div>
               <div class="title only pull-right"><a href="https://www.linkedin.com/in/jopezdev"
                                                     target="_blank">linkedin.com/in/jopezdev</a>
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
               <div class="item-skills" data-percent="0.85">Laravel 5.1 (framework)</div>
               <div class="item-skills" data-percent="0.70">jQuery 1.11+</div>
               <div class="item-skills" data-percent="0.55">Javascript</div>
               <div class="item-skills" data-percent="0.20">WordPress</div>
               <div class="item-skills" data-percent="0.20">Node 4.5</div>
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
