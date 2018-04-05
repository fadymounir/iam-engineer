@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default" >

                <div class="panel-heading">Dashboard | news Mangeemnt   |    <a href="/Dashboard/NewsMangement/add" class=" btn btn-primary">Add Post</a> </div>



          <div class="row">
            <div class="col-md-12">
                @if(count($news) == 0)
                    <div class="alert alert-info" role="alert">No News With that title</div>
                @else
                @foreach($news as $new)


                <div class="panel panel-default">
                    <div class="panel-heading">{{$new->title}} 
                     <a href="/deletePost/{{$new->id}}">
                        <span class="pull-right label label-danger">delete</span>
                    </a>
                     <a href="/editPost/{{$new->id}}">
                        <span style="margin-right:10px; " class="pull-right label label-primary">edit</span>
                    </a>
                </div>
                  <div class="panel-body">  
                            {{$new->content}}
                  </div>
                  <div class="panel-footer">{{$new->created_at}}</div>
                </div>

                @endforeach
            </div>
                {{ $news->links() }}
                @endif

          </div>


            </div>

        </div>

    </div>
</div>
@endsection
