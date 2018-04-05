@extends('website.layouts')
@section('title','goseotest')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="frist-p">{{$home->content}}</p>
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span>search</span><br>
                    <form class="form-horizontal" method="POST" action="/search_News">
                        {{ csrf_field() }}
                   

                    <div class="col-md-12">
                          <div class="input-group">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit">search</button>
                        </span>

                       <input id="search" type="text" class="form-control" name="search_key" value="{{ old('search_key') }}" placeholder="search For ....." required autofocus>

                        @if ($errors->has('search_key'))
                            <span class="help-block">
                                <strong>{{ $errors->first('search_key') }}</strong>
                            </span>
                        @endif
                    
                     </div>



                   </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="explain">

             {!!html_entity_decode($video)!!}
                </div>
            
            </div>
        </div>

    </div>
</div>



  <div class="circle text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="strategy.html">
                        <div class="one">
                            <h3>strategy</h3>
                            <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="two">
                        <h3>test</h3>
                        <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="three">
                        <h3>test</h3>
                        <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="four">
                        <h3>test</h3>
                        <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="five">
                        <h3>test</h3>
                        <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <a href="strategy.html">
                        <div class="six">
                            <h3>strategy</h3>
                            <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="strategy.html">
                        <div class="seven">
                            <h3>strategy</h3>
                            <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="strategy.html">
                        <div class="eight">
                            <h3>strategy</h3>
                            <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="strategy.html">
                        <div class="nine">
                            <h3>strategy</h3>
                            <p>Business Consultants that provide fast, cost effective advice to improve sales, profit and operational efficiency.</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection 