$('#myCarousel').carousel();
	
var clickEvent = false;
$('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');		
}).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
        var count = $('.nav').children().length -1;
        var current = $('.nav li.active');
        current.removeClass('active').next().addClass('active');
        var id = parseInt(current.data('slide-to'));
        if(count == id) {
            $('.nav li').first().addClass('active');	
        }
    }
    clickEvent = false;
});


var changeTeamMemberName = function(slick) {
 	var slideCounter = slick.currentSlide;
    $('#member'+slideCounter).css('opacity', '0');
	setTimeout(function(){ $('#member'+slideCounter).hide(); }, 500);
}


var changeTeamMemberName2 = function(slick) {
    var slideCounter = slick.currentSlide;
    $('#member'+slideCounter).show();
    $('#member'+slideCounter).css('opacity', '1');
}



$(document).ready(function(){
$('.slick-track').slick({
    arrows: true,
    centerMode: true,
    centermargin: '80px',
    centerPadding:'5px',
    dots: false,
    focusOnSelect: true,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 3500,
    onBeforeChange: changeTeamMemberName,
    onAfterChange: changeTeamMemberName2,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: true,
                centerMode: true,
                slidesToShow: 3,
                infinite: true
            }
    },
        {
            breakpoint: 1000,
            settings: {
                arrows: true,
                centerMode: true,
                slidesToShow: 1,
                infinite: true
            }
    },
        {
            breakpoint: 400,
            settings: {
                arrows: true,
                centerMode: true,
                slidesToShow: 1,
                infinite: true,
                centermargin: '20px',
            }
    }
    ],
});

	$('#member0').show();
	$('#member0').css('opacity','1');
	//$('body').on('swipeleft', function() {
	//	console.log('goto '+$('body').data('nextpage'))
	//	window.location.href = $('body').data('nextpage');
	//});
	//$('body').on('swiperight', function() {
	//	console.log('goto '+$('body').data('previouspage'))
	//	window.location.href = $('body').data('previouspage');
	//});

	// disable ajax loading and loading message of jquery mobile
	$.mobile.ajaxEnabled=false;
	$.mobile.loading().hide();
});

function activate(nav, id){
    $(nav).parent().find('.item').each(function(key,value){ $(this).removeClass("active");});
    $(nav).addClass('active');

    //slide left
	$(id).closest('.horizontal-container').height($(id).find('.block').height() + 120)
    $(id).closest('.window').find('.holder').each(function(key, value){
        if($(this) != $(id)) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                if($(id).index() > $(this).index()){
                    $(this).css('left', '-100%')
                }else{
                    $(this).css('left', '100%')
                }
            }
        }
    });
    $(id).addClass('active')



}