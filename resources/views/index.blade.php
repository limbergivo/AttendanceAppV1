@section('title','PlayerForm Page')
@section('content')
    <div class="container">
        <div class="row">
            <form id="myform" action="{{route('create/player')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"/>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age"/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit"/>
                </div>
            </form>
        </div>
    </div>
@endsection
