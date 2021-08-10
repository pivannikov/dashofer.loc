<!--Modal Create-->
<div class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="createEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEmployeeLabel">Create new user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/employee/create" name="createEmployee" onsubmit="return validate('createEmployee')" method="post" id="createEmployee">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="nameInput" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="surnameInput" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname" id="surnameInput" aria-describedby="emailHelp">
                        <div id="surnameHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="titulInput" class="form-label">Titul</label>
                        <input type="text" class="form-control" name="titul" id="titulInput" aria-describedby="emailHelp">
                        <div id="titulHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Job title</label>
                        <select class="form-select" name="job_title" aria-label="Default select example" id="jobInput">
                            <?php foreach($jobs as $job): ?>
                                <option value="<?php echo $job['id']; ?>"><?php echo $job['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="birthdayInput" class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="birthday" id="birthdayInput" aria-describedby="emailHelp">
                        <div id="birthdayHelp" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-success" id="submitCreate">Create</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal Edit-->
<div class="modal fade" id="editModal<?php echo $employee['id'];?>" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/employee/update/<?php echo $employee['id']; ?>" method="post" name="updateEmployee" id="updateEmployee">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $employee['name']; ?>" id="nameInput" aria-describedby="emailHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="surnameInput" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname" value="<?php echo $employee['surname']; ?>" id="surnameInput" aria-describedby="emailHelp">
                        <div id="surnameHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="titulInput" class="form-label">Titul</label>
                        <input type="text" class="form-control" name="titul" value="<?php echo $employee['titul']; ?>" id="titulInput" aria-describedby="emailHelp">
                        <div id="titulHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Job title</label>
                        <select class="form-select" name="job_title" aria-label="Default select example" id="jobInput">
                            <option selected value="<?php echo $employee['job_id']; ?>"><?php echo $employee['job_title']; ?></option>
                            <?php foreach($jobs as $job): ?>
                                <option value="<?php echo $job['id']; ?>"><?php echo $job['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="birthdayInput" class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="birthday" value="<?php echo $employee['birthday']; ?>" id="birthdayInput" aria-describedby="emailHelp">
                        <div id="birthdayHelp" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal Delete-->
<div class="modal fade" id="deleteModal<?php echo $employee['id'];?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/employee/delete/<?php echo $employee['id']; ?>" method="post">
                    <div class="mb-3">
                        Confirm to delete: <?php echo $employee['name'] . ' ' . $employee['surname']; ?>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validate($formName) {
        let name = document.forms[$formName]["name"].value;
        if (name == "" || name.length < 3 || name.length > 25) {
            document.getElementById('nameHelp').innerText = "Must be from 3 till 25 symbols"
            document.getElementById('nameHelp').classList.add('text-danger')
            return false;
        }
        let surname = document.forms[$formName]["surname"].value;
        if (surname == "" || surname.length < 3 || surname.length > 25) {
            document.getElementById('surnameHelp').innerText = "Must be from 3 till 25 symbols"
            document.getElementById('surnameHelp').classList.add('text-danger')
            return false;
        }
        let titul = document.forms[$formName]["titul"].value;
        if (titul == "" || titul.length < 2 || titul.length > 8) {
            document.getElementById('titulHelp').innerText = "Must be from 2 till 8 symbols"
            document.getElementById('titulHelp').classList.add('text-danger')
            return false;
        }
        let birthday = document.forms[$formName]["birthday"].value;
        if (birthday == "") {
            document.getElementById('birthdayHelp').innerText = "Enter date"
            document.getElementById('birthdayHelp').classList.add('text-danger')
            return false;
        }
    }


</script>