
<div id="form-3">
    <br>
    <h4 class="py-3"><u>{{ $variantsone->merk }} {{ $variantsone->model }} - {{ $variantsone->tahun }}</u></h4>
    <h4 class="py-3">Pilih Varian</h4>
    <div class="row">
        @foreach ($variants as $m)
        <div class="col-6 justify-content-center">
            <button id="form-4-{{ $m->type }}" onclick="OnOptionClick(this)" data-merk="{{ $m->merk }}" data-variant="{{ $m->type }}" data-year="{{ $m->tahun }}" data-model="{{ $m->model }}" type="button" class="btn btn-light btn-style btn-form-2 btn-frm-2"><b>{{ $m->type }}</b></button>
        </div>
        @endforeach
</div>
