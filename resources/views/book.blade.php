@extends('template.template')

@section('content')

<div class="container-fluid py-4">
	<button class="btn btn-primary" id="btn-add"> <i class="bi bi-plus-lg"></i> Add Book </button>

	<hr>

	@foreach($books as $book)
	<div class="card my-3">
		<div class="card-body p-3">
			<div class="row">
				<div class="col-8">
					<div class="numbers">
						<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $book->book_name }}</p>
						<h5 class="font-weight-bolder mb-0">
							{{ $book->writer }}
						</h5>
					</div>
				</div>
				<div class="col-4 text-end">
					<div class="btn-group">
						<button class="btn btn-warning btn-edit" data-id="{{ $book->id_book }}"> <i class="bi bi-pencil"></i> </button>
						<button class="btn btn-danger btn-delete" data-id="{{ $book->id_book }}"> <i class="bi bi-trash"></i> </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="modal-add-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-add-label">Add Book</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="/books/save/0" method="post" id="form-add">
					@csrf
					<div class="mb-3">
						<label for="add-category" class="form-label">Category</label>
						<select class="form-select" id="add-category" name="category_id">
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{ $category->id_category }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label for="add-book-name" class="form-label">Book Name</label>
						<input type="text" class="form-control" id="add-book-name" name="book_name">
					</div>
					<div class="mb-3">
						<label for="add-book-desc" class="form-label">Book Description</label>
						<textarea class="form-control" id="add-book-desc" name="book_desc" rows="3"></textarea>
					</div>
					<div class="mb-3">
						<label for="add-isbn" class="form-label">ISBN</label>
						<input type="text" class="form-control" id="add-isbn" name="isbn">
					</div>
					<div class="mb-3">
						<label for="add-writer" class="form-label">Writer</label>
						<input type="text" class="form-control" id="add-writer" name="writer">
					</div>
					<div class="mb-3">
						<label for="add-publisher" class="form-label">Publisher</label>
						<input type="text" class="form-control" id="add-publisher" name="publisher">
					</div>
					<div class="mb-3">
						<label for="add-published-date" class="form-label">Published Date</label>
						<input type="date" class="form-control" id="add-published-date" name="published_date">
					</div>
					<div class="mb-3">
						<label for="add-pages" class="form-label">Pages</label>
						<input type="number" class="form-control" id="add-pages" name="pages">
					</div>
					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary" onclick="$('#form-add').submit()">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-edit-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-edit-label">Edit Book</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="/books/save/0" method="post" id="form-edit">
					@csrf
					<div class="mb-3">
						<label for="edit-category" class="form-label">Category</label>
						<select class="form-select" id="edit-category" name="category_id">
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{ $category->id_category }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label for="edit-book-name" class="form-label">Book Name</label>
						<input type="text" class="form-control" id="edit-book-name" name="book_name">
					</div>
					<div class="mb-3">
						<label for="edit-book-desc" class="form-label">Book Description</label>
						<textarea class="form-control" id="edit-book-desc" name="book_desc" rows="3"></textarea>
					</div>
					<div class="mb-3">
						<label for="edit-isbn" class="form-label">ISBN</label>
						<input type="text" class="form-control" id="edit-isbn" name="isbn">
					</div>
					<div class="mb-3">
						<label for="edit-writer" class="form-label">Writer</label>
						<input type="text" class="form-control" id="edit-writer" name="writer">
					</div>
					<div class="mb-3">
						<label for="edit-publisher" class="form-label">Publisher</label>
						<input type="text" class="form-control" id="edit-publisher" name="publisher">
					</div>
					<div class="mb-3">
						<label for="edit-published-date" class="form-label">Published Date</label>
						<input type="date" class="form-control" id="edit-published-date" name="published_date">
					</div>
					<div class="mb-3">
						<label for="edit-pages" class="form-label">Pages</label>
						<input type="number" class="form-control" id="edit-pages" name="pages">
					</div>
					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary" onclick="$('#form-edit').submit()">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(function() {
		$(document).on('click', '#btn-add', function() {
			$('#modal-add').modal('show');
		})

		$(document).on('click', '.btn-edit', function() {
			let id = $(this).data('id')

			$('#form-edit').attr('action', '/books/save/' + id);
			$('#modal-edit').modal('show');
		})

		$(document).on('click', '.btn-delete', function() {
			let id = $(this).data('id')

			if (confirm('Are you sure?')) {
				location.href = '/books/delete/' + id
			}
		})
	})
</script>

@endsection