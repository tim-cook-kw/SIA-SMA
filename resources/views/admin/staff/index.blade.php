@extends('layouts.admin.master')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Master Staffing</h1>
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
                'table_id' => 'staff-datatable',
                'route_name' => 'datatable.staff',
                'columns' => [
                ['header' => 'Nip'],
                ['header' => 'Nama'],
                ['header' => 'Email'],
                ['header' => 'Tanggal lahir'],
                ['header' => 'Alamat'],
                ['header' => 'Phone'],
                ['header' => 'Gender'],
                ['header' => 'Religion'],
                ['header' => 'Position'],
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
'modal_id' => 'input-staff-modal',
'modal_header' => 'Staff',
'inputs' => [
['name' => 'nip', 'type' => 'text' , 'value' => '', 'header' => 'Nip', 'label_id' => 'label_nip'],
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name'],
['name' => 'email', 'type' => 'email' , 'value' => '', 'header' => 'Email', 'label_id' => 'label_email'],
['name' => 'birth_date', 'type' => 'date', 'value' => '', 'header' => 'Tanggal Lahir', 'label_id' =>
'label_birth_date'],
['name' => 'address', 'type' => 'text' , 'value' => '', 'header' => 'Alamat', 'label_id' => 'label_address'],
['name' => 'phone', 'type' => 'text' , 'value' => '', 'header' => 'Phone', 'label_id' => 'label_phone'],
['name' => 'gender', 'type' => 'text' , 'value' => '', 'header' => 'Gender', 'label_id' => 'label_gender'],
['name' => 'religion', 'type' => 'text' , 'value' => '', 'header' => 'Religion', 'label_id' => 'label_religion'],
['name' => 'position', 'type' => 'text' , 'value' => '', 'header' => 'Position', 'label_id' => 'label_position'],
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
        var table = $('#staff-datatable').DataTable();
        $('#input-staff-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                data = new FormData($("#input-staff-modal form")[0]);
                if (save_method == "add") {
                    // url = "{{ route('staff.store') }}";
                    url = "staff"
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-staff-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Can't save data!");
                        }
                    });
                    return false;
                } else {
                    url = "staff/" + id;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        dataType: 'JSON',
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-staff-modal').modal('hide');
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
        $("#birth_date").datepicker();
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-staff-modal').modal('show');
        $('#input-staff-modal form')[0].reset();
        $('.modal-title').text('Add Staff');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-staff-modal form')[0].reset();
        $.ajax({
            url: "staff/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-staff-modal').modal('show');
                $('.modal-title').text('Edit Staff');
                $('#id_hidden').val(data.id);
                $('#nip').val(data.nip);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#birth_date').val(data.birth_date);
                $('#address').val(data.address);
                $('#phone').val(data.phone);
                $('#gender').val(data.gender);
                $('#religion').val(data.religion);
                $('#position').val(data.position);
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
                    url: "staff/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#staff-datatable").DataTable().ajax.reload();
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
