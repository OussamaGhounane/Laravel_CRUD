<h1>About us</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente rerum tempora esse impedit labore? Omnis tempora, eius ex, harum nesciunt consequatur culpa, molestiae tempore perferendis quisquam aperiam aliquid nihil!</p>
<ul>
    @foreach($names as $name)
    <li>{{$name}}</li>
    @endforeach
</ul>

<a href="{{route('route_contact')}}">Aller au contact</a>