<div id="form-1" class="">
    <center>
        <h4 class="py-3">Model Mobil</h4>
        <div class="m-3 ">
            <div class="input-group">
                <input name="keywords" class="search-form" type="text" placeholder="Cari Model Mobil" id="search"
                    onkeyup="OnChangeSearchCarModel(this)" />
                <div>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($model as $m)
                <div class="col-6 justify-content-center car-model-options">
                    <button id="form-2-{{ $m->model }}" onclick="OnOptionClick(this)"
                        data-merk="{{ $m->merk }}" data-model="{{ $m->model }}" type="button"
                        class="btn btn-light btn-style btn-frm-2 btn-form-2"><b>{{ $m->model }}</b></button>
                </div>
            @endforeach
        </div>
    </center>
</div>

<script>
    function SearchCarModel(el) {
        OnChangeSearchCarModel(document.getElementById('search'));
    };

    function OnChangeSearchCarModel(el) {
        var searchCarModelValue = el.value;
        var carModelOptions = document.querySelectorAll('.car-model-options');

        if (searchCarModelValue != null) {
            for (let index = 0; index < carModelOptions.length; index++) {
                const element = carModelOptions[index];

                var regex = new RegExp(searchCarModelValue, 'i');

                if (element.textContent.match(regex)) {
                    element;
                    element.classList.remove('d-none');
                } else {
                    element.classList.add('d-none');

                }
            }

            if (searchCarModelValue == '') {
                for (let index = 0; index < carModelOptions.length; index++) {
                    const element = carModelOptions[index];

                    element.classList.remove('hide');

                }
            }
        }
    }
</script>
