<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>


<ul data-orbit data-options="timer: false; animation: fade; resume_on_mouseout: true; stack_on_small: false; navigation_arrows: false; slide_number: false; bullets: false;">
    <li id="orbit-first-slide">
        <div class="row">
            <div class="small-12 columns">
                <h2 class="title">Help. Live. Dream.</h2>
                <p class="subtitle">We help build lives and dreams of Filipino PWDs.</p>
            </div>
        </div>
    </li>
    <!--
    <li>
        <div class="row">
            <div class="small-12 columns">
                <h1 class="title">Heading 2</h1>
                <p class="subtitle">Necessitatibus, illo, veritatis voluptatum nam quaerat delectus eaque magni optio.</p>
            </div>
        </div>
    </li>
    <li>
        <div class="row">
            <div class="small-12 columns">
                <h1 class="title">Heading 3</h1>
                <p class="subtitle">Inventore nesciunt ea accusamus blanditiis quia perferendis illo soluta animi eum.</p>
            </div>
        </div>
    </li>-->
</ul>

<div class="full red">
    <div class="row">
        <div class="small-12 columns">
            <h3>Are you a Filipino PWD looking for a job? We can help you out.</h3>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-8 columns">
            <p>We strive to help Filipino PWDs to find work. Click here to add yourself to our database which allows us to help you land a suitable job.</p>
        </div>
        <div class="small-12 large-4 columns">
            <a href="<?=$assets;?>application:form" class="button-custom dark-red expand">Get Started</a>
        </div>
    </div>
</div>

<div class="row service-section">
    <h3>What we do.</h3>

    <div class="small-12 large-4 columns">
        <div class="circle-border">
            <i class="icon-user"></i>
        </div>
        <h4>Community-Based Rehabilitation</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, rerum, ipsam, aliquid sunt quia nulla tenetur provident voluptatem commodi aperiam corrupti ratione eos corporis porro assumenda sed dolores voluptatum nemo.</p>
    </div>
    <div class="small-12 large-4 columns">
        <div class="circle-border">
            <i class="icon-pencil"></i>
        </div>
        <h4>Education Training</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, necessitatibus, corporis, nesciunt, voluptas minima doloremque assumenda aut accusantium ab quisquam quibusdam quia qui reprehenderit deleniti soluta pariatur expedita sunt officiis.</p>
    </div>
    <div class="small-12 large-4 columns">
        <div class="circle-border">
            <i class="icon-plus-sign-alt"></i>
        </div>
        <h4>Physical Therapy</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, itaque obcaecati quia voluptas optio voluptatem sed a facilis similique earum? Placeat necessitatibus eius soluta explicabo ex alias expedita impedit voluptatum.</p>
    </div>
</div>

<div class="full grey">
    <div class="row partners-section">
        <div class="small-12 large-4 columns">
            <h2>Our Partners</h2>
            <p>Tahanang Walang Hagdanan would like to acknowledge the following companies. Thank you very much!</p>
            <img src="<?=$assets;?>images/partner_03.png" alt="Microsoft">
            <img src="<?=$assets;?>images/partner_05.png" alt="Softros">
        </div>
        <div class="small-12 large-4 columns">
        <p>
            Diocese of Antipolo<br>
            PhilDev<br>
            House with no steps Australia<br>
            <br>
            <strong>CBR PROGRAM</strong><br>
            CBM<br>
            Local Government Units of Rizal<br>
            CBR Volunteers and workers<br>
            <br>
            <strong>MEDICAL PROGRAM</strong><br>
            Recources for the blind, Inc.<br>
            Foundation for Sight<br>
            Medical City<br>
            Quirino Memorial Hospital<br>
            Philipine Othropedic Center<br>
            Our Lady of Peace<br>
            NORDOFF<br>
            PCSO<br>
            Cainta Municipal Health Office<br>
            </p>
        </div>
        <div class="small-12 large-4 columns">
        <p>
            <strong>EDUCATION PROGRAM</strong><br>
            Assissi Development Foundation, Inc<br>
            ERDA Foundation<br>
            Cainta Catholic College<br>
            CARITAS Manila<br>
            JPIC Education Program Of Sanctuario De San Antonio<br>
            Marick Elementary School<br>
            NOH-School For Crippled Children<br>
            House With No Steps Foundation<br>
            ANZAN Mental Arithmetic<br>
            <br>
            <strong>MOBILITY AID ASSISTANCE</strong><br>
            PCSO<br>
            Latter Day Saints Charities Welfare Services<br>
            </p>
        </div>
    </div>
</div>
