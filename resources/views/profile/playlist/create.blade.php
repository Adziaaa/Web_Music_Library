<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
</head>
<body>
    <h1>Create a New Playlist</h1>
    <form action="{{ route('playlists.store') }}" method="POST">
    @csrf
    <label for="name">Playlist Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Create Playlist</button>
    </form>
</body>
</html>
