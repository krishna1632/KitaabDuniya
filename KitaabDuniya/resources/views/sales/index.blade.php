<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Sold Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #343a40;
            font-weight: bold;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table th {
            background: #343a40 !important;
            color: white;
        }

        .badge {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">📚 My Sold Books</h2>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if ($books->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center text-muted">No books available.</td>
                    </tr>
                @else --}}
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->name }}</td>
                        <td>
                            @if ($book instanceof \App\Models\School)
                                <span class="badge bg-primary">School</span>
                            @elseif($book instanceof \App\Models\General)
                                <span class="badge bg-secondary">General</span>
                            @elseif($book instanceof \App\Models\Graduation)
                                <span class="badge bg-info">Graduation</span>
                            @elseif($book instanceof \App\Models\Competitive)
                                <span class="badge bg-warning text-dark">Competitive</span>
                            @else
                                <span class="badge bg-light text-dark">Unknown</span>
                            @endif
                        </td>
                        <td>₹{{ number_format($book->price, 2) }}</td>
                        <td>
                            @if ($book->is_sold == 1)
                                <span class="badge bg-success">✅ Sold</span>
                            @else
                                <span class="badge bg-danger">❌ Still not sold</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                {{-- @endif --}}
            </tbody>
        </table>
    </div>
</body>

</html>
