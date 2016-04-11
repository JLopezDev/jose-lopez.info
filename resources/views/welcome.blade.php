@extends('layouts/main/main')
@section('content')
    {{-- about me section --}}
    <div class="mdl-grid about-grid">
        <div class="mdl-cell mdl-cell--9-col">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">About Me</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ex iste nihil placeat quos reiciendis
                    temporibus ullam vel voluptatem voluptates. Eaque nesciunt nostrum odit sit sunt. Ab ad, neque!
                    Aliquam aspernatur autem eos maxime molestiae nam omnis perferendis sequi velit, voluptatum! Dolorum
                    ea facere illo incidunt molestias quis recusandae rem.
                </div>

                <div class="mdl-card__supporting-text">
                    <b>Hobbies / Interests</b>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium doloremque dolorum
                    eius fugiat
                    incidunt ipsam necessitatibus odit perferendis unde voluptatibus?
                </div>
            </div>
            {{-- experience --}}
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Experience</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore esse exercitationem
                    facilis qui quo sit sunt. Doloremque impedit iste, magnam minima modi nobis placeat quae qui
                    reprehenderit sequi? Beatae consequuntur cumque dolores earum ipsum itaque iure officiis perferendis
                    quas recusandae repudiandae sed, tempora voluptatem. Earum eligendi ex magnam voluptatibus.
                </div>
            </div>
            {{-- education --}}
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Education</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore esse exercitationem
                    facilis qui quo sit sunt. Doloremque impedit iste, magnam minima modi nobis placeat quae qui
                    reprehenderit sequi? Beatae consequuntur cumque dolores earum ipsum itaque iure officiis perferendis
                    quas recusandae repudiandae sed, tempora voluptatem. Earum eligendi ex magnam voluptatibus.
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--3-col">
            <h5>Skills</h5>
            <h6>Spoken Languages</h6>
            <ul>
                <li>English</li>
                <li>Spanish</li>
            </ul>
            <h6>Programming Languages</h6>
            <ul>
                <li>PHP 5.6+</li>
                <li>Javascript ES5</li>
                <li>HTML 4+</li>
                <li>CSS 2+</li>
                <li>Python 2.7</li>
            </ul>
            <h6>Frameworks</h6>
            <ul>
                <li>Laravel 4.2+</li>
                <li>CakePHP 2</li>
                <li>MEAN.js</li>
            </ul>
            <h6>Workflow</h6>
            <ul>
                <li>Mac OSX</li>
                <li>PHPStorm</li>
                <li>Sublime Text 2+</li>
                <li>Google Chrome</li>
                <li>Sequel Pro</li>
                <li>Sublime Text</li>
                <li>Vagrant</li>
                <li>Laravel/Homestead 2+</li>
                <li>Dash</li>
                <li>SourceTree</li>
                <li>Docker</li>
                <li>Git</li>
                <li>iTerm2/Oh-My-ZSH</li>
            </ul>
        </div>
    </div>
@stop
