@extends('layouts.admin.master')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Master Student</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <button type="button" onclick="addForm()" class="btn btn-success float-right"><i
                        class="fa fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
                {{-- datatable --}}
                @component('components.datatable', [
                'table_id' => 'student-datatable',
                'route_name' => 'datatable.student',
                'columns' => [
                ['header' => 'Nisn'],
                ['header' => 'Nama'],
                ['header' => 'Email'],
                ['header' => 'Tahun Masuk'],
                ['header' => 'Tanggal Lahir'],
                ['header' => 'Alamat'],
                ['header' => 'Asal Sekolah'],
                ['header' => 'Jenis Kelamin'],
                ['header' => 'Foto'],
                ]
                ])
                @endcomponent
                {{-- end datatable --}}
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@component('components.modal', [
'modal_id' => 'input-student-modal',
'modal_header' => 'Student',
'inputs' => [
['name' => 'nis', 'type' => 'text' , 'value' => '', 'header' => 'Nis', 'label_id' => 'label_nis'],
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name'],
['name' => 'email', 'type' => 'email' , 'value' => '', 'header' => 'Email', 'label_id' => 'label_email'],
['name' => 'tahun_masuk', 'type' => 'year', 'value' => '', 'header' => 'Tahun Masuk', 'label_id' =>
'label_tahun_masuk'],
['name' => 'birth_date', 'type' => 'date', 'value' => '', 'header' => 'Tanggal Lahir', 'label_id' =>
'label_birth_date'],
['name' => 'address', 'type' => 'text' , 'value' => '', 'header' => 'Alamat', 'label_id' => 'label_address'],
['name' => 'origin_of_school', 'type' => 'text' , 'value' => '', 'header' => 'Asal Sekolah', 'label_id' => 'label_asal_sekolah'],
['name' => 'phone', 'type' => 'text' , 'value' => '', 'header' => 'Phone', 'label_id' => 'label_phone'],
['name' => 'gender', 'type' => 'text' , 'value' => '', 'header' => 'Gender', 'label_id' => 'label_gender'],
['name' => 'religion', 'type' => 'text' , 'value' => '', 'header' => 'Religion', 'label_id' => 'label_religion'],
['name' => 'image', 'type' => 'file' , 'value' => '', 'header' => 'Image', 'label_id' => 'label_image'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#student-datatable').DataTable();
        $('#input-student-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                data = new FormData($("#input-student-modal form")[0]);
                if (save_method == "add") {
                    // url = "{{ route('student.store') }}";
                    url = "student"
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-student-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Can't save data!");
                        }
                    });
                    return false;
                } else {
                    url = "student/" + id;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        dataType: 'JSON',
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-student-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Error!");
                        }
                    });
                    return false;
                }
            }
        });
        $("#tahun_masuk").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
        $("#birth_date").datepicker();
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-student-modal').modal('show');
        $('#input-student-modal form')[0].reset();
        $('.modal-title').text('Add Student');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-student-modal form')[0].reset();
        $.ajax({
            url: "student/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-student-modal').modal('show');
                $('.modal-title').text('Edit Student');
                $('#id_hidden').val(data.id);
                $('#nis').val(data.nis);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#tahun_masuk').val(data.tahun_masuk);
                $('#birth_date').val(data.birth_date);
                $('#address').val(data.address);
                $('#origin_of_school').val(data.origin_of_school);
                $('#phone').val(data.phone);
                $('#gender').val(data.gender);
                $('#religion').val(data.religion);
                // $('#image').val(data.image);
            },
            error: function () {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                })
            }
        });
    }

    function deleteData(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "student/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#student-datatable").DataTable().ajax.reload();
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function () {
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        })
                    }
                });
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

</script>
@endpush
