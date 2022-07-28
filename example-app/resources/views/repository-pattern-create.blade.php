<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Repo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h1>Repository Form Creation</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('repository-pattern.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name"><strong>Repo Name:</strong></label>
                            <input type="text" name="repository_name" class="form-control" placeholder="Enter Repository Name">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="description"><strong>Repo Description:</strong></label>
                            <textarea name="repository_description" class="form-control" cols="30" rows="10">
                                
                            </textarea>
                            <br>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>