<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('customers.index') }}">Customers</a> |
        <a href="{{ route('users.index') }}">Users</a> |
        <a href="{{ route('about') }}">About</a>
    </nav>

    <br>

    @if ($errors->any())
        <div>
            <strong>Please correct the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($user->avatar)
        <p>Current Avatar:</p>
        <img
            src="{{ asset('storage/' . $user->avatar) }}"
            alt="{{ $user->full_name }}"
            width="150"
            height="150"
        >
    @endif

    <form
        method="POST"
        action="{{ route('users.update', $user) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <label for="username">Username:</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="{{ old('username', $user->username) }}"
        >
        <br><br>

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="{{ old('full_name', $user->full_name) }}"
        >
        <br><br>

        <label for="avatar">Profile Picture:</label><br>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept="image/*"
        >
        <br>
        <small>Upload an image no larger than 2 MB.</small>
        <br><br>

        <button type="submit">Update User</button>
    </form>
</body>
</html>