<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-monospace">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fa-solid fa-user-pen"></i> {{ Auth::user()->name }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i
                                class="fa-solid fa-right-to-bracket"></i> Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end  Navbar --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card rounded-0 border-dark">
                        <div class="card-header border-dark bg-white">
                        </div>
                        <div class="card-body">
                            <form action="/insert_rental" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control rounded-0 border-dark" name="name"
                                        style="height: 50px">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email (@)</label>
                                    <input type="email" class="form-control rounded-0 border-dark" name="email"
                                        style="height: 50px">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Property</label>
                                    <select class="form-select rounded-0 border-dark"
                                        aria-label="Default select example" style="height: 50px" name="property_id">
                                        <option selected>Open this select menu</option>
                                        @foreach ($propr as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="gap-2 d-grid">
                                    <button type="submit" class="btn btn-success rounded-0" style="height: 50px">add
                                        property</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
