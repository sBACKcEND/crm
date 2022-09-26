<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<div class="container mb-3" id="content" tabindex="-1">
    <div class="row">
        <div class="card mt-3">
            <div class="card-header">
                <h1>List of the companies</h1>
                <a class="btn btn-dark" href="createCompany.php">Add new</a>
            </div>
            <div class="card-body">
                <div class="col-md-12 d-flex flex-row">
                    <table class="table">
                        <thead>
                        <tr class="table-dark text-center">
                            <th>Name</th>
                            <th>Address</th>
                            <th>VAT_code</th>
                            <th>Company_name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>

                        </thead>
                        @foreach($companys as $company)
                            <tbody>
                            <tr class="table text-center">
                                <td>{{$company->name}}</td>
                                <td>{{$company->address}}</td>
                                <td>{{$company->vat_code}}</td>
                                <td>{{$company->company_name}}</td>
                                <td>{{$company->phone}}</td>
                                <td>{{$company->email}}</td>
                                <td><a class="btn btn-warning" href="updateCompany.php?id={{$company->id}}">Update</a></td>
                                <td><a class="btn btn-success" href="?delete_id={{$company->id}}">Delete</a></td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

