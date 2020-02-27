<div class="products-navigation-container">
  <div class="title">Title</div>
  <ul>
    @foreach($categories as $categ)
      @if($category !== null &&( $category->id == $categ->id) )
        <li class="products-selected-menu-item">
          <a href="list/{{ $categ->id }}">
            <img src="images/icon-arrow-right-green.png" alt="icon arrow right"> {{ $categ->name }}({{ $categ->products_count }})
          </a>
        </li>
      @else
        <li><a href="list/{{ $categ->id }}">{{ $categ->name }}({{ $categ->products_count }})</a></li>
      @endif
    @endforeach
  </ul>
</div>