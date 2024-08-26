
<div id="form-2">
    <br>
    <h4 class="py-3"><u>{{ $yearone->merk }} {{ $yearone->model }}</u></h4>
    <h4 class="py-3">Pilih Tahun</h4>
    <div class="row">
        @foreach ($year as $m)
        <div class="col-6 justify-content-center">
            <button id="form-3-{{ $m->tahun }}" onclick="OnOptionClick(this)" data-merk="{{ $m->merk }}" data-year="{{ $m->tahun }}" data-model="{{ $m->model }}" type="button" class="btn btn-light btn-style btn-form-2 btn-frm-2"><b>{{ $m->tahun }}</b></button>
        </div>
        @endforeach
</div>
