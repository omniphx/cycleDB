<!-- Blog entry -->
@foreach ($products as $product)

<article>
    <div class="row">
        <div class="col-md-10">
            <h4>
                <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
            </h4>
        </div>
    </div>
</article>
<hr/>
<!-- End of product entry -->
@endforeach

{{ $products->appends(Request::except('page'))->links() }}