<!-- Modal Create-->
<div class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="createEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEmployeeLabel">New job title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/job/create" method="post" onsubmit="return validate('createJob')" name="createJob">
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="titleInput" aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal Edit-->
<div class="modal fade" id="editModal<?php echo $job['id'];?>" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit job title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/job/update/<?php echo $job['id']; ?>" method="post">
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Job title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $job['title']; ?>" id="titleInput" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal Delete-->
<div class="modal fade" id="deleteModal<?php echo $job['id'];?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete job title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/job/delete/<?php echo $job['id']; ?>" method="post">
                    <div class="mb-3">
                        Confirm to delete: <?php echo $job['title']; ?>
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
        let name = document.forms[$formName]["title"].value;
        if (name == "" || name.length < 3 || name.length > 25) {
            document.getElementById('titleHelp').innerText = "Must be from 3 till 25 symbols"
            document.getElementById('titleHelp').classList.add('text-danger')
            return false;
        }
    }

</script>