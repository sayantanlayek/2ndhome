        $.validator.setDefaults( {
            submitHandler: function () {
               form.submit();
            }
        } );

        $( document ).ready( function () {
            $( "#registerform" ).validate( {
                rules: {
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confpassword: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    phone:{
                        minlength: 10,
                        maxlength:  10,
                        number: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confpassword: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Passwords are case sensitive, both passwords should be exact match"
                    },
                     phone:{
                        minlength: "Your phonenumber must have 10 digit",
                        maxlength: "Your phonenumber must have 10 digit"
                    },
                    email: "Please enter a valid email address"
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
                    error.addClass( "help-block" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
                }
            } );
        });
