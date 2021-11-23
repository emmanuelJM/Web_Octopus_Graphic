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
  
  $(document).on('click','.hb-ratingbar', setRatingValue);


//Product Image

const imgContElm = document.querySelector('.img-container');
const imgElm = document.querySelector('.img-container img');
const listProductsElm = document.querySelector('.list-products');

// Precentage Of The Zoom:

const ZOOM = 300;

// Event Mouse Enter:

imgContElm.addEventListener('mouseenter', function () {
  
  imgElm.style.width = ZOOM + '%';
  
});

// Event Mouse Leave:

imgContElm.addEventListener('mouseleave', function () {
  
  imgElm.style.width = '100%';
  imgElm.style.top = '0';
  imgElm.style.left = '0';
  
});

// Event Mouse Move:
// Change position of the big image, depends on the position of the cursor in the Container Of image.

imgContElm.addEventListener('mousemove', function (mouseEvent) {
  
  let obj = imgContElm;
  let obj_left = 0;
  let obj_top = 0;
  let xpos;
  let ypos;

  while (obj.offsetParent) {
    obj_left += obj.offsetLeft;
    obj_top += obj.offsetTop;
    obj = obj.offsetParent;
  }
  
  if (mouseEvent) {
    //FireFox
    xpos = mouseEvent.pageX;
    ypos = mouseEvent.pageY;
  } else {
    //IE
    xpos = window.event.x + document.body.scrollLeft - 2;
    ypos = window.event.y + document.body.scrollTop - 2;
  }

  xpos -= obj_left;
  ypos -= obj_top;
  
  const imgWidth = imgElm.clientWidth;
  const imgHeight = imgElm.clientHeight;

  imgElm.style.top = -(((imgHeight - this.clientHeight) * ypos) / this.clientHeight) + 'px';
  imgElm.style.left = -(((imgWidth - this.clientWidth) * xpos) / this.clientWidth) + 'px';
     
});

// Change Height Of The Image Container:

function changeHeight() {

    imgContElm.style.height = imgContElm.clientWidth + 'px';
  
}
changeHeight();
  
// Change Height:

window.addEventListener('resize', changeHeight);