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

                            $.ajax({
                                type: 'GET',
                                url: BASE_URL + '/getItembyAjax',
                                success: function(res) {
                                    //console.log(res);
                                    $('#itemDataAppend').empty();
                                    let html = '';
                                    $.each(res['dataForTable'], function(ind, itemData) {
                                        // console.log(itemData['item_name']);
                                        html += `<tr class="odd gradeX">
                                                <td width="1%" class="f-s-600 text-inverse">${ind+1}</td>
                                                <td>
                                                <img src="${(itemData['img_name'] && itemData['default']==1) ? BASE_URL+'/gallery/'+itemData['img_name']: BASE_URL+'/assets/img/product/default.jpg'}" width="50px" height="50px"/>
                                               
                                                <a href="${BASE_URL+'/add-gallery-image/'+itemData['item_id']}">Add image</a></td>
                                                <td>${itemData['item_name']}</td>
                                                <td>${itemData['g_name']}</td>
                                                <td>${itemData['open_qty']}</td>
                                                <td>${itemData['min_qty']}</td>
                                            </tr>`;
                                    });

                                    $('#itemDataAppend').append(html);
                                }
                            });


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

    $('#saveAttribute').click(function() {

        $('#errorModelMsg').html('');
        $.ajax({
                type: 'POST',
                url: BASE_URL + '/saveAttribute',
                data: $('#formAttribute').serialize(),

                success: function(responce) {
                    //console.log(responce);
                    // return false;
                    if (responce['status'] == 'success') {
                        $('#formAttribute')[0].reset();
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-warning');
                        $('#errorModelMsg').addClass('alert-success');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);

                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");
                            $('#errorModelMsg').html('');

                        }, 10000);

                    } else {

                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-success');
                        $('#errorModelMsg').addClass('alert-warning');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");

                            $('#errorModelMsg').html('');
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
                    $('#errorModelMsg').css("display", "block");
                    $('#errorModelMsg').removeClass('alert-success');
                    $('#errorModelMsg').addClass('alert-warning');
                    $('#errorModelMsg').html(errorHtml);

                    setInterval(function() {
                        $('#errorModelMsg').css("display", "none");
                        $('#errorModelMsg').html('');
                    }, 10000);
                    // $('#errorMsg').css("display", "block");
                    // $('#errorMsg').addClass('alert-warning');
                    // $('#errorMsg').append(errorHtml);
                }

            })
            //alert('submitBtn');
            // $('#exampleModal').on('hidden.bs.modal', function() {
            //     alert();
            //     document.location.reload();
            //     //location.reload();
            // });
    });

    $('.deleteItemImgBtn').click(function() {
        // let city= $('input[name="city"]').val();
        let del = $(this).attr('value');
        let delItem = del.split('_');
        let itemId = delItem['0'];
        let imgId = delItem['1'];
        if (!confirm('Are you sure you want to delete this image?')) {
            return false;
        }
        //return false;
        $.ajax({
                type: 'POST',
                url: BASE_URL + '/deleteItemImgByAjax',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'itemId': itemId,
                    'imgId': imgId,
                },
                success: function(responce) {
                    //console.log(responce);
                    // return false;
                    if (responce['status'] == 'success') {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-warning');
                        $('#errorModelMsg').addClass('alert-success');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");
                            $('#errorModelMsg').html('');

                        }, 10000);
                        document.location.reload();

                    } else {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-success');
                        $('#errorModelMsg').addClass('alert-warning');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");

                            $('#errorModelMsg').html('');
                        }, 10000);

                    }
                },
                error: function(xhr, status, error) {
                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    $('#errorModelMsg').css("display", "block");
                    $('#errorModelMsg').removeClass('alert-success');
                    $('#errorModelMsg').addClass('alert-warning');
                    $('#errorModelMsg').html(errorHtml);
                    $('html,body').animate({
                        scrollTop: $("#content").offset().top
                    }, 100);
                    setInterval(function() {
                        $('#errorModelMsg').css("display", "none");
                        $('#errorModelMsg').html('');
                    }, 10000);

                }

            })
            //alert('submitBtn');
            // $('#exampleModal').on('hidden.bs.modal', function() {
            //     alert();
            //     document.location.reload();
            //     //location.reload();
            // });
    });

    $('.defaultImg').change(function() {
        let del = $(this).attr('value');
        let delItem = del.split('_');
        itemId = delItem['0'];
        imgId = delItem['1'];
        if ($(this).prop('checked')) {
            if (!confirm('Are you sure you want to make primary this image?')) {
                return false;
            }

            //return false;

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/addPrimaryImgByAjax',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'itemId': itemId,
                    'imgId': imgId,
                    'defaultVal': 1,
                },
                success: function(responce) {
                    //console.log(responce);
                    // return false;
                    if (responce['status'] == 'success') {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-warning');
                        $('#errorModelMsg').addClass('alert-success');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");
                            $('#errorModelMsg').html('');

                        }, 10000);
                        document.location.reload();

                    } else {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-success');
                        $('#errorModelMsg').addClass('alert-warning');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");

                            $('#errorModelMsg').html('');
                        }, 10000);

                    }
                },
                error: function(xhr, status, error) {
                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    $('#errorModelMsg').css("display", "block");
                    $('#errorModelMsg').removeClass('alert-success');
                    $('#errorModelMsg').addClass('alert-warning');
                    $('#errorModelMsg').html(errorHtml);
                    $('html,body').animate({
                        scrollTop: $("#content").offset().top
                    }, 100);
                    setInterval(function() {
                        $('#errorModelMsg').css("display", "none");
                        $('#errorModelMsg').html('');
                    }, 10000);

                }

            });

        } else {
            if (!confirm('Are you sure you want to remove primary this image?')) {
                return false;
                // $(this).prop("checked", "true")
            }

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/addPrimaryImgByAjax',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'itemId': itemId,
                    'imgId': imgId,
                    'defaultVal': 0,
                },
                success: function(responce) {
                    //console.log(responce);
                    // return false;
                    if (responce['status'] == 'success') {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-warning');
                        $('#errorModelMsg').addClass('alert-success');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");
                            $('#errorModelMsg').html('');

                        }, 10000);
                        document.location.reload();

                    } else {
                        $('#errorModelMsg').css("display", "block");
                        $('#errorModelMsg').removeClass('alert-success');
                        $('#errorModelMsg').addClass('alert-warning');
                        $('#errorModelMsg').html(`<strong>${responce['msg']}</strong>`);
                        $('html,body').animate({
                            scrollTop: $("#content").offset().top
                        }, 100);
                        setInterval(function() {
                            $('#errorModelMsg').css("display", "none");

                            $('#errorModelMsg').html('');
                        }, 10000);

                    }
                },
                error: function(xhr, status, error) {
                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    $('#errorModelMsg').css("display", "block");
                    $('#errorModelMsg').removeClass('alert-success');
                    $('#errorModelMsg').addClass('alert-warning');
                    $('#errorModelMsg').html(errorHtml);
                    $('html,body').animate({
                        scrollTop: $("#content").offset().top
                    }, 100);
                    setInterval(function() {
                        $('#errorModelMsg').css("display", "none");
                        $('#errorModelMsg').html('');
                    }, 10000);

                }

            });
        }
    });



});