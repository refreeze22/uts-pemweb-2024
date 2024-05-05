@extends('template.template')

@section('content')

<div class="container-fluid py-4">
	<button class="btn btn-primary" id="btn-add"> <i class="bi bi-plus-lg"></i> Add Review </button>

	@foreach($reviews as $review)
	<div class="card my-3">
		<div class="card-body p-3">
			<div class="numbers">
				<div class="row">
					<div class="col-1">
						<div class="form-check hidden">
							<input type="checkbox" name="" id="checkbox-{{ $review->id_review }}" class="form-check-input checkbox-select">
							<label for="checkbox-{{ $review->id_review }}" class="form-check-label"></label>
						</div>
						<span class="text-warning c-pointer btn-edit" data-id="{{ $review->id_review }}">
							<i class="bi bi-pencil"></i>
						</span>
						<span class="text-danger c-pointer btn-delete" data-id="{{ $review->id_review }}">
							<i class="bi bi-trash"></i>
						</span>
					</div>
					<div class="col-11">
						<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $review->user_name }}</p>
						<h5 class="font-weight-bolder mb-0">
							{{ $review->book_name }}
						</h5>
					</div>
				</div>
				<hr>
				<div class="row">
					<p class="text-sm col-10 mb-0 text-capitalize font-weight-bold">{{ $review->review }}</p>
					<p class="col-2 text-end">{{ $review->rating }} <small>out of 5</small></p>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-add" method="post" action="/reviews/save/0">
				<div class="modal-body">
						@csrf
						<div class="mb-3">
							<input type="hidden" name="id" value="">
							<label for="select-book" class="form-label">Book</label>
							<select class="form-select" name="id_book" id="select-book" onchange="selectBook()" required>
								<option selected disabled>Choose</option>
								@foreach($books as $book)
								<option value="{{ $book->id_book }}" data-value="{{ $book->book_name }}">{{ $book->book_name }}</option>
								@endforeach
							</select>
							<input type="hidden" name="book_name" id="hidden-book">
						</div>
						<div class="mb-3">
							<label for="rating" class="form-label">Rating</label>
							<select class="form-select" name="rating" required>
								<option selected disabled>Choose</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="input-review" class="form-label">Review</label>
							<textarea class="form-control" name="review" rows="3" required></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" onclick="$('#form-add').submit()">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-rating-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-rating-label">Rate Book</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-edit" method="post">
				<div class="modal-body">
					@csrf
					<div class="mb-3">
						<label for="rating" class="form-label">Rating</label>
						<select class="form-select" name="rating" required>
							<option selected disabled>Choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="input-review" class="form-label">Review</label>
						<textarea class="form-control" name="review" rows="3" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" onclick="$('#form-rating').submit()">Rate</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(function() {
		$(document).on('click', '#btn-add', function() {
			$("#modal-add").modal('show')
		})

		$(document).on('click', '.btn-edit', function() {
			let id = $(this).data('id')

			$("#form-edit").attr("action", "/reviews/save/" + id)
			$("#modal-edit").modal('show')
		})

		$(document).on('click', '.btn-delete', function() {
			let id = $(this).data('id')

			if (confirm('Are you sure?')) location.href = "/reviews/delete/" + id
		})
	})

	function selectBook() {
		var select = document.getElementById('select-book');
		var hiddenInput = document.getElementById('hidden-book');

		var selectedOption = select.options[select.selectedIndex];
		hiddenInput.value = selectedOption.getAttribute('data-value');

		console.log(selectedOption.getAttribute('data-value'));
	}
</script>

@endsection