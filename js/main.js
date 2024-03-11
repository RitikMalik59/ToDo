$(document).ready(function () {

    //Update task title on pressing Enter key in Database

    $("input").on('keypress', function (e) {
        // console.log(e.key);
        // console.log(e.keyCode);
        if (e.key == 'Enter') {
            let value = $(this).val();
            let id = $(this).attr("id");
            // console.log(value, id);

            const Data = $.ajax({
                url: './update_task.php',
                type: "POST",
                // dataType: "json",
                data: { updateTask: value, updateId: id },
                success: function (data) {
                    console.log(data);
                },
                error: function (xhr, status, error) {
                    console.error(xhr);
                }
            })
            console.log(Data);

        }
    });

    $('input[type="checkbox"]').change(function (event) {
        // State has changed to checked/unchecked.

        let id = this.id;
        let value = this.value;
        let checked = this.checked;
        // console.log(id, value, checked);
        // console.log(this);

        let status = null;
        if (checked === true) {
            status = 1;
        } else {
            status = 0;
        }
        // console.log(status);

        const Data = $.ajax({
            url: './update_task.php',
            type: "POST",
            // dataType: "json",
            data: { checkBoxId: id, status: status },
            success: function (data) {
                // console.log(data);
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        })
        // console.log(Data);


        // if (!$(this).is(':checked')) {

        //     return confirm("Are you sure?");
        // }


        // // console.log(this);
        // console.log($(this).is(':checked'));
        // console.log(!$(this).is(':checked'));
        // console.log(event);
    });

    // $('.form-check-input').on('click', function (e) {
    //     console.log('clicked');
    //     console.log(e);

    // })

    //    ----- Show Password on registration page on click -----------

    $('#showPassword').click(function () {
        console.log('clicked');
        const password = $('#password');

        // alert($(this).is(':checked'));
        const pwd = $(this).is(':checked') ? password.attr('type', 'text') : password.attr('type', 'password');
        // const pwd = $(this).is(':checked') ? console.log('clicked') : console.log('unclicked');

        // console.log(pwd);
    });

});