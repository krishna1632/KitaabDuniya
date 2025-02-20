<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Listing Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f4f4f4;
            font-family: 'Poppins', sans-serif;
        }

        .custom-navbar {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .custom-navbar a {
            font-size: 24px;
            color: #333;
            text-decoration: none;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .form-label {
            font-weight: 600;
            color: #444;
        }

        .btn-submit {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border: none;
            padding: 10px;
            font-size: 18px;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background: linear-gradient(to right, #00f2fe, #4facfe);
        }

        .upload-button {
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            transition: 0.3s;
        }

        .upload-button:hover {
            background: #0056b3;
        }

        #imagePreview {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        #imagePreview img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 3px;
        }

        #fileError {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar custom-navbar">
        <div class="container-fluid">
            <a href="/sell"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </nav>

    <div class="form-container">
        <h2>Book Listing</h2>
        <p class="text-center">School / <a href="/sell">change</a></p>

        <form action="{{ route('schools.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Book Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter book name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Select Class</label>
                <select name="class" class="form-control" required>
                    <option value="">Choose class</option>
                    @for ($i = 1; $i <= 12; $i++)
                        <option>Class {{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Select Board</label>
                <select name="board" class="form-control" required>
                    <option value="">Select Board</option>
                    <option value="cbse">CBSE</option>
                    <option value="icse">ICSE</option>
                    <option value="state">State Board</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Select Type</label>
                <select name="type" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="ncert">NCERT</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Set Price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter price" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Images (Min 3, Max 5)</label>
                <input type="file" name="photos[]" id="imageUpload" class="d-none" multiple accept="image/*">
                <label for="imageUpload" class="upload-button">Choose Files</label>
                <p id="fileError">Please upload between 3 to 5 images.</p>
                <div id="imagePreview"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Enter description" required></textarea>
            </div>

            <button type="submit" class="btn-submit w-100">Post Now</button>
        </form>
    </div>

    <script>
        document.getElementById("imageUpload").addEventListener("change", function() {
            let files = this.files;
            let errorMsg = document.getElementById("fileError");
            let previewContainer = document.getElementById("imagePreview");
            previewContainer.innerHTML = "";

            if (files.length < 3 || files.length > 5) {
                errorMsg.style.display = "block";
                this.value = "";
            } else {
                errorMsg.style.display = "none";
                Array.from(files).forEach(file => {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img = document.createElement("img");
                        img.src = e.target.result;
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                });
            }
        });
    </script>

</body>

</html>
