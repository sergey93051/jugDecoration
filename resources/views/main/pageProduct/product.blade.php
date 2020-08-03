<div id="main__page__product">
  <div class="row">
    @foreach ($prodimg as $item)
    <div class="card mb-5" style="width: 18rem;">
      <div class="prod__card">
        <img id="{{ $item->id }}" type="button" src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_2)}}'
          class="card-img-top but__prodinfo" alt="...">
        <div class="card-body title">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text price"><strong>Price</strong><span> ${{ $item->price }}<span></p>
          <p class="card-text author"> <strong>Author</strong><span>{{ $item->after }}</span></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>