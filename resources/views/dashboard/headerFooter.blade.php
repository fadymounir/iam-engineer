@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | header&Footer</div>



                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/headerFooter">
                        {{ csrf_field() }}

                            @if ($errors)
                                        @foreach ($errors as $error)
                                            
                        <div class="row text-center">
                            <div class="alert alert-danger alert-dismissible col-md-offset-4 col-md-6 " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-times-circle"></i> {{ $error }}
                            </div>
                         </div>   
                            @endforeach


                            @endif






                        <div class="form-group">
                            <label for="Title" class="col-md-4 control-label">Title of site:</label>

                            <div class="col-md-6">
                                <input id="Title" type="text" class="form-control" name="Title" value="{{$home[0]->title}}" required autofocus>

                       
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="subTitle" class="col-md-4 control-label">subTitle of site:</label>

                            <div class="col-md-6">
                                <input id="subTitle" type="text" class="form-control" name="subTitle" value="{{$home[0]->subtitle}}" required autofocus>

                         
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="homeContent" class="col-md-4 control-label">home Content of site:</label>

                            <div class="col-md-6">
                                <input id="homeContent" type="text" class="form-control" name="homeContent" value="{{$home[0]->content}}" required autofocus>

                           
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Benfits of site:</label>

                            <div class="col-md-6">


                                <textarea id="Benfits" class="form-control" name="Benfits" >{{$appsetting[0]->Benfits}}</textarea>

                          
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="cus" class="col-md-4 control-label">customer say of site:</label>

                            <div class="col-md-6">


                                <textarea id="cus" class="form-control" name="cus" >{{$appsetting[0]->CustomerSay}}</textarea>

                          
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="termOfUse" class="col-md-4 control-label">terms of use in site:</label>

                            <div class="col-md-6">


                                <textarea id="termOfUse" class="form-control" name="termOfUse" >{{$appsetting[0]->termOfUse}}</textarea>

                          
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">facebook Url:</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{$appsetting[0]->facebook_Url}}" required autofocus>

                       
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">twitter Url:</label>

                            <div class="col-md-6">
                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{$appsetting[0]->twitter_Url}}" required autofocus>

                        
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">linkedin Url:</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{$appsetting[0]->linkedin_Url}}" required autofocus>

                      
                            </div>
                        </div>

                       


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
