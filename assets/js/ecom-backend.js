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

var handleJstreeCheckableGroup = function() {
    var itemId = $('#item_id').val();
    var formData = {
        '_token': $('meta[name="csrf-token"]').attr('content'),
        'action': 1,
        'itemId': itemId,

    };
    $.ajax({
        url: BASE_URL + '/getTreeViewFrEdit',
        type: 'POST',
        data: formData,
        success: function(res) {
            // tree
            $('#jstree-checkable-group').jstree({
                'plugins': ["wholerow", "checkbox", "types"],
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
            handleJstreeCheckableGroup();


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

    // $('#addImageModelAjax').click(function() {
    //     alert();
    //     $("#addItemImageByModel").show("slow");

    // });

    $(document).ready(function() {


        $('#saveItemMaster').on('submit', function(e) {
            e.preventDefault();

            $('#errorMsg').html('');
            $.ajax({
                    type: 'POST',
                    url: BASE_URL + '/saveItem',
                    data: $('#saveItemMaster').serialize(),

                    success: function(responce) {

                        if (responce['status'] == 'success') {

                            toastr.success(responce['msg']);
                            window.location.replace(responce['url']);
                            // $('#saveItemMaster')[0].reset();
                            // $('#errorMsg').css("display", "block");
                            // $('#errorMsg').removeClass('alert-warning');
                            // $('#errorMsg').addClass('alert-success');
                            // $('#errorMsg').html(`<strong>${responce['msg']}</strong>`);
                            // $('html,body').animate({
                            //     scrollTop: $("#content").offset().top
                            // }, 100);
                            // setInterval(function() {
                            //     $('#errorMsg').css("display", "none");

                            //     $('#errorMsg').html('');

                            // }, 10000);

                            // $.ajax({
                            //     type: 'GET',
                            //     url: BASE_URL + '/getItembyAjax',
                            //     success: function(res) {
                            //         //console.log(res);
                            //         $('#itemDataAppend').empty();
                            //         let html = '';
                            //         $.each(res['dataForTable'], function(ind, itemData) {
                            //             // console.log(itemData['item_name']);
                            //             html += `<tr class="odd gradeX">
                            //                     <td width="1%" class="f-s-600 text-inverse">${ind+1}</td>
                            //                     <td>
                            //                     <img src="${(itemData['img_name'] && itemData['default']==1) ? BASE_URL+'/gallery/'+itemData['img_name']: BASE_URL+'/assets/img/product/default.jpg'}" width="50px" height="50px"/>

                            //                     <a href="${BASE_URL+'/add-gallery-image/'+itemData['item_id']}">Add image</a></td>
                            //                     <td>${itemData['item_name']}</td>
                            //                     <td>${itemData['g_name']}</td>
                            //                     <td>${itemData['open_qty']}</td>
                            //                     <td>${itemData['min_qty']}</td>
                            //                 </tr>`;
                            //             $('#itemId').val(itemData['item_id']);
                            //         });


                            //         $('#itemDataAppend').append(html);
                            //     }
                            // });


                        } else {

                            toastr.warning(responce['msg']);
                            // $('#errorMsg').css("display", "block");
                            // $('#errorMsg').removeClass('alert-success');
                            // $('#errorMsg').addClass('alert-warning');
                            // $('#errorMsg').html(`<strong>${responce['msg']}</strong>`);
                            // $('html,body').animate({
                            //     scrollTop: $("#content").offset().top
                            // }, 100);
                            // setInterval(function() {
                            //     $('#errorMsg').css("display", "none");

                            //     $('#errorMsg').html('');
                            // }, 10000);


                        }
                    },
                    error: function(xhr, status, error) {
                        //let errorMsg = '';
                        //alert('empty');
                        let errorHtml = '';
                        $.each(xhr.responseJSON.errors, function(key, item) {
                            errorHtml += `<strong>${item}</strong></br>`;
                        });
                        toastr.error(errorHtml);
                        // $('#errorMsg').css("display", "block");
                        // $('#errorMsg').removeClass('alert-success');
                        // $('#errorMsg').addClass('alert-warning');
                        // $('#errorMsg').html(errorHtml);
                        // $('html,body').animate({
                        //     scrollTop: $("#content").offset().top
                        // }, 100);
                        // setInterval(function() {
                        //     $('#errorMsg').css("display", "none");
                        //     $('#errorMsg').html('');
                        // }, 10000);
                        // $('#errorMsg').css("display", "block");
                        // $('#errorMsg').addClass('alert-warning');
                        // $('#errorMsg').append(errorHtml);
                    }

                })
                //alert('submitBtn');
        });

        $('#addCustomer').on('submit', function(e) {
            e.preventDefault();

            $('#errorMsg').html('');
            $.ajax({
                type: 'POST',
                url: BASE_URL + '/add-new-customer',
                data: $('#addCustomer').serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#updateCustomer').on('submit', function(e) {
            e.preventDefault();

            $('#errorMsg').html('');
            $.ajax({
                type: 'POST',
                url: BASE_URL + '/update-customer',
                data: $('#updateCustomer').serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#addAttribute').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: BASE_URL + '/addAttribute',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#updateAttribute').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/updateAttribute',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#addAttributeFamily').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/addAttributeFamily',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        //window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#addAddress').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/addAddress',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#updateAddress').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/updateAddress',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#deleteCustomer').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: BASE_URL + '/delete-customer',
                data: $(this).serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        //window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

        });

        $('#editItemMasterForm').on('submit', function(e) {
            e.preventDefault();
            var selectedElmsIds = $('#jstree-checkable-group').jstree("get_selected");
            var formData = new FormData(this);
            formData.append('categorys', JSON.stringify(selectedElmsIds));

            var item_id = $('#edit_item_id').val();
            $('#errorMsg').html('');
            $.ajax({
                type: 'POST',
                url: BASE_URL + '/update-item/' + item_id,
                data: formData,
                processData: false,
                contentType: false,
                //data: $('#editItemMasterForm').serialize(),

                success: function(responce) {

                    if (responce['status'] == 'success') {

                        toastr.success(responce['msg']);
                        window.location.replace(responce['url']);

                    } else {

                        toastr.warning(responce['msg']);
                        //window.location.replace(responce['url']);

                    }
                },
                error: function(xhr, status, error) {

                    let errorHtml = '';
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        errorHtml += `<strong>${item}</strong></br>`;
                    });
                    toastr.error(errorHtml);

                }

            })

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

    $('#type').change(function() {
        var typeVal = $(this).val();
        if (typeVal == 'select' || typeVal == 'checkbox' || typeVal == 'multiselect') {
            $('#attrOption').show();
        } else {
            $('#attrOption').hide();
        }
    });

});


$(document).ready(function() {

    var MaxInputs = 2;
    var InputsWrapper = $("#InputsWrapper");
    var AddButton = $("#AddMoreFileBox");

    var x = InputsWrapper.length; //initlal text box count
    var FieldCount = 1;


    $(AddButton).click(function(e) {

        FieldCount++;
        $(InputsWrapper).append(`<div class="row form_group" id="removeBlock_${FieldCount}">
                                       
                                      <div class="col-sm-10">
                                        <input type="text" name="options[]"  class="form-control" placeholder="Please enter option" data-parsley-required="true"> 
                                        <a href="#" class="removeclass">Remove</a>
                                      </div>
                                    </div>`);
        x++;



        return false;
    });

    $("body").on("click", ".removeclass", function(e) {
        if (x > 1) {
            $(this).parent().parent().remove();

            x--;

            $("#AddMoreFileId").show();

            $("#lineBreak").html("");

            $('AddMoreFileBox').html("Add field");
        }
        return false;
    })

});