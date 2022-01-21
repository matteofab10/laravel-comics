<header>
  <div class="container">
    <img src="{{asset('/img/dc-logo.png')}}" alt="dc-logo">
    <ul>
      @foreach ($nav as $link)
      <li><a> {{ $link['text'] }} </a></li> 
      @endforeach
    </ul>
  </div>
</header>