{{-- <div id="main__page__product">
  <div class="row">
    @foreach ($prodimg as $item)
    <div class="card mb-5" style="width: 18rem;">
      <div class="prod__card">
        <img id="{{ $item->id }}" type="button" src="{{ asset("storage/productImg/".$item->img) }}"
          class="card-img-top but__prodinfo" alt="...">
        <div class="card-body title">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{ $item->text  }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item price">
            <strong>Price</strong><span> ${{ $item->price }}<span>
          </li>
        </ul>
        <div class="card-body author">
          <strong>Author</strong><span>{{ $item->after }}</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div> --}}