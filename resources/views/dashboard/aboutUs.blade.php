@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">



                <div class="panel-heading">About US Mangement</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/updateAboutUs" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            @if ($errors)
                                        @foreach ($errors as $error)
                                            
                        <div class="row text-center">
                            <div class="alert alert-danger alert-dismissible col-md-offset-4 col-md-6 " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-times-circle"></i> {{ $error   }}</div>
                         </div>   
                            @endforeach


                            @endif

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">About US(content)</label>

                            <div class="col-md-6">
                              <textarea id="content" class="form-control" name="content" >
                                  {{$appsetting->aboutUs}}  </textarea>                            
                            </div>
                        </div>






                        <div class="form-group">
                        <label for="KeywordsLink"  class="col-md-4 control-label">About US (iframe youtupe Video Link)</label>

                            <div class="col-md-6">

                                <input id="KeywordsLink" value="   {{$appsetting->aboutUsVideo}}"  type="text" class="form-control" name="aboutUsVideo"  autofocus>
                        
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