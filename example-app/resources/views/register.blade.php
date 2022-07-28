<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegistrationForm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h1>User Registration Form</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('register.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="UserName"><strong>UserName:</strong></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter UserName">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="Email"><strong>Email:</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="Pass"><strong>Account Password:</strong></label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            <br>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-outline-success form-control">
                                Submit Form
                            </button>
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