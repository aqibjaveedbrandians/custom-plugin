// Custom Script
jQuery(function() {

	jQuery("#frmPostOtherPage").on("click", function(e){
		e.preventDefault();
		jQuery.post(ajaxurl,{action:"custom_plugin",name:"Aqib", tut:"AJ Creation"}, function(response){
			console.log(response);
		});
	});

	jQuery(document).on("click", ".btnClick", function(){
		
		var post_data = "action=custom_plugin_library&param=get_message";
		$.post(ajaxurl, post_data, function(response){
			console.log(response);
		});

	});
	jQuery("#frmPost").validate({
		submitHandler:function(){
			//console.log(jQuery("#frmPost").serialize());
			var post_data = jQuery("#frmPost").serialize()+"&action=custom_plugin_library&param=post_form_data";
			$.post(ajaxurl, post_data, function(response){
			 // console.log("Name: "+response.txtName+"Email: "+response.txtEmail+"Phone: "+response.txtPhone);
			  var data = $.parseJSON(response);
			  console.log(data);
			  console.log("Name: "+data.txtName+" Email: "+data.txtEmail+" Phone: "+data.txtPhone);
			});
		}
	});

});