<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Itenerary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">Upload Itenerary</h2>
        @if (Session::get('success'))
        <script>
            setTimeout(function() {
                $('.alert').fadeOut(1000);
            }, 10000);
        </script>
        <div class="alert alert-success">
            {{ session::get('success') }}
        </div>
        @endif
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-dark">Import data</button>
            <a href="/itenerary-upload.xlsx" class="btn btn-dark">Download Sample</a>
            <a href="/iteneraries" class="btn btn-dark">Go Back</a>
        </form>
    </div>
</body>

</html>