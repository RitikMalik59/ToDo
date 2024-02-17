<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <!-- Content here -->

        <h1 class="display-4 text-center">ToDo.</h1>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
        </div>

        <div class="form-check">
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
        </div>

        <!-- <--- input group Checkboxes and radios --->
        <div class="input-group mb-3">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>

        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button">
        </div>

    </div>



    <!-- < ----- Footer ----- > -->
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </footer>
</body>

</html>