<x-layout>
    <section class="s-content">
        <div class="row masonry-wrap">
            <div class="masonry">
                <div class="grid-sizer"></div>
        @foreach ($orders as $order)
            <x-order_card :order="$order" />
        @endforeach
        </div>
        </div>
    </div>
</section>
    <x-footer />
</x-layout>
