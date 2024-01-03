@include('navbar')
<!DOCTYPE html>
<html>
<head>
    <Title>Create new player</Title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <h1>Create Player</h1>
    @if(Session::has('succes'))
        <div class="alert alert-succes">
            {{Session::get('succes')}}
            @php
            Session::forget('success')
            @endphp
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your inputs.
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{url('player/create')}}">
        {{csrf_field()}}
        <div class="mb-3">
            <label class="form-label" for="inputName">Name:</label>
            <input
                type="text"
                name="name"
                id="inputName"
                class="form-control @error('name') is-invalid @enderror"
                placeholder="Player name"
            >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="inputAge">Age:</label>
            <input
                type="text"
                name="age"
                id="inputAge"
                class="form-control @error('age') is-invalid @enderror"
                placeholder="Player age"
            >
            @error('age')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <button class="btn btn-primary btn-succes btn-submit">Submit</button>
        </div>

    </form>
</div>
</body>
</html>
