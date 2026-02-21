<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Files</title>
</head>
<body>
<h1>Upload Files</h1>

<form action="{{ route('doupload') }}" method="post"
      enctype="multipart/form-data">
    @csrf

    <div>
        <label for="file">Choose File</label>
        <input type="file" name="file" id="file">
    </div>

    <div>
        <input type="submit" value="Upload">
    </div>
</form>
</body>
</html>
