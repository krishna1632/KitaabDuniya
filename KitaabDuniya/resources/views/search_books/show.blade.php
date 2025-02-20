<div class="container mt-5">
    @foreach ($allBooks as $book)
        <div class="row mb-4">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <img src="{{ $book->photos ?? asset('default-book.jpg') }}" class="card-img-top p-3 rounded"
                        alt="Book Image">
                </div>
            </div>

            <div class="col-md-7">
                <div class="card p-4 shadow-lg">
                    <h2 class="text-primary">{{ $book->name }}</h2>
                    <p class="text-muted"><strong>Category:</strong> {{ ucfirst($book->type) }}</p>

                    <!-- Author (optional) -->
                    @if (isset($book->author))
                        <p><strong>Author:</strong> <span class="text-dark">{{ $book->author ?? 'N/A' }}</span></p>
                    @endif

                    <!-- Price -->
                    <p><strong>Price:</strong> <span class="text-danger fs-4">₹{{ $book->price ?? 'N/A' }}</span></p>

                    <!-- Description -->
                    <p class="text-secondary"><strong>Description:</strong>
                        {{ $book->description ?? 'No description available.' }}</p>

                    <!-- Extra fields based on table -->
                    @if ($book->type === 'school')
                        <p><strong>Class:</strong> {{ $book->class ?? 'N/A' }}</p>
                        <p><strong>Board:</strong> {{ $book->board ?? 'N/A' }}</p>
                    @elseif($book->type === 'graduation')
                        <p><strong>Semester:</strong> {{ $book->semester ?? 'N/A' }}</p>
                        <p><strong>University:</strong> {{ $book->university ?? 'N/A' }}</p>
                    @elseif($book->type === 'competitive')
                        <p><strong>Exam:</strong> {{ $book->exam ?? 'N/A' }}</p>
                    @endif

                    <!-- Sold status -->
                    <p><strong>Status:</strong>
                        @if ($book->is_sold)
                            <span class="badge bg-danger">Sold</span>
                        @else
                            <span class="badge bg-success">Available</span>
                        @endif
                    </p>

                    <!-- Action buttons -->
                    <div class="mt-4">
                        <button class="btn btn-success btn-lg me-2"><i class="fas fa-shopping-cart"></i> Add to
                            Cart</button>
                        <button class="btn btn-primary btn-lg"><i class="fas fa-bolt"></i> Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<style>
    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-img-top {
        max-height: 300px;
        object-fit: contain;
        background: #f8f9fa;
    }

    .btn-lg {
        padding: 12px 20px;
        font-size: 18px;
    }

    .text-muted {
        font-size: 16px;
    }
</style>
