        $.validator.setDefaults( {
            submitHandler: function () {
               form.submit();
            }
        } );

        $( document ).ready( function () {
            $( "#mainmenuform" ).validate( {
                rules: {
                   
                    tablename: {
                        required: true
                    }
                },
                messages: {
                    
                    tablename: {
                        required: "Please provide a table name"
                    }
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
