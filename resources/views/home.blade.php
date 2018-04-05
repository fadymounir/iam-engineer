@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="/Dashboard/headerFooter">Header Footer Mangement</a>
                   <br>
                   <a href="/Dashboard/NewsMangement">News Mangement</a>
                   <br>
                   <a href="/caseStudeis">caseStudeis</a>

                   <br>
                   <a href="/aboutUsMangements">About Us Mangeemnt</a>

                   <br>
                   <a href="/contactUsMangement">contactUs Mangement</a>
                   <br>
                   <a href="/ContactMessage">Contact Message</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
