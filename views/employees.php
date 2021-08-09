<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createEmployee">
                    New user
                </button><?php require 'employee/modal.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="/">Employees</a>
                                <a class="nav-link" href="/jobs">Jobs</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Titul</th>
                        <th scope="col">Job title</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($employees as $employee): ?>
                        <tr>
                            <th scope="row"><?php echo $employee['id']; ?></th>
                            <td><?php echo $employee['name']; ?></td>
                            <td><?php echo $employee['surname']; ?></td>
                            <td><?php echo $employee['titul']; ?></td>
                            <td><?php echo $employee['job_title']; ?></td>
                            <td><?php echo $employee['birthday']; ?></td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $employee['id'];?>">
                                    edit
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $employee['id'];?>">
                                    delete
                                </button>
                                <?php require 'employee/modal.php'; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
