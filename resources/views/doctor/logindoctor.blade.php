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



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Login Doctor</div>
                    <div class="card-body mt-2">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="post" action="{{ url('/logindoctor') }}">
                            <div class="form-group ">
                                @csrf


                                <div class="form-group my-2">
                                    <label class="label">email </label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                                    {{-- <label class="text-danger">{{$errors->first("email")}}</label> --}}

                                </div>

                                <div class="form-group">
                                    <label class="label">password </label>
                                    <input type="text" name="password" class="form-control"  value="{{ old('password') }}"/>

                                </div>
                                <div class="form-group mt-4 d-flex justify-content-center">
                                    <input type="submit" class="btn btn-success col-12 " />
                                </div>
                                <div class="form-group mt-4 d-flex justify-content-center">
                                    <a href="{{ url('/doctor/create') }}"
                                        class="btn btn-light m-r-1em border border-dark col-12">|| Goo To
                                        Register... Form</a>
                                </div>
                        </form>
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
