@extends('website.layouts')
@section('title','case Studies')
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
                        </tr>
                    </thead>
                    <tbody>
                  


                   	@foreach($cases as $case)
                       <tr>
                           <td><img class="img-responsive" src="{{$case->FirstnameImage}}"></td>
                           <td>{{$case->Industry}}</td>
                           <td>{{$case->ResultsEamil}}</td>
                           <td>{{$case->Lastname}}</td>
                           <td>
                           			<a href="{{$case->KeywordsLink}}">
                           				<img class="img-responsive o" src="{{Request::root()}}/here.png"></a></td>

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