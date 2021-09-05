// Custom Script
jQuery(function() {

	// Wp Media
	jQuery("#btnImage").on("click", function(){
		var images = wp.media({
			title: "Upload Image",
			multiple: false
		}).open().on("select", function(e) {
			var uploadedImages = images.state().get("selection").first();
			// var seletedImage = uploadedImages.toJSON();
			// jQuery.each(seletedImage, function(index, image){
			// 	console.log(image.url);
			// });
			var selectedImage = uploadedImages.toJSON(); 
			//console.log(selectedImage.title+"  "+selectedImage.url+"  "+selectedImage.filename);
			// selectedImage.map(function(image){
			// 	var itemDetails = image.toJSON();
			// 	console.log(itemDetails.url);
			// });
			jQuery("#getImage").attr("src",selectedImage.url);
		});
	});

	// Other Ajax Request
	jQuery("#frmPostOtherPage").validate({
		submitHandler:function() {
			//console.log("form Pass");
			var post_data = jQuery("#frmPostOtherPage").serialize()+"&action=custom_ajax_req";
			jQuery.post(ajaxurl,post_data,function(response) {
				//console.log(response);
				var data = jQuery.parseJSON(response);
				console.log("Name : "+data.txtName+" Email : "+data.txtEmail+" Phone : "+data.txtPhone);
			});
		}
	});

	// jQuery("#frmPostOtherPage").on("click", function(e){
	// 	e.preventDefault();
	// 	jQuery.post(ajaxurl,{action:"custom_plugin",name:"Aqib", tut:"AJ Creation"}, function(response){
	// 		console.log(response);
	// 	});
	// });

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