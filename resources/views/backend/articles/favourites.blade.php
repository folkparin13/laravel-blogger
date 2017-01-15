@extends('layouts.backend')

@section('title', 'Favourite Articles')

@section('content')
<div class="ui segment large">
  {!! Breadcrumbs::render('backend.articles.favourites') !!}
</div><!--end of segment-->

<div class="ui segment teal padded">
<h2>Favourite Articles</h2>

@if($articles)
  <div class="ui relaxed divided list">
	<div class="ui divided items">
	@foreach($articles as $article)

		  <div class="item">
		    <div class="ui tiny image">
		        <a href="{{url('/blog/'.$article->slug)}}">
		          <img class="ui tiny image" src="{{(!empty($article->article_image))? url(config('blogger.filemanager.upload_path').'/'.$article->article_image): url('images/placeholder.gif')}}">
		        </a>
		    </div>
		    <div class="middle aligned content">
	            <a class="header" href="{{url('/blog/'.$article->slug)}}"><h3>{{ $article->title }} </h3></a>
	            <div class="description"><a href="">{{ $article->author_name }}</a> <span class=" item-mute">| {{$article->published_at->diffForHumans()}}</span></div>
	        </div>
		    <div class="middle aligned content right floated">
				<a class="ui right floated tiny primary icon button no-wrap"  href="{{url('/blog/'.$article->slug)}}">
		            <i class="eye icon"></i> Read article
		    	 </a>
			</div>
		  </div>

	@endforeach
	</div>
	</div>
@endif
</div>
@endsection
