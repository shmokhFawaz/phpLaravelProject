
var id
function lunch(i)
{
    id=i;
    $('#delete').modal('show');
}


function confirm()
{
   
   $.ajax({
       headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
       url:'/delete',
       data:{
           id_product:id
       },

       method:"get",
       success:function(response){
           location.reload();
       }
   });


}

(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);





