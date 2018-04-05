@extends('website.layouts')
@section('title','About Us')
@section('content')


    <div class="about">
        <div class="container">
            <div class="title">

                <div class="row">
                    <div class="col-md-6">
                        <h2>about us </h2>
                        <div class="explain">
                            <p>{{$info->aboutUs}}</p>
                            <p> {!!html_entity_decode($video)!!}</p>
                            

                   
                        
                        </div>
                        <p>Video About Campany</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{Request::root()}}/website/images/bo.png">
                    </div>

                </div>


            </div>
            <p><span>Support –</span> It’s helpful to have someone outside your organisation to assist you to achieve your goals. Having someone to share your successes and your problems will focus attention and concentration on the right activity for your
                business.
                <span> << Vision : Values : Mission : Goals>></span>

            </p>

            <p><span>Perspective – </span> – We can give you a different point of view on your progress and challenges. Discussing a problem with another person, in confidence, can give you fresh ideas and help you find a solution. &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                <span> << Planning>></span>


            </p>
            <p><span>Accountability –</span> Someone to ask what you are Someone to ask what you are doing and why you are doing it will add a new level of focus to your business, and will help you understand what you have achieved so far, and what to do
                next. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp;&nbsp;
                <span><< Build on your strengths>>
</span>


                <p>We like to think we're a bit different from the average consultant. For a start we know how to communicate well with business owner - managers, to understand their needs and deliver practical advice.</p>

            </p>

            <p>We also feel you might not want to hear fancy management speak, you just want to know how to apply best practice to your individual situation. That's what sets us apart from our competitors: we listen, we advise and then we help you implement
                a solution. </p>

            <p>&nbsp;</p>

            <p><b></b>Thank you for visiting our site please take a look at some of the <a href="/case_studeis" target="_blank" title="Business Case Studies">case studies</a> we’ve delivered over past few years. If you're still unsure about what
                Consultants Online can do for you then book a free 15 minute video chat <a href="{{$info->aboutUsVideo}}" target="_blank" title="Free First Meeting"><b>http://j.mp/Free_1st_Meeting</b></a> </p>
            <p>Consultants Online is a trading name of GreyMatter Strategy and Innovation Limited, registered in England, company number 5664434. Registered office address:&nbsp; 44 Llwyn-Y-Grant Road. Penylan, Cardiff, CF23 9HL</p>
        </div>
    </div>




@endsection

