<main>
  <div class="jumbotron"></div>
  <div class="container heroBox">
    <div class="current-series">current series</div>
    @foreach (config('comics') as $card)
    <div class="product-card">
      <img src="{{$card['thumb']}}" alt="">
      <h3>{{$card['series']}}</h3>
    </div>
    @endforeach
    <div class="btn-series">
      <button>load more</button>
    </div>
  </div>
</main>