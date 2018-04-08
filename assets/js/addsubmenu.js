        $.validator.setDefaults( {
            submitHandler: function () {
               form.submit();
            }
        } );

        $( document ).ready( function () {


            jQuery.validator.addMethod("deccheck", function(value, element) {
        return this.optional(element) || /^\d{0,4}(\.\d{0,2})?$/i.test(value);
    }, "You must include two decimal places");

            $( "#submenuform" ).validate( {
                rules: {
                   
                    mainmenu: {
                        required: true
                    },
                     submenufield: {
                        required: true
                    },
                    submenuprice:{
                        required: true,
                        number: true,
                        deccheck: true
                    }
                },
                messages: {
                    
                    mainmenu: {
                        required: "Please select mainmenu"
                    },
                     submenufield: {
                        required: "Please provide Sub menu name"
                    },
                    submenuprice:{
                        required: "Please provide Sub menu Price"
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
