@extends('layouts.app')
@section('pengguna', 'active')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Form Mempelai</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex flex-column gap-3 mb-3">
                <div class="d-flex col-md-6 col-sm-12 gap-3 w-100">
                    <div class="d-flex flex-column gap-1 w-50">
                        <label for="" class="fw-semibold">Anak Keberapa</label>
                        <select class="form-control" id="male_children_to">
                            <option value="Pertama">Pertama</option>
                            <option value="Kedua">Kedua</option>
                            <option value="Ketiga">Ketiga</option>
                            <option value="Keempat">Keempat</option>
                            <option value="Kelima">Kelima</option>
                            <option value="Keenam">Keenam</option>
                            <option value="Ketujuh">Ketujuh</option>
                            <option value="Kedelapan">Kedelapan</option>
                            <option value="Kesembilan">Kesembilan</option>
                            <option value="Kesepuluh">Kesepuluh</option>
                            <option value="Kesebelas">Kesebelas</option>
                            <option value="Keduabelas">Keduabelas</option>
                            <option value="Ketigabelas">Ketigabelas</option>
                            <option value="Keempatbelas">Keempatbelas</option>
                            <option value="Kelimabelas">Kelimabelas</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Nama Lengkap Pria</label>
                        <input type="text" id="male_name" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Panggilan Pria</label>
                    <input type="text" id="male_alias" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Bapak Pria</label>
                    <input type="text" id="male_father" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Ibu Pria</label>
                    <input type="text" id="male_mother" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex flex-column gap-3 mb-3">
                <div class="d-flex col-md-6 col-sm-12 gap-3 w-100">
                    <div class="d-flex flex-column gap-1 w-50">
                        <label for="" class="fw-semibold">Anak Keberapa</label>
                        <select class="form-control" id="female_children_to">
                            <option value="Pertama">Pertama</option>
                            <option value="Kedua">Kedua</option>
                            <option value="Ketiga">Ketiga</option>
                            <option value="Keempat">Keempat</option>
                            <option value="Kelima">Kelima</option>
                            <option value="Keenam">Keenam</option>
                            <option value="Ketujuh">Ketujuh</option>
                            <option value="Kedelapan">Kedelapan</option>
                            <option value="Kesembilan">Kesembilan</option>
                            <option value="Kesepuluh">Kesepuluh</option>
                            <option value="Kesebelas">Kesebelas</option>
                            <option value="Keduabelas">Keduabelas</option>
                            <option value="Ketigabelas">Ketigabelas</option>
                            <option value="Keempatbelas">Keempatbelas</option>
                            <option value="Kelimabelas">Kelimabelas</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Nama Lengkap Wanita</label>
                        <input type="text" id="female_name" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Panggilan Wanita</label>
                    <input type="text" id="female_alias" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Bapak Wanita</label>
                    <input type="text" id="female_father" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Ibu Wanita</label>
                    <input type="text" id="female_mother" class="form-control" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="d-flex gap-3 mb-3">
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Tanggal Akad</label>
                        <input type="text" id="akad_date" class="form-control" autocomplete="off" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Waktu Akad</label>
                        <input type="text" id="akad_time" class="form-control" autocomplete="off" placeholder="HH:MM">
                    </div>
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Tempat/Alamat Akad</label>
                    <textarea name="" id="akad_place" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="d-flex gap-3 mb-3">
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Tanggal Resepsi</label>
                        <input type="text" id="resepsi_date" class="form-control" autocomplete="off" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="d-flex flex-column gap-1 w-100">
                        <label for="" class="fw-semibold">Waktu Resepsi</label>
                        <input type="text" id="resepsi_time" class="form-control" autocomplete="off" placeholder="HH:MM">
                    </div>
                </div>
                <div class="d-flex flex-column gap-1 mb-3">
                    <label for="" class="fw-semibold">Tempat/Alamat Resepsi</label>
                    <textarea name="" id="resepsi_place" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex flex-column gap-3 mb-3">
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">No. Whatsapp Pria</label>
                    <input type="text" id="male_contact" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Akun Instagram Pria</label>
                    <input type="text" id="male_ig" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex flex-column gap-3 mb-3">
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">No. Whatsapp Wanita</label>
                    <input type="text" id="female_contact" class="form-control" autocomplete="off">
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Akun Instagram Wanita</label>
                    <input type="text" id="female_ig" class="form-control" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 d-flex flex-column gap-3 mb-3">
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Backsound Link</label>
                    <input type="text" id="backsound_link" class="form-control" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column gap-2">
                    <label for="" class="fw-semibold">Foto <small class="text-danger fw-bold">( *minimal 6 maksimal 12 )</small></label>
                    <div class="d-flex flex-wrap gap-4" id="foto-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="button" id="submit" class="btn btn-primary">Submit Data</button>
        <button type="button" disabled id="submit-disabled" class="d-none d-flex align-items-center gap-2 btn btn-primary">
            Submit Data
            <div class="loader"></div>
        </button>
    </div>
</div>
@endsection

