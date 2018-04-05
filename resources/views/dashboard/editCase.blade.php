@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">



                <div class="panel-heading">edit Case</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/updateCase/{{$case->id}}" enctype="multipart/form-data">
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
                            <label for="title" class="col-md-4 control-label">First name Image</label>

                            <div class="col-md-6">
                                <input id="title" type="file" class="form-control" name="FirstnameImage"  autofocus>

                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Industry" class="col-md-4 control-label">Industry</label>

                            <div class="col-md-6">

                               <input id="Industry" type="text" value="{{$case->Industry}}" class="form-control" name="Industry"  autofocus>
                        
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ResultsEamil" class="col-md-4 control-label">ResultsEamil</label>

                            <div class="col-md-6">

                                <input id="ResultsEamil" type="email" value="{{$case->ResultsEamil}}" class="form-control" name="ResultsEamil"  autofocus>
                        
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Lastname" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-6">

                                <input id="Lastname" type="text" value="{{$case->Lastname}}" class="form-control" name="Lastname"  autofocus>
                        
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="KeywordsLink"  class="col-md-4 control-label">KeywordsLink</label>

                            <div class="col-md-6">

                                <input id="KeywordsLink" value="{{$case->KeywordsLink}}" type="text" class="form-control" name="KeywordsLink"  autofocus>
                        
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