<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emot</title>
</head>
<body>

    <h1>Emot</h1>

    @foreach($images as $image)
        <img src="{{ asset('path-to-your-directory/' . $image) }}" alt="Deskripsi Gambar">
    @endforeach

</body>
</html>
