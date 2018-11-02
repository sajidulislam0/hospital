/**sign up form validation start**/



jQuery(document).ready(function () {

    /** validation for user sign up form**/
    $("#add_doctor").validate({
        rules: {
            doctor_name: {
                required: true,
                minlength: 4
            },
            username: {
                required: true,
                minlength: 4
            },
            mobile_no: {
                required: true,
                minlength: 9
            },
            email_address: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            con_password: {
                required: true,
                minlength: 8,
                equalTo: "#rel_password"
            },
            designation: {
                required: true,
                minlength: 2,
            }
        },
        messages: {
            doctor_name: {
                required: "Please enter name",
                minlength: "Full name should be min 4 chars"
            },
            username: {
                required: "Please enter a username",
                minlength: "Full name should be min 4 chars"
            },
            mobile_no: {
                required: "Please enter your mobile no",
                minlength: "Mobile no should be min 9 chars"
            },
            email_address: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            con_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
                equalTo: "Please enter the same password as above"

            },
            designation: {
                required: "Please designation name required",
                minlength: "Too short",
            }
        }
    });


});

