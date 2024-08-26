<form id="formtradein" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="merk" value="{{ $transmisione->merk }}">
        <input type="hidden" name="model" value="{{ $transmisione->model }}">
        <input type="hidden" name="year" value="{{ $transmisione->tahun }}">
        <input type="hidden" name="variant" value="{{ $transmisione->type }}">
        <input type="hidden" name="transmition" value="">
<div id="form-4">
    <br>
    <h4 class="py-3"><u>{{ $transmisione->merk }} {{ $transmisione->model }} - {{ $transmisione->tahun }} - {{ $transmisione->type }}</u></h4>
    <h4 class="py-3">Pilih Transmisi</h4>
    <div class="row">
        @foreach ($transmisi as $m)
        <div class="col-6 justify-content-center">
            <button id="form-5-{{ $m->transmisi }}" onclick="OnOptionClick(this)" data-merk="{{ $m->merk }}" data-transmition="{{ $m->transmisi }}" data-variant="{{ $m->type }}" data-year="{{ $m->tahun }}" data-model="{{ $m->model }}" type="button" class="btn btn-light btn-style btn-form-2 btn-frm-2"><b>@if($m->transmisi == 1) MT @else AT @endif</b></button>
        </div>
        @endforeach
    </div>
</div>
</form>