@push('css')
<style>
    .loader {
    width: 30px;
    aspect-ratio: 2;
    --_g: no-repeat radial-gradient(circle closest-side,#fff 90%,#0000);
    background: 
        var(--_g) 0%   50%,
        var(--_g) 50%  50%,
        var(--_g) 100% 50%;
    background-size: calc(100%/3) 50%;
    animation: l3 1s infinite linear;
    }
    @keyframes l3 {
        20%{background-position:0%   0%, 50%  50%,100%  50%}
        40%{background-position:0% 100%, 50%   0%,100%  50%}
        60%{background-position:0%  50%, 50% 100%,100%   0%}
        80%{background-position:0%  50%, 50%  50%,100% 100%}
    }
</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
<script>
    let iter = 12;
    let fotoWrapper = $("#foto-wrapper");

    if (fotoWrapper.length > 0) {
        for (let index = 0; index < iter; index++) {
            fotoWrapper.append(`
                <div class="d-flex flex-column gap-2">
                    <label for="photo-file-${index}" id="photo-${index}" class="position-relative d-flex cursor-pointer justify-content-center align-items-center" style="border: 4px dashed #d9dee3; width: 200px; height: 200px">
                        <i class='bx bx-plus' style="font-size: 48px"></i>
                        <input type="file" onchange="showPhoto(${index})" id="photo-file-${index}" style="display: none" />
                        <img src="" id="photo-view-${index}" class="position-absolute w-100 h-100 d-none" style="object-fit: cover" />
                    </label>
                    <select class="form-control" id="option-photo-${index}">
                        <option value="">Pilih penempatan</option>
                        <option value="cover">Cover</option>
                        <option value="slide1">Slide Pertama</option>
                        <option value="slide2">Slide Kedua</option>
                        <option value="mempelai-pria">Mempelai Pria</option>
                        <option value="mempelai-wanita">Mempelai Wanita</option>
                        <option value="akad">Akad</option>
                        <option value="resepsi">Resepsi</option>
                    </select>
                </div>
            `);
        }
    }

    function showPhoto(indexData) {
        const selector = document.querySelector(`#photo-file-${indexData}`);
        if (selector) {
            const fileList = selector.files[0];
            if (["image/jpeg", "image/jpg", "image/png"].includes(fileList.type)) {
                const imgPreview = document.querySelector(`#photo-view-${indexData}`);
                if (imgPreview) {
                    const reader = new FileReader();
                    reader.addEventListener("load", (event) => {
                        imgPreview.src = event.target.result;
                    });
                    imgPreview.classList.remove("d-none");
                    return reader.readAsDataURL(fileList);
                }
            }
        }
    }

    new Cleave('#akad_date', {date: true, delimiter: '-', datePattern: ['Y', 'm', 'd']});
    new Cleave('#resepsi_date', {date: true, delimiter: '-', datePattern: ['Y', 'm', 'd']});

    new Cleave('#akad_time', {time: true, timePattern: ['h', 'm']});
    new Cleave('#resepsi_time', {time: true, timePattern: ['h', 'm']});

    $("#submit").click(function(e) {
        e.preventDefault();
        $("#submit").addClass("d-none");
        $("#submit-disabled").removeClass("d-none");

        let formdata = new FormData();
        formdata.append("_token", "{{ csrf_token() }}");
        formdata.append("male_children_to", $("#male_children_to").val());
        formdata.append("male_name", $("#male_name").val());
        formdata.append("male_alias", $("#male_alias").val());
        formdata.append("male_father", $("#male_father").val());
        formdata.append("male_mother", $("#male_mother").val());
        formdata.append("female_children_to", $("#female_children_to").val());
        formdata.append("female_name", $("#female_name").val());
        formdata.append("female_alias", $("#female_alias").val());
        formdata.append("female_father", $("#female_father").val());
        formdata.append("female_mother", $("#female_mother").val());
        formdata.append("akad_date", $("#akad_date").val() + " " + $("#akad_time").val());
        formdata.append("akad_place", $("#akad_place").val());
        formdata.append("resepsi_date", $("#resepsi_date").val() + " " + $("#resepsi_time").val());
        formdata.append("resepsi_place", $("#resepsi_place").val());
        formdata.append("male_contact", $("#male_contact").val());
        formdata.append("male_ig", $("#male_ig").val());
        formdata.append("female_contact", $("#female_contact").val());
        formdata.append("female_ig", $("#female_ig").val());
        formdata.append("backsound_link", $("#backsound_link").val());
        for (let index = 0; index < 12; index++) {
            if ($(`#photo-file-${index}`).val()) {
                formdata.append("photos[]", $(`#photo-file-${index}`).prop("files")[0]);
                formdata.append("labels[]", $(`#option-photo-${index}`).val());
            }
        }

        $.ajax({
            url: "{{ route('pengguna.store') }}",
            type: "POST",
            data: formdata,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
                return location.href = "/admin/pengguna";
            },
            error: function(e) {
                console.log(e);
                $("#submit").removeClass("d-none");
                $("#submit-disabled").addClass("d-none");
            }
        });
    });
</script>
@endpush