@extends('layouts.app')

@section('content')
    <style>
        /* Page Container Styling */
        .container {
            padding-top: 30px; /* Increased padding for more space */
            max-width: 800px; /* Set maximum width for better responsiveness */
            margin: 0 auto; /* Center the container */
        }

        /* Header Styling */
        .header-title {
            font-size: 2.5rem; /* Large font size for the title */
            color: #2c2c2c; /* Darker color for better visibility */
            font-weight: bold; /* Bold font for the title */
            margin-bottom: 20px; /* Spacing below the title */
            text-align: center; /* Center align the title */
        }

        /* Add Article Button Styling */
        .btn-add-article {
            background-color: #ffb6c1; /* Light pink */
            color: #fff; /* White text */
            border: none; /* No border */
            padding: 10px 20px; /* Padding for better touch area */
            border-radius: 5px; /* Rounded corners */
            font-weight: 500; /* Medium font weight */
            transition: background-color 0.3s; /* Smooth transition for hover */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Keep it inline with margin */
            margin: 0 auto; /* Center the button */
        }

        .btn-add-article:hover {
            background-color: #ff91a1; /* Darker pink on hover */
        }

        /* Flexbox for button alignment */
        .button-container {
            display: flex; /* Use flexbox to align items */
            justify-content: center; /* Center align items horizontally */
            margin-bottom: 30px; /* Spacing below the button container */
        }

        /* Table Styling */
        .table {
            width: 100%; /* Full width for table */
            border-collapse: collapse; /* Remove space between borders */
            background-color: #f4f6f9; /* Light grey background */
            margin-top: 20px; /* Spacing above the table */
            border-radius: 8px; /* Rounded corners */
            overflow: hidden; /* To maintain rounded corners on cells */
        }

        .table thead th {
            font-weight: bold; /* Bold font for headers */
            color: #333; /* Darker color for headers */
            padding: 12px; /* Padding for header cells */
        }

        .table-title {
            padding-left: 20px; /* Padding for the title column */
            text-align: left; /* Align title to the left */
        }

        .table-actions {
            text-align: right; /* Align actions to the right */
            padding-right: 40px; /* More padding for actions column to move it left */
        }

        .table tbody tr {
            border-top: 1px solid #e0e0e0; /* Light border between rows */
        }

        .table tbody tr td {
            padding: 12px; /* Padding for data cells */
            vertical-align: middle; /* Align content to the middle */
        }

        /* Button Styling in Table */
        .btn-edit, .btn-delete {
            background-color: #ffb6c1; /* Light pink */
            color: #fff; /* White text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            padding: 5px 12px; /* Padding for buttons */
            margin: 0 2px; /* Small margin between buttons */
            font-size: 0.9rem; /* Slightly smaller font size */
            font-weight: 500; /* Medium font weight */
            transition: background-color 0.3s; /* Smooth transition for hover */
            cursor: pointer; /* Pointer cursor for buttons */
        }

        .btn-edit:hover, .btn-delete:hover {
            background-color: #ff91a1; /* Darker pink on hover */
        }

        /* Flexbox for right-alignment of actions */
        .action-buttons {
            display: flex; /* Use flexbox to align buttons */
            justify-content: flex-end; /* Align items to the right */
            gap: 5px; /* Add space between buttons */
        }
    </style>

    <div class="container">
        <div class="text-center my-5">
            <h1 class="header-title">Articles</h1>
            <div class="button-container"> <!-- Flexbox container for centering the button -->
                <a href="{{ route('articles.create') }}" class="btn-add-article">Add Article</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="table-title">Title</th>
                        <th class="table-actions">Actions</th> <!-- Ensure Actions header is right-aligned -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td class="align-middle">{{ $article->title }}</td> <!-- Title aligned left -->
                            <td class="align-middle table-actions"> <!-- Actions column -->
                                <div class="action-buttons"> <!-- Flexbox for right-aligned buttons -->
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-edit">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
