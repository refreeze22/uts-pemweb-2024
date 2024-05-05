@extends('template.template')

@section('content')

<div class="container-fluid py-4">
    <button class="btn btn-primary" id="btn-add"> <i class="bi bi-plus-lg"></i> Add Category </button>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->category_name }}</td>
                <td>
                    <button class="btn btn-warning btn-edit" data-id="{{ $category->id_category }}" data-name="{{ $category->category_name }}">Edit</button>
                    <button class="btn btn-danger btn-delete" data-id="{{ $category->id_category }}" data-name="{{ $category->category_name }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="modal-addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-addLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/categories/save/0" method="post" id="form-add">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="add-category-name" name="category_name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="$('#form-add').submit()">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-addLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="form-edit">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit-category-name">Category Name</label>
                        <input type="text" class="form-control" id="edit-category-name" name="category_name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="$('#form-edit').submit()">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
        $(document).on('click', '#btn-add', function() {
            $('#modal-add').modal('show');
        })

        $(document).on('click', '.btn-edit', function() {
            let id = $(this).data('id'),
                name = $(this).data('name')

            $('#edit-category-name').val(name)
            $('#form-edit').attr("action", "/categories/save/" + id)
            $('#modal-edit').modal('show');
        })

        $(document).on('click', '.btn-delete', function() {
            let id = $(this).data('id')

            if (confirm('Are you sure?')) {
                location.href = "/categories/delete/" + id
            }
        })
    })
</script>

@endsection