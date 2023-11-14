@extends('layouts.app')
@section('pengguna', 'active')

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route("pengguna.create") }}" class="btn btn-primary">Tambah Pengguna</a>
        <div class="mt-3">
            <table id="table" class="w-100 table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px"></th>
                        <th>Nama Pria</th>
                        <th>Ayah Pria</th>
                        <th>Ibu Pria</th>
                        <th>Nama Wanita</th>
                        <th>Ayah Wanita</th>
                        <th>Ibu Wanita</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset("assets/datatables.min.css") }}">
@endpush

@push('js')
<script src="{{ asset("assets/datatables.min.js") }}"></script>
<script>
    let table = $("#table").DataTable({
        serverSide: true,
        processing: true,
        lengthChange: true,
        searching: true,
        info: true,
        order: [],
        pageLength: 10,
        lengthMenu: [10, 20, 50, 100],
        bSort: false,
        oLanguage: {
            "sSearch": '<i class="fa fa-search" aria-hidden="true"></i>',
            "oPaginate": {
                "sPrevious": "Prev"
            }
        },
        dom: `
            <'row'<'col-sm-6'<'flex items-center action_btn gap-2'>><'col-sm-6'f>>
            <'row'<'col-sm-12 my-1'tr>>
            <'row'<'col-sm-6'<'flex items-center gap-2'i>><'col-sm-6'p>>
        `,
        ajax: {
            "url": "{{ route('pengguna.data') }}",
            "type": "GET",
            beforeSend: function() {},
            data: function(d) {},
            error: function(e) {},
            complete: function(response) {},
        },
        columns: [
            {"data": "id", "sortable": false, render: function (data, type, row, meta) {
                return `<div class="cursor-pointer dropdown" style="display: inline-block">
                    <i class='bx bx-dots-vertical-rounded fs-4' data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Detail</a></li>
                        <li><a class="dropdown-item" href="/admin/pengguna/edit/${data}">Update</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>`;
            }},
            {"data": "male_name", "sortable": false, render: function(data, type, row, meta) {
                return data + " <b>(" + row.male_nickname + ")</b>";
            }},
            {"data": "male_father_name", "sortable": false, render: function(data, type, row, meta) {
                return data;
            }},
            {"data": "male_mother_name", "sortable": false, render: function(data, type, row, meta) {
                return data;
            }},
            {"data": "female_name", "sortable": false, render: function(data, type, row, meta) {
                return data + " <b>(" + row.female_nickname + ")</b>";
            }},
            {"data": "female_father_name", "sortable": false, render: function(data, type, row, meta) {
                return data;
            }},
            {"data": "female_mother_name", "sortable": false, render: function(data, type, row, meta) {
                return data;
            }},
        ],
        fnInfoCallback: function( oSettings, iStart, iEnd, iMax, iTotal, sPre ) {
            if (iTotal != 0) {
                return `Menampilkan ${iStart} - ${iEnd} dari total ${iTotal} entries`;
            }
            return `Tidak ada data tersedia di tabel`;
        },
    });
</script>
@endpush