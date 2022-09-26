<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5 mb-5">
                <div class="card-header">Update page</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="{{$updateCompany->id}}" >
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" value="{{$updateCompany->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input name="address" type="text" class="form-control" value="{{$updateCompany->address}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Vat code</label>
                            <input name="vat_code" type="text" class="form-control" value="{{$updateCompany->vat_code}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Full name</label>
                            <input name="company_name" type="text" class="form-control" value="{{$updateCompany->company_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input name="phone" type="text" class="form-control" value="{{$updateCompany->phone}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" value="{{$updateCompany->email}}">
                        </div>
                        <button class="btn btn-dark">Update</button>
                        <a href="index.php" class="btn btn-warning float-end">Go back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
