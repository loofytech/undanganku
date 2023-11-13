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
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Lengkap Pria</label>
                    <input type="text" id="male_name" class="form-control" autocomplete="off">
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
                <div class="d-flex flex-column gap-1">
                    <label for="" class="fw-semibold">Nama Lengkap Wanita</label>
                    <input type="text" id="female_name" class="form-control" autocomplete="off">
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
                    <label for="" class="fw-semibold">Foto</label>
                    <div class="d-flex flex-wrap gap-2" id="foto-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="button" id="submit" class="btn btn-primary">Submit Data</button>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
<script>
    let fotoWrapper = $("#foto-wrapper");
    if (fotoWrapper.length > 0) {
        let iter = 6;
        for (let index = 0; index < iter; index++) {
            fotoWrapper.append(`
                <div class="d-flex justify-content-center align-items-center" style="border: 4px dashed #d9dee3; width: 200px; height: 200px">
                    <i class='bx bx-plus' style="font-size: 48px"></i>
                </div>
            `);
        }
    }

    new Cleave('#akad_date', {date: true, delimiter: '-', datePattern: ['Y', 'm', 'd']});
    new Cleave('#resepsi_date', {date: true, delimiter: '-', datePattern: ['Y', 'm', 'd']});

    new Cleave('#akad_time', {time: true, timePattern: ['h', 'm']});
    new Cleave('#resepsi_time', {time: true, timePattern: ['h', 'm']});

    $("#submit").click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('pengguna.store') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                male_name: $("#male_name").val(),
                male_alias: $("#male_alias").val(),
                male_father: $("#male_father").val(),
                male_mother: $("#male_mother").val(),
                female_name: $("#female_name").val(),
                female_alias: $("#female_alias").val(),
                female_father: $("#female_father").val(),
                female_mother: $("#female_mother").val(),
                akad_date: $("#akad_date").val() + " " + $("#akad_time").val(),
                akad_place: $("#akad_place").val(),
                resepsi_date: $("#resepsi_date").val() + " " + $("#resepsi_time").val(),
                resepsi_place: $("#resepsi_place").val(),
                male_contact: $("#male_contact").val(),
                male_ig: $("#male_ig").val(),
                female_contact: $("#female_contact").val(),
                female_ig: $("#female_ig").val(),
                backsound_link: $("#backsound_link").val()
            },
            success: function() {
                return location.href = "/admin/pengguna";
            },
            error: function(e) {}
        });
    });
</script>
@endpush