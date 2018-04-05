@extends('website.layouts')
@section('title','contactUs')
@section('content')






<div class="Contact">
    <div class="container">

    	@if(Session::has('status'))
    	   <div class="alert alert-info text-center">
    	        <h2>
    	     {{Session::get('status')}}
    	        </h2>
    	   </div>
    	   
    	@endif


        <div class="row">

            <div class="col-md-7">
                <div class="title">
                    <h2>Contact Us</h2>

                </div>
                <div class="explain">
                    <div class="parag">
                        <p>You have a project to discuss, that we can help you to implement. </p>
                        <p>You want us to help you achieve your goals.</p>
                        <p>You need some fresh ideas to find solutions.</p>
                        <p>You just want to say "Hi!"Then</p><br>
                    </div>
                    <div class="more">
                        <p>The best and the most comfortable way to contact us is to send an email to:
                        </p><br>
                        <span>{{$info->contactUs_email}}</span><br>
                        <span>or ring us on: {{$info->contactUs_phone}}</span><br><br>

                        <br>
                        <p>If you want to connect on any other social networking sites please follow the links at the bottom of the page.</p><br>
                        <p>or contact me through the form on the right...</p><br>

                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div class="re text-center">
                    <form class="form-horizontal" method="POST" action="/send_message">
                    		{{ csrf_field() }}
                        <div class="col-md-6"> <span> I'd like to talk to you about</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="talkAbout" class="form-control" type="text"><br>
                                    @if ($errors->has('talkAbout'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('talkAbout') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6"> <span> (Please tell us a bit more. Be as specific as you like.):</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="talkAboutSpaecify" class="form-control" rows="5" id="comment"></textarea>
                                   @if ($errors->has('talkAboutSpaecify'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('talkAboutSpaecify') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6"> <span>You can contact me by email at</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control">
                                   @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6"> <span> or visit my website at</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="website" class="form-control" type="text">
                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="col-md-6"> <span>Thank you, my name is</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control">
                                	      @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="col-md-6"> <span>Please enter the code into the box	</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="code" class="form-control">
                                	      @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <button type="Submit" class="btn text-center">Submit</button>
                        <button type="button" class="btn text-center">Cancel</button>

                    </form>

                </div>


            </div>

        </div>


    </div>
</div>

@endsection