@extends('layouts.admin.master')
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Role</h1>
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
                'table_id' => 'role-datatable',
                'route_name' => 'datatable.role',
                'columns' => [
                ['header' => 'User'],
                ['header' => 'Product'],
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
'modal_id' => 'input-role-modal',
'modal_header' => 'Role',
'inputs' => [
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name_role'],
['name' => 'description', 'type' => 'text', 'value' => '', 'header' => 'Description', 'label_id' =>
'label_description_role'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#role-datatable').DataTable();
        $('#input-role-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                if (save_method == "add") url = "{{ route('role.store') }}";
                else url = "role/" + id;

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#input-role-modal form').serialize(),
                    success: function (data) {
                        $('#input-role-modal').modal('hide');
                        table.ajax.reload();
                    },
                    error: function () {
                        alert("Error!");
                    }
                });
                return false;
            }
        });
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-role-modal').modal('show');
        $('#input-role-modal form')[0].reset();
        $('.modal-title').text('Add Role');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-role-modal form')[0].reset();
        $.ajax({
            url: "role/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-role-modal').modal('show');
                $('.modal-title').text('Edit Role');
                $('#id_hidden').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
            },
            error: function () {
                alert("Tidak dapat menampilkan data!");
            }
        });
    }

    function deleteData(id) {
        if (confirm("Are you sure?")) {
            $.ajax({
                url: "role/" + id,
                type: "POST",
                data: {
                    '_method': 'DELETE',
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function (data) {
                    $("#role-datatable").DataTable().ajax.reload();
                },
                error: function () {
                    alert("Error!");
                }
            });
        }
    }
</script>
@endpush
