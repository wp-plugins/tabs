
jQuery(document).ready(function($)
	{
		
		
		$(document).on('click', '.tab-nav li', function()
			{
				$(".active").removeClass("active");
				$(this).addClass("active");
				
				var nav = $(this).attr("nav");
				
				$(".box li.tab-box").css("display","none");
				$(".box"+nav).css("display","block");
		
			})
		
		
		
		
		$(document).on('click', '.tabs_content_source', function()
			{	
				var source = $(this).val();
				var source_id = $(this).attr("id");
				
				$(".content-source-box.active").removeClass("active");
				$(".content-source-box."+source_id).addClass("active");
				
			})
		
		
		

		$(document).on('click', '.tabs-content-buttons .add-tabs', function()
			{	
				
				var row = $(".tabs-content tr:last-child").attr("index");
				
				
				if($.isNumeric(row))
					{
						var row = parseInt(row)+1;
						
					}

				else
					{
						var row = 0;
					}
				
				
				$(".tabs-content").append('<tr index="'+row+'" valign="top"><td style="vertical-align:middle;"><span class="removeTabs">X</span><br/><br/><input width="100%" placeholder="Tabs Header" type="text" name="tabs_content_title['+row+']" value="" /><br /><br /><textarea placeholder="Tabs Content" name="tabs_content_body['+row+']" ></textarea></td></tr>');
				
			})	
		
		
		
		$(document).on('click', '#tabs_metabox .removeTabs', function()
			{	
				
				$(this).parent().parent().remove();
				
				
				
			})	
	
 		

	});	







