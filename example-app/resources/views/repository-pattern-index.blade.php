<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RepositoryPatternDemo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RepoPatternDemo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('repository-pattern.create') }}">CreateRepo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <div class="row">
        @foreach($repoPatterns as $repoPattern)
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <h3>{{ $repoPattern->name }}</h3>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md col-lg col-sm col-xs">
                                        <a href="{{ route('repository-pattern.show',$repoPattern->id) }}" title="Show the Repo Card"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div class="col-md col-lg col-sm col-xs">
                                        <a href="{{ route('repository-pattern.edit',$repoPattern->id) }}" title="Show the Repo Card"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <div class="col-md col-lg col-sm col-xs">
                                        <form action="{{ route('repository-pattern.destroy',$repoPattern->id) }}" method="POST" enctype="multipart/form-data">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                            <button class="btn btn-outline-danger" title="Delete Repository Card">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        {{ $repoPattern->description }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>