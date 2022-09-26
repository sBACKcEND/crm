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
            <h1>List of the customers</h1>
            <a class="btn btn-dark" href="createCustomer.php">Add new</a>
        </div>
        <div class="card-body">
            <div class="col-md-12 d-flex flex-row">
                <table class="table">
                    <thead>
                    <tr class="table-dark text-center">
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th>Company</th>
                        <th>Date</th>
                        <th>Conversation</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                        <tr class="table text-center">
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->surname}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->position}}</td>
                            <td>{{($customer->getCompany()->name)}}</td>
                            <td>{{$customer->getConversations($customer->id)->date}}</td>
                            <td>{{$customer->getConversations($customer->id)->conversation}}</td>
                            <td><a class="btn btn-warning" href="updateCustomer.php?id={{$customer->id}}">Update</a></td>
                            <td><a class="btn btn-success" href="?delete_id={{$customer->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>