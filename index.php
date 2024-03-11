<?php include('includes/header.php'); ?>

<body>

    <div class="container py-5 my-5 col-lg-4 ">

        <h1 class="display-4 text-center">ToDo.</h1>

        <form action="create_task.php" method="post">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Add New ToDo Task " required>

                <button class="btn btn-outline-primary" name="add_task" type="submit" id="button-addon2">Add Task</button>
            </div>
        </form>
        <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div> -->
        <div class="input-group mb-3">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox" value="checked" aria-label="Checkbox for following text input" checked>
            </div>
            <input type="text" id="" name="task" class="form-control" value="" aria-label="Text input with checkbox">
            <div class="input-group-text">
                <a href="delete.php?delete_id=" onclick="return confirm('Are you sure about deleting this task?')">
                    <input type="button" class="btn-close" aria-label="Close">
                </a>
            </div>
        </div>

        <!-- <--- input group Checkboxes and radios --->
        <?php
        // echo $new_task;
        $query = "SELECT * FROM tasks ORDER BY id DESC";
        $all_tasks = mysqli_query($db_con, $query);
        while ($row = mysqli_fetch_array($all_tasks)) { ?>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <?php
                    $checked = '';
                    if ($row['status'] == 1) {
                        $checked = 'checked'; ?>
                        <input class="form-check-input mt-0" type="checkbox" id="<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" aria-label="Checkbox for following text input" <?php echo $checked; ?>>
                    <?php } else { ?>
                        <input class="form-check-input mt-0" type="checkbox" id="<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" aria-label="Checkbox for following text input" <?php echo $checked; ?>>

                    <?php } ?>
                </div>

                <input type="text" id="<?php echo $row['id']; ?>" name="task" class="form-control" value="<?php echo $row['title']; ?>" aria-label="Text input with checkbox">
                <div class="input-group-text">
                    <a href="delete.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure about deleting this task?')">
                        <input type="button" class="btn-close" aria-label="Close">
                    </a>
                </div>
            </div>

        <?php } ?>

    </div>



    <!-- < ----- Footer ----- > -->


    <?php include('includes/footer.php'); ?>