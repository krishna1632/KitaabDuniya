<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Listing Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .cursor-pointer {
            cursor: pointer;
        }

        .custom-navbar {
            height: 50px;
            background-color: #f7f8f9;
            box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.05);
        }

        .custom-navbar a {
            font-weight: 900;
            padding-left: 20px;
            font-size: 25px;
            color: black;
        }

        .custom-navbar a:hover {
            color: #333;
            font-size: 30px;
        }

        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-label {
            font-weight: 600;
            color: #555;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .upload-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #555;
        }
        .upload-input {
            display: none;
        }
        .upload-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .upload-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg custom-navbar py-0 px-10">
        <div class="container-fluid">
            <a href="/sell"><i class="bi bi-arrow-left"></i></a>
        </div>
    </nav>

    <div class="form-container">
        <h2>Book Listing</h2>
        <p>School /<a href="/sell"> change</a></p>

        <form>
            <!-- Book Name -->
            <div class="mb-3">
                <label for="bookName" class="form-label">Book Name</label>
                <input type="text" class="form-control" id="bookName" placeholder="Enter book name" required>
            </div>

            <!-- Category -->
            <div class="mb-3">
    <label for="class" class="form-label">Select Class</label>
    <select class="form-control" id="class" required>
        <option value="">Choose class</option>
        <option value="class1">Class 1</option>
        <option value="class2">Class 2</option>
        <option value="class3">Class 3</option>
        <option value="class4">Class 4</option>
        <option value="class5">Class 5</option>
        <option value="class6">Class 6</option>
        <option value="class7">Class 7</option>
        <option value="class8">Class 8</option>
        <option value="class9">Class 9</option>
        <option value="class10">Class 10</option>
        <option value="class11">Class 11</option>
        <option value="class12">Class 12</option>
    </select>
</div>


            <!-- Number of Owners -->
            <div class="mb-3">
                <label for="noOfOwners" class="form-label">Number of Owners</label>
                <input type="number" class="form-control" id="noOfOwners" placeholder="Enter number of owners" required>
            </div>


            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" placeholder="Enter description" required></textarea>
            </div>

            <!-- Set Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Set Price</label>
                <input type="number" class="form-control" id="price" placeholder="Enter price" required>
            </div>

            <!-- Current Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Current Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter current location" required>
            </div>

            <!-- Upload Images -->
            <div class="mb-3">
                <label class="upload-label">Upload Images (Max 5)</label>
                <input type="file" class="upload-input" id="imageUpload" multiple accept="image/*">
                <label for="imageUpload" class="upload-button">Choose Files</label>
            </div>

    

            <!-- Review Details -->
            <div class="mb-3">
                <label for="review" class="form-label">Review Your Details</label>
                <textarea class="form-control" id="review" rows="4" placeholder="Enter review details" required></textarea>
            </div>


            <!-- Submit Button -->
            <button type="submit" class="btn-submit">Post Now</button>
        </form>
    </div>
</body>
</html>