<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container p-5 col-md-6 mt-5">
        @if (Route::has('done'))
            <div class="alert alert-success">
                Email Sent Successfully
            </div>
        @endif
        <form action="{{ route('send.email') }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="validationCustom01" value="{{ old('name') }}" required>
                @error('name')
                    <hr>
                    <div class="alert alert-danger bg-transparent text-danger mt-3">
                        <span>{{ $message }}</span>
                    </div>
                @enderror

            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="validationCustom02"
                    value="{{ old('email') }}" required>
                @error('email')
                    <hr>
                    <div class="alert alert-danger bg-transparent text-danger mt-3">
                        <span>{{ $message }}</span>
                    </div>
                @enderror

            </div>

        

           

            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
