<?php include_once('db_connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>




    <div class="container col-lg-4">

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

        <!-- <--- input group Checkboxes and radios --->
        <?php
        // echo $new_task;
        $query = "SELECT * FROM tasks ORDER BY id DESC";
        $all_tasks = mysqli_query($db_con, $query);
        while ($row = mysqli_fetch_array($all_tasks)) { ?>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                </div>
                <input type="text" class="form-control" value="<?php echo $row['title']; ?>" aria-label="Text input with checkbox">
                <div class="input-group-text">
                    <a href="delete.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure about deleting this task?')">
                        <input type="button" class="btn-close" aria-label="Close">
                    </a>
                </div>
            </div>

        <?php } ?>

    </div>



    <!-- < ----- Footer ----- > -->
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </footer>
</body>

</html>