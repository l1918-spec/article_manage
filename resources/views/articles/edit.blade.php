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
            margin-bottom: 30px; /* Spacing below the title */
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

        .btn-update {
            background-color: #ffb3d9; /* Light pink background color */
            border: none; /* Removes border */
            border-radius: 5px; /* Rounded corners for buttons */
            padding: 10px 20px; /* Padding for buttons */
            font-size: 1.1rem; /* Larger font size for buttons */
            color: #fff; /* White text for the button */
            transition: background-color 0.3s; /* Smooth transition for button color */
            cursor: pointer; /* Pointer cursor for buttons */
            display: block; /* Makes the button a block element */
            margin: 20px auto 0; /* Center the button with margin above */
        }

        .btn-update:hover {
            background-color: #ff99b3; /* Darker pink on hover */
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%; /* Adjusts form width on smaller screens */
            }
        }
    </style>

    <div class="container mt-5">
        <div class="form-container">
            <h1 class="form-title">Edit Article</h1>

            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                </div>
                <div class="mb-4">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
                </div>
                <button type="submit" class="btn-update">Update Article</button>
            </form>
        </div>
    </div>
@endsection
