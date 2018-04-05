@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">



                <div class="panel-heading">add Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/insert_post">
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
                            <label for="title" class="col-md-4 control-label">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"  required autofocus>

                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">content</label>

                            <div class="col-md-6">

                            	<textarea id="termOfUse" class="form-control" name="content" >
                            		</textarea>
                        
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