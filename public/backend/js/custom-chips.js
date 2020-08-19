$(function() {

    function countryFunction(){

    	$('.tag-chips, .oldtag').chips({
    	    placeholder: 'Enter a tag',
    	    readOnly: true,
    	});
    	
    	$('#addnew input[name=name]').keyup(function(){
    	    var tagval = $(this).val();
    	    $.ajax({
    	        url: '{{URL('tag/search')}}',
    	        method : 'GET',
    	        data: {'s': tagval},
    	        success: function(chipdata){
    	            // var chip = {
    	            //     tag: data,
    	            //     image: '', //optional
    	            // };
    	            if (chipdata) {
    	                // console.log(chipdata);

    	                $('.tag-chips').chips({
    	                    data: chipdata,
    	                    limit: 1,
    	                    minLength: 1,
    	                    onChipAdd: function () {
    	                        val = this.chipsData;
    	                        // console.log(val);

    	                    },
    	                    onChipDelete: function() {
    	                        val = this.chipsData;
    	                        // console.log(val);
    	                    }
    	                });
    	            }

    	        }
    	    });
    	    
    	});

    	//edit 
	    $('.edit-btn').click(function(){
	        var id = $(this).attr('href');
	        var tagdata = $(id).find('.oldtagname').attr('spantagname');
	        var chip = {
	            tag: tagdata,
	            image: '', //optional
	        };
	        $(id+' .oldtag').chips({
	            placeholder: 'Enter a tag',
	            data: [chip],
	            limit: 1,
	            minLength: 1,
	        });
	    });

    	$('form').submit(function(e){
    	    // e.preventDefault();
    	    // console.log();
    	    var chipsArr = [];
    	    var chipis = M.Chips.getInstance($(this).find('.chips')).chipsData;
    	    if (chipis.length < 1) {
    	        return false;
    	    }
    	    var inputData = [];
    	    for (let index = 0; index < chipis.length; index++) {
    	        inputData += '<input name="tag" type="hidden" value="'+chipis[index].tag +'" />';
    	        $(this).find('.alltages').html(inputData);
    	    }
    	    // console.log(chipsArr);
    	});
    }
}