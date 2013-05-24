$( function($) {
	//nav function
    $('#nav  ul li').hover( 
            function() {
                    $(this).children('ul').show("normal");       
            },
            function() {
                    $(this).children('ul').hide("normal");       
            }
            );
    $('#nav ul li ul li').hover( 
            function() {
                    $(this).children('ul').show("normal");       
            },
            function() {
                    $(this).children('ul').hide("normal");       
            }
            );
    $('#nav ul li ul li ul li').hover( 
            function() {
                    $(this).children('ul').show("normal");       
            },
            function() {
                    $(this).children('ul').hide("normal");       
            }
            );
	//table odd row class
    $('tr:odd').addClass("odd-row"); 
	//ajax more link	
	$(".more-link").live('click', function(e){
		  e.preventDefault();
	  var link = $(this);
	  $.post(link.attr("href"), {
		  post_expander: 1
		}, function(data) {
		  link.parents(".post-content").html($(data));
		}
	  );
	  return false;
	});
	//random background color
	var box = $('.box');
	var cls = ['green','yellow','orange','blue','purple'];
	randomClass(box,cls,3);
	var widget = $('#sidebar .widget-container');
	randomClass(widget,cls,2);
	var d = $('.post-footer div');
	randomClass(d,cls,1);
	//end
})

/**
*add random Class to jq obj
*/
function randomClass(res,cls,fix) {
	var len = res.length;
	var lenCls = cls.length;
	var r =Math.floor(Math.random() * lenCls) + fix;
	for(var i = 0; i < len; i++) {
		var j = ( r + i ) % ( lenCls - 1 );
		res.eq(i).addClass(cls[j]);
	}
}