<div id="form-1" class="">
    <center>
    <h4 class="py-3">Merk Mobil</h4>
        <div class="m-3 ">
            <div class="input-group">
                <input name="keywords" class="search-form" type="text"
                    placeholder="Cari Merk Mobil" id="search" onkeyup="OnChangeSearchCarModel(this)" />
                    <div>

                    </div>
            </div>
        </div>
        <div class="row">
            @foreach ($merk as $m)
                <div class="col-6 justify-content-center car-merk-options">
                    <button id="form-1-{{ $m->merk }}" onclick="OnOptionClick(this)" data-merk="{{ $m->merk }}" type="button" class="btn btn-light btn-style btn-frm-2 btn-form-2"><b>{{ $m->merk }}</b></button>
                    <br>
                    <br>
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
        console.log('search')
        var searchCarModelValue = el.value;
        var carModelOptions = document.querySelectorAll('.car-merk-options');

        if(searchCarModelValue != null) {

            for (let index = 0; index < carModelOptions.length; index++) {
                const element = carModelOptions[index];

                var regex = new RegExp(searchCarModelValue, 'i');

                if(element.textContent.match(regex)) {
                    console.log('sesuai')
                    element;
                    element.classList.remove('d-none');
                } else {
                    console.log('tidak sesuai')
                    element.classList.add('d-none');
                }

            }
        }

        if(searchCarModelValue == '') {
            for (let index = 0; index < carModelOptions.length; index++) {
                const element = carModelOptions[index];

                element.classList.remove('hide');

            }
        }
    }
</script>
