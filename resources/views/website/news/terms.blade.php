@extends('website.layouts')
@section('title','terms')
@section('content')



<div class="terms">
    <div class="container">
        <div class="title">

            <div class="row">
                <div class="col-md-12">
                    <h2>Terms of use
                    </h2>
                    <div class="explain">
                        <p>Published on 31 March 2011
                        </p>

                    </div>
                    <p>PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS WEBSITE.</p>
                    <p>By using the Consultants Online World Wide Web site, you agree to follow and be bound by these terms of use and agree to comply with all applicable laws and regulations. <strong>Please do not use this website If you do not agree to the terms of use</strong>.
                        We only use Google Analytics to give you the best experience on our website. If you continue without changing your cookie settings, we'll assume that you are happy to continue. The terms of use may be revised at any time without
                        notice. If you have any questions please contact <a href="mailto:Mike@Consultants-on-Line.com">Mike@Consultants-on-Line.com</a> </p>
                    <div class="start">
                        <p> Payment.Consultants Online Subscription Membership benefits include:</p>
                    </div>
                </div>
                <div class="end">
                    <ol>
                        <li><br>• Unlimited access to the business tools and techniques on the website.
                            <br>•&nbsp; Discussion and action plan with our consultants 3 times per month (20 minute sessions).<br>•&nbsp; Help and advice via email up to four times per month<br>•&nbsp; A monthly bulletin showing new ways of improving
                            the performance of your business<br>•&nbsp; Priority access to consultants to help with special projects (contract separately agreed)</li>
                    </ol>
                </div>
                <div class="container">
                    <p>{{$terms->termOfUse}}</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection 