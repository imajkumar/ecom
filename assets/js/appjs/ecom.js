var max_fields = 50; //maximum input boxes allowed
var wrapper = $( ".input_fields_wrap" ); //Fields wrapper
var add_button = $( ".add_field_button" ); //Add button ID

var x = 1; //initlal text box count
$( add_button ).click( function ( e )
{ //on add input button click
    e.preventDefault();
    // ajax 
    var formData = {
        'type': 1,
        '_token': $('meta[name="csrf-token"]').attr('content')
    };
    $.ajax({
        url: BASE_URL + '/getAjaxAttributes',
        type: 'POST',
        data: formData,
        success: function(res) {
            if ( x < max_fields )
            { //max input box allowed
                x++; //text box increment
               
                $( wrapper ).append(`<div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Attribute</label>
                        <select class="form-control" id="attribute" name="attribute[]" placeholder="Please select attribute">
                            <option value="">-SELECT-</option>
                          ${res}
                        </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Is required</label>
                        <select class="form-control" id="is_required" name="is_required[]">
                            <option value="">-SELECT-</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Is unique</label>
                        <select class="form-control" id="is_unique" name="is_unique[]">
                            <option value="">-SELECT-</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Is comparable</label>
                        <select class="form-control" id="is_comparable" name="is_comparable[]">
                            <option value="">-SELECT-</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>

                    </div>
                </div>



            </div>`); //add input box
            }
        }
    });

   
    
} );

$( wrapper ).on( "click", ".remove_field", function ( e )
{ //user click on remove text
    e.preventDefault(); $( this ).parent( 'div' ).remove(); x--;
} )



//save 

// process the form
$("#saveItemCategory").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
    }).done(function(response){ //
        
        if(response.status==1){
           
                $.gritter.add({
                    title: 'Item Category',
                    text: response.msg
                });
           
        }
		
	});
});


//product tags
$('#tags').select2({
	tags: true,
    data: ["Clare","Cork","South Dublin"],
    tokenSeparators: [','], 
    placeholder: "Add your tags here",
    /* the next 2 lines make sure the user can click away after typing and not lose the new tag */
    selectOnClose: true, 
    closeOnSelect: false
});