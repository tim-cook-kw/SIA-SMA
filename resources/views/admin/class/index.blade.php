@extends('layouts.admin.master')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Kelola Kelas</h1>
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
                'table_id' => 'class-datatable',
                'route_name' => 'datatable.class',
                'columns' => [
                ['header' => 'Kode Kelas'],
                ['header' => 'Nama Kelas'],
                ['header' => 'Guru/Wali Kelas'],
                ['header' => 'Tahun Ajaran'],
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
'modal_id' => 'input-class-modal',
'modal_header' => 'Class',
'inputs' => [
['name' => 'code_class', 'type' => 'text' , 'value' => '', 'header' => 'Kode Kelas', 'label_id' => 'label_code_class'],
['name' => 'class_name', 'type' => 'text' , 'value' => '', 'header' => 'Nama Kelas', 'label_id' => 'label_name_class'],
['name' => 'nama_guru', 'type' => 'text', 'value' => '', 'header' => 'Guru/Wali Kelas', 'label_id' =>
'label_guru_class'],
['name' => 'tahun_ajaran', 'type' => 'year', 'value' => '', 'header' => 'Tahun Ajaran', 'label_id' =>
'label_tahun_class', 'year' => 'tahun_ajaran'],
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
        var table = $('#class-datatable').DataTable();
        $('#input-class-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                if (save_method == "add") url = "{{ route('class.store') }}";
                else url = "class/" + id;

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#input-class-modal form').serialize(),
                    success: function (data) {
                        $('#input-class-modal').modal('hide');
                        table.ajax.reload();
                        Swal.fire(
                            'Good job!',
                            save_method,
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
                return false;
            }
        });
        $("#tahun_ajaran").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-class-modal').modal('show');
        $('#input-class-modal form')[0].reset();
        $('.modal-title').text('Add Class');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-class-modal form')[0].reset();
        $.ajax({
            url: "class/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-class-modal').modal('show');
                $('.modal-title').text('Edit Class');
                $('#id_hidden').val(data.id);
                $('#code_class').val(data.code_class);
                $('#class_name').val(data.class_name);
                $('#nama_guru').val(data.nama_guru);
                $('#tahun_ajaran').val(data.tahun_ajaran);
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
                    url: "class/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#class-datatable").DataTable().ajax.reload();
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
