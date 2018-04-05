@extends('layouts.app')

@section('content')



<div class="Case">
    <div class="container">

        <div class="row">

            <div class="col-md-7">
                <div class="title">
                    <h2>Case Studies</h2>

                </div>


            </div>
        </div>


        <div class="container">
            <div class="table-responsive">
                <a href="/addCase" class="btn btn-primary" style="margin-bottom:10px; ">add Case</a>

                @if(count($cases) == 0)

                    <div class="alert alert-info" role="alert">No cases  available now</div>

                @else


                <table class="table table-bordered text-center table-responsive">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Industry</th>
                            <th>Results</th>
                            <th>Lastname</th>
                            <th>Keywords</th>
                            <th>Controller</th>
                        </tr>
                    </thead>
                    <tbody>
                  


                    @foreach($cases as $case)
                       <tr>
                           <td><img class="img-responsive"  style="width: 70px;display: inline-block;
                                    margin-top: 5px;" src="{{$case->FirstnameImage}}"></td>
                           <td>{{$case->Industry}}</td>
                           <td>{{$case->ResultsEamil}}</td>
                           <td>{{$case->Lastname}}</td>
                           <td>
                                    <a href="{{$case->KeywordsLink}}">
                                        <img class="img-responsive o" src="{{Request::root()}}/here.png"></a></td>
                            <td> <a href="/editCase/{{$case->id}}" class="label label-success">Edit</a>
                                 <a href="/DeleteCase/{{$case->id}}" class="label label-danger">Delete</a>
                            </td>


                       </tr>

                    @endforeach

                
                      

                    </tbody>
                </table>
                    {{ $cases->links() }}
                @endif


            </div>
        </div>
    </div>
</div>



@endsection