var handleJstreeCheckable = function() {
    var formData = {
        '_token': $('meta[name="csrf-token"]').attr('content'),
        'action': 1

    };
    $.ajax({
        url: BASE_URL + '/getTreeView',
        type: 'POST',
        data: formData,
        success: function(res) {
            // tree
            $('#jstree-checkable').jstree({
                'plugins': ["wholerow", "types"],
                'core': {
                    "themes": {
                        "responsive": false
                    },
                    'data': res
                },
                "types": {
                    "default": {
                        "icon": "fa fa-d text-primary fa-lg"
                    },
                    "file": {
                        "icon": "fa fa-file text-success fa-lg"
                    }
                }
            });
            // tree
        },
        dataType: "json"
    });



};


var Dashboard = function() {
    "use strict";
    return {
        //main function
        init: function() {
            handleJstreeCheckable();


        }
    };
}();

$(document).ready(function() {
    Dashboard.init();

    //save attribur group

    $("#frmSaveGroupAttr").submit(function(event) {
        event.preventDefault(); //prevent default action 
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = $(this).serialize(); //Encode form elements for submission

        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data
        }).done(function(response) { //
            alert('Save Attribute');
        });
    });


    //save attribur group

    $("select.primaryGroup").change(function() {
        var selectedprimaryGroup = $(this).children("option:selected").val();

        if (selectedprimaryGroup == 1) {

            $('#UnderGroup').prop('disabled', false);
        } else {
            $('#UnderGroup').prop('disabled', true);
        }

    });
    $('#btnGroup').click(function() {
        //ajax
        var formData = {
            'group_name': $('#group_name').val(),
            'alias_name': $('#alias_name').val(),
            'primaryGroup': $("#primaryGroup option:selected").val(),
            'UnderGroup': $("#UnderGroup option:selected").val(),
            'taxCategory': $("#taxCategory option:selected").val(),
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'action': 1

        };
        $.ajax({
                url: BASE_URL + '/saveMasterGroup',
                type: 'POST',
                data: formData,
                success: function(res) {
                    alert('Saved');
                    location.reload();
                }
            })
            //ajax
    });

    $(document).ready(function() {
        $('#submitItemBtn').click(function() {

            // let name= $('input[name="name"]').val();
            // let email= $('input[name="email"]').val();
            // let contact= $('input[name="contact"]').val();
            // let website= $('input[name="website"]').val();
            // let address= $('input[name="address"]').val();
            // let state= $('input[name="state"]').val();
            // let city= $('input[name="city"]').val();
            //$('#errorMsg').css("display","none");
            $('#errorMsg').html('');
            $.ajax({
                    type: 'POST',
                    url: BASE_URL + '/saveItem',
                    data: $('#saveItemMaster').serialize(),

                    success: function(responce) {
                        //console.log(responce);
                        // return false;
                        if (responce['status'] == 'success') {
                            $('#saveItemMaster')[0].reset();
                            $('#errorMsg').css("display", "block");
                            $('#errorMsg').removeClass('alert-warning');
                            $('#errorMsg').addClass('alert-success');
                            $('#errorMsg').html(`<strong>${responce['msg']}</strong>`);
                            $('html,body').animate({
                                scrollTop: $("#content").offset().top
                            }, 100);
                            setInterval(function() {
                                $('#errorMsg').css("display", "none");

                                $('#errorMsg').html('');

                            }, 10000);
                        } else {

                            $('#errorMsg').css("display", "block");
                            $('#errorMsg').removeClass('alert-success');
                            $('#errorMsg').addClass('alert-warning');
                            $('#errorMsg').html(`<strong>${responce['msg']}</strong>`);
                            $('html,body').animate({
                                scrollTop: $("#content").offset().top
                            }, 100);
                            setInterval(function() {
                                $('#errorMsg').css("display", "none");

                                $('#errorMsg').html('');
                            }, 10000);


                        }
                    },
                    error: function(xhr, status, error) {
                        //let errorMsg = '';
                        //alert('empty');
                        let errorHtml = '';
                        $.each(xhr.responseJSON.errors, function(key, item) {
                            errorHtml += `<strong>${item}</strong></br>`;
                        });
                        $('#errorMsg').css("display", "block");
                        $('#errorMsg').removeClass('alert-success');
                        $('#errorMsg').addClass('alert-warning');
                        $('#errorMsg').html(errorHtml);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorMsg').css("display", "none");
                            $('#errorMsg').html('');
                        }, 10000);
                        // $('#errorMsg').css("display", "block");
                        // $('#errorMsg').addClass('alert-warning');
                        // $('#errorMsg').append(errorHtml);
                    }

                })
                //alert('submitBtn');
        });

    });


});