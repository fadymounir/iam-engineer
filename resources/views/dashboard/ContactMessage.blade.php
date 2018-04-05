@extends('layouts.app')

@section('content')



<div class="Case">
    <div class="container">

        <div class="row">

            <div class="col-md-7">
                <div class="title">
                    <h2>Contact Message </h2>

                </div>


            </div>
        </div>


        <div class="container">
            <div class="table-responsive">
              

                @if(count($ContactMessage) == 0)

                    <div class="alert alert-info" role="alert">No ContactMessage  available now</div>

                @else


                <table class="table table-bordered text-center table-responsive">
                    <thead>
                        <tr>
                            <th>TalkAbout</th>
                            <th>TalkAboutSpecify</th>
                            <th>email</th>
                            <th>websiteLink</th>
                            <th>name</th>
                            <th>code</th>
                            <th>controller</th>
                        </tr>
                    </thead>
                    <tbody>
                  


                    @foreach($ContactMessage as $case)
                       <tr>
                          
                           <td>{{$case->TalkAbout}}</td>
                           <td>{{$case->TalkAboutSpecify}}</td>
                           <td>{{$case->email}}</td>
                           <th><a href="{{$case->websiteLink}}">ClicK Me</a></th>
                           <th>{{$case->name}}</th>
                           <th>{{$case->code}}</th>
                            <td> 
                                 <a href="/DeleteMessage/{{$case->id}}" class="label label-danger">Delete</a>
                            </td>


                       </tr>

                    @endforeach

                
                      

                    </tbody>
                </table>
                    {{ $ContactMessage->links() }}
                @endif


            </div>
        </div>
    </div>
</div>



@endsection