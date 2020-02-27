@extends('parts.template')

@section('content')

<div class="main">
    <section class="products-page">
        <div class="centered-section">
        <form class="search-container" method="get" action="{{ action('HomeController@search') }}">
            <input type='text' name="string">
            <div class="header-right-icon">
                <button type="submit" class="searchButton"><img src="images/icon-search-green.png" alt="icon search"></button>
            </div>
        </form>
            <div class="product-list-container">

            @include('parts.products_sidenav')

            <div class="products-pagination-container">
                <div class="produse-container three-on-row">
                    @foreach($paginator as $product)
                    <div class="produc-item-container">
                    <div class="product-image-container">
                        <a href="">
                        {{ $product['name'] }}
                        </a>
                    </div>
                    </div>
                    @endforeach
                </div>

                {{ $paginator->links() }}
                </div>
            </div>
        </div>
    </section>
</div>

@endsection