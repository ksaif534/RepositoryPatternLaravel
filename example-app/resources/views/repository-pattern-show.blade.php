<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowRepositoryPattern</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $repository_pattern->name }}</h1>
                </div>
                <div class="card-body">
                    <p>{{ $repository_pattern->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>