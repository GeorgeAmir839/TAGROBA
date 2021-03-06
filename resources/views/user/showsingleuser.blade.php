<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/school/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/school/aboutus/test">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/school/contactus">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>





    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            {!! '<h1>Me/Miss: ' . $data->name . ' Welcome To Show Your data</h1>' !!}
            <a href="{{ url('/user/create') }}" class='btn btn-dark'> Register form </a>
            <a href="{{ url('/user') }}" class='btn btn-light border border-dark'> Returen To Show All User </a>

            {{-- <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back</a> --}}
        </div>

        <div class="card-body">
            <div class="row">


                <div class="col-xs-12 col-sm-12 col-md-12 row justify-content-arouned">
                    <div class="form-group p-3">
                        <strong>id:</strong>
                        {{ $data->id }}

                    </div>
                    <div $data="form-group p-3">

                        <strong>name:</strong>

                        {{ $data->name }}

                    </div>
                    <div class="form-group p-3">

                        <strong>email:</strong>
                        {{ $data->email }}

                    </div>
                    <div class="form-group p-3">

                        <a href="{{ url('/user/' . $data->id) }}" class="btn btn-danger m-r-1em mx-2">Delete</a>
                        <a href="{{ url('/user/' . $data->id . '/edit') }}" class="btn btn-primary m-r-1em mx-4">Edit</a>

                        <a href="{{ url('/logoutuser') }}" class="btn btn-dark m-r-1em mx-2">logout</a>
                    </div>
                </div>


            </div>

        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

<style>
    .text {
        font-size: 100px
    }

</style>
