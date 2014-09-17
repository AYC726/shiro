$( "a.opener" ).click(function() {
		var source = $(this),
			page = source.attr('dir'),
			title = source.attr('title'),
			windowHeight = source.attr('rel'); 
		$( "#dialog" ).load (page).dialog ({
			modal: true,
			autoOpen: false,
			show: {
				effect: "blind",
				duration: 400
			},
			hide: {
				effect: "blind",
				duration: 400
			},
			minWidth: 500,
			maxWidth: 900,
			maxHeight: 600,
		 	title : title,
			height: windowHeight
		});
				
		 $( "#dialog" ).dialog('open');
		 
		setTimeout(1000);	
		//e.preventDefault();
		return false;
				
	});