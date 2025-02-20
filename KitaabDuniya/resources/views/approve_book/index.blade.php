@extends('layouts.admin')

@section('title', 'All Books - KitabiDuniya')

@section('content')
    <div class="container">
        <h1 class="text-center my-4 text-primary">📚 All Books</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Book Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Uploaded Photos</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp

                    @foreach ($allBooks as $book)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>
                                @if (isset($book->class))
                                    🏫 School
                                @elseif(isset($book->semester))
                                    🎓 Graduation
                                @elseif(isset($book->exam))
                                    🏆 Competitive
                                @else
                                    📖 General
                                @endif
                            </td>
                            <td>{{ $book->name }}</td>
                            <td>
                                @if (isset($book->class))
                                    Class: {{ $book->class }} <br> Board: {{ $book->board }}
                                @elseif(isset($book->semester))
                                    Semester: {{ $book->semester }} <br> University: {{ $book->university }}
                                @elseif(isset($book->exam))
                                    Exam: {{ $book->exam }}
                                @else
                                    Author: {{ $book->author }}
                                @endif
                            </td>
                            <td class="fw-bold text-success">₹{{ $book->price }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#photoModal{{ $book->id }}">
                                    Show Photos
                                </button>

                                <!-- Modal for Photos -->
                                <div class="modal fade" id="photoModal{{ $book->id }}" tabindex="-1"
                                    aria-labelledby="photoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">📸 Book Photos</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                @php
                                                    $photos = json_decode($book->photos);
                                                @endphp
                                                @if ($photos)
                                                    <div id="carousel{{ $book->id }}" class="carousel slide"
                                                        data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            @foreach ($photos as $index => $photo)
                                                                <div
                                                                    class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                    <img src="{{ asset('storage/' . $photo) }}"
                                                                        class="d-block w-100 img-thumbnail"
                                                                        alt="Book Photo">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!-- Carousel Controls -->
                                                        <button class="carousel-control-prev" type="button"
                                                            data-bs-target="#carousel{{ $book->id }}"
                                                            data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button"
                                                            data-bs-target="#carousel{{ $book->id }}"
                                                            data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                @else
                                                    <p class="text-danger">No Images Available</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                            <td>
                                <form
                                    action="{{ route('approve.book', ['id' => $book->id, 'type' => strtolower(class_basename($book))]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm"
                                        {{ $book->status == 1 ? 'disabled' : '' }}>
                                        ✅ Add Book
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Bootstrap (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Error!",
                    text: "{{ session('error') }}",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            });
        </script>
    @endif


@endsection
