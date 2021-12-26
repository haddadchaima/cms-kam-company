<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar navbar navbar-expand-lg">	  
<div class="container">
<a class="navbar-brand waves-effect" href="{{route('index.store')}}">
<strong class="blue-text">D'luxxis</strong>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main_nav">
<ul class="navbar-nav">
@foreach($Pages as $post)
<li class="nav-item">
<a class="nav-link" href="{{ $post->url }}">{{ $post->name }}</a>
</li>
@endforeach
</ul>							
</div>
</div>
</nav>