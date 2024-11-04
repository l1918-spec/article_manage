@extends('layouts.app')

@section('content')
    <style>
        .form-container {
            max-width: 800px; /* Maximum width of the form */
            margin: auto; /* Center the form horizontally */
            padding: 30px; /* Add padding inside the form */
            border-radius: 10px; /* Rounds the corners of the form */
            background-color: #ffffff; /* White background for contrast */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .form-title {
            text-align: center; /* Centers the title */
            margin-bottom: 20px; /* Spacing below the title */
            font-weight: bold; /* Makes the title bold */
            font-size: 2.5rem; /* Increases the font size of the title */
            color: #333; /* Dark gray color for better readability */
            text-transform: uppercase; /* Uppercase title for emphasis */
            letter-spacing: 1px; /* Adds spacing between letters */
        }

        .form-label {
            font-weight: bold; /* Makes the labels bold */
            color: #555; /* Darker gray for label text */
            margin-bottom: 5px; /* Space below labels */
        }

        .form-control {
            border: 1px solid #ced4da; /* Light border for inputs */
            border-radius: 5px; /* Rounded corners for inputs */
            padding: 10px; /* Padding inside inputs */
            font-size: 1rem; /* Standard font size for inputs */
            transition: border-color 0.3s; /* Smooth transition for border color */
            width: 100%; /* Full width for inputs */
        }

        .form-control:focus {
            border-color: #007bff; /* Change border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Light shadow on focus */
            outline: none; /* Remove outline */
        }

        .content-textarea {
            height: 200px; /* Sets a fixed height for the content textarea */
            font-size: 1.1rem; /* Slightly larger font size for better readability */
            padding: 10px; /* Padding inside textarea */
        }

        .btn-primary {
            background-color: #ffb3c1; /* Light pink background color */
            border: none; /* Removes border */
            border-radius: 5px; /* Rounded corners for buttons */
            padding: 10px 20px; /* Padding for buttons */
            font-size: 1.1rem; /* Larger font size for buttons */
            transition: background-color 0.3s; /* Smooth transition for button color */
            cursor: pointer; /* Pointer cursor for buttons */
            margin: 0 auto; /* Center the button */
            display: block; /* Make the button a block element to enable centering */
        }

        .btn-primary:hover {
            background-color: #ff99a8; /* Darker pink on hover */
        }

        .btn-link {
            text-decoration: none; /* Removes underline from link */
            font-size: 1rem; /* Font size for link */
            color: #007bff; /* Link color */
            align-self: center; /* Center vertically in flex */
        }

        .btn-link:hover {
            text-decoration: underline; /* Underline on hover for better accessibility */
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%; /* Adjusts form width on smaller screens */
            }
        }
    </style>

    <div class="container mt-5">
        <div class="form-container">
            <h1 class="form-title">Add New Article</h1>
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" class="form-control" name="title" placeholder="Enter article title" required>
                </div>
                <div class="form-group mb-4">
                    <label for="content" class="form-label">Content:</label>
                    <textarea id="content" class="form-control content-textarea" name="content" placeholder="Enter article content" required></textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-link">Back to Articles</a>
                    <button type="submit" class="btn btn-primary">Add Article</button>
                </div>
            </form>
        </div>
    </div>
@endsection
