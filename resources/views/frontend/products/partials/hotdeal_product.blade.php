<div class="slick-single-layout">
    <div class="row row--15">
        @foreach($products as $product)
        
        <div class="col-lg-3 col-md-3 col-6 mb--30">
            @include('frontend.products.partials.product_section')
        </div>
        @endforeach
    </div>
</div>
