$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

});

// Portfolio Filter Gallery

//Work in Progress

$(document).ready(function(){

    $(".filter-Graphic-Design").click(function(){
        $('.col-My-Work-1').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-2').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-3').removeClass('col-My-Work-deactivated');
        $('.pagination').addClass('pagination-deactivated');
        $(".WebDesign, .Illustration").fadeOut(200);
        $(".GraphicDesign").fadeIn(200);
        $('.col-filter-category-Graphic-Design').addClass('activo-filter');
        $('.col-filter-category-Web-Design').removeClass('activo-filter');
        $('.col-filter-category-Illustration').removeClass('activo-filter');
        $('.col-filter-category-all').removeClass('activo-filter');
    });

    $(".filter-Web-Design").click(function(){
        $('.col-My-Work-1').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-2').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-3').removeClass('col-My-Work-deactivated');
        $('.pagination').addClass('pagination-deactivated');
        $(".Illustration, .GraphicDesign").fadeOut(200);
        $(".WebDesign").fadeIn(200);
        $('.col-filter-category-Web-Design').addClass('activo-filter');
        $('.col-filter-category-Graphic-Design').removeClass('activo-filter');
        $('.col-filter-category-Illustration').removeClass('activo-filter');
        $('.col-filter-category-all').removeClass('activo-filter');
    });

    $(".filter-Illustration").click(function(){
        $('.col-My-Work-1').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-2').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-3').removeClass('col-My-Work-deactivated');
        $('.pagination').addClass('pagination-deactivated');
        $(".GraphicDesign, .WebDesign").fadeOut(200);
        $(".Illustration").fadeIn(200);
        $('.col-filter-category-Illustration').addClass('activo-filter');
        $('.col-filter-category-Web-Design').removeClass('activo-filter');
        $('.col-filter-category-Graphic-Design').removeClass('activo-filter');
        $('.col-filter-category-all').removeClass('activo-filter');
    });

    $(".filter-all").click(function(){
        $(".GraphicDesign  , .WebDesign, .Illustration").fadeIn(200);
        $('.col-filter-category-all').addClass('activo-filter');
        $('.col-filter-category-Web-Design').removeClass('activo-filter');
        $('.col-filter-category-Illustration').removeClass('activo-filter');
        $('.col-filter-category-Graphic-Design').removeClass('activo-filter');
        $('.pagination').removeClass('pagination-deactivated');
        $('.col-My-Work-2').addClass('col-My-Work-deactivated');
        $('.col-My-Work-3').addClass('col-My-Work-deactivated');
    });

});

$(document).ready(function(){

    $(".page-item-1").click(function(){
        $('.page-item-1').addClass('active');
        $('.page-item-2').removeClass('active');
        $('.page-item-3').removeClass('active');
        $('.col-My-Work-1').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-2').addClass('col-My-Work-deactivated');
        $('.col-My-Work-3').addClass('col-My-Work-deactivated');
    });

    $(".page-item-2").click(function(){
        $('.page-item-2').addClass('active');
        $('.page-item-1').removeClass('active');
        $('.page-item-3').removeClass('active');
        $('.col-My-Work-2').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-1').addClass('col-My-Work-deactivated');
        $('.col-My-Work-3').addClass('col-My-Work-deactivated');
    });

    $(".page-item-3").click(function(){
        $('.page-item-3').addClass('active');
        $('.page-item-1').removeClass('active');
        $('.page-item-2').removeClass('active');
        $('.col-My-Work-3').removeClass('col-My-Work-deactivated');
        $('.col-My-Work-1').addClass('col-My-Work-deactivated');
        $('.col-My-Work-2').addClass('col-My-Work-deactivated');
    });
    
});

//AOS Animate

AOS.init();

//Rating
 
function setRatingValue(e) {
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left; //x position within the element.
    var width = rect.right - rect.left; // element width
    var rate = Math.round(((x*10)/width))/2
    $(this).attr('data-rated', rate);
  }
  
  $(document).on('click','.hb-ratingbar', setRatingValue)