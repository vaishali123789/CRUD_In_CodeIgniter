<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container-fluid bg-purple pb-2 pt-2 shadow-sm">
        <div class="container">
            <div class="text-white h4">
                Simple Crud Operation
            </div>
        </div>
    </div>
    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="row">
                <div class="nav">
                    <div class="nav-links">
                        Books/View
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white">
                <a href="#" class="btn btn-primary">ADD</a>

            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row clo-md-12">
            <div class="card">
                <div class="card-header ">
                    <div class="card-header-title bg-purple text-white pt-2 pb-2">Book</div>
                    <div class="card-body">
                        <table class="table tabale-striped">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>AUTHOR</th>
                                <th>ISBN NO</th>
                                <th>ACTION</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>xyz</td>
                                    <td>xyz</td>
                                    <td>xyz</td>
                                    <td>xyz</td>
                                    <td>
                                        <a href="" class="btn btn-primary">EDIT</a>
                                        <a href="" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>