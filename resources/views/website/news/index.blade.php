@extends('website.layouts')
@section('title','news')
@section('content')
	<div class="container">
			<div class="row">
				<div style="margin-bottom: 20px;" class="col-md-12">
						<div class="col-lg-6">
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
						  </div>



						</form>
						</div>
				</div>
			</div>
		<div class="row">
			<div class="col-md-12">
				@if(count($news) == 0)
					<div class="alert alert-info" role="alert">No News With that title</div>
				@else
				@foreach($news as $new)


				<div class="panel panel-default">
					<div class="panel-heading">{{$new->title}}</div>
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






@endsection 