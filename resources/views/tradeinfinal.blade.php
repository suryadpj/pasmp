@php
    $pricemin = number_format($price->harga_min,0);
    $pricemax = number_format($price->harga_max,0);
@endphp
<br>
<br>
<div class="col">
    <h2 class=""><b> {{ $price->merk }} {{ $price->model }}</b></h2>
    <h3 class="">
        {{ $price->type }} -
        @if ($price->transmisi == 1)
            MT
        @else
            AT
        @endif
         Tahun {{ $price->tahun }}
    </h3>
    <br>
    <div class="price-estimate pb-2 pt-3 px-3 mb-3">
        <h2 class="color-blue"><b>Rp {{ $pricemin }} - Rp {{ $pricemax }}</b></h2>
    </div>
</div>
