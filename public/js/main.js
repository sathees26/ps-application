// var close_button = document.querySelector(".close-button");
// var social_buttons = document.querySelectorAll(".social");

// close_button.addEventListener('click',()=>{
//    social_buttons.forEach(function(buttons){
//        buttons.classList.toggle('hide');
//    });
// });



// bootstrap card
document.addEventListener("DOMContentLoaded", function (event) {


    const cartButtons = document.querySelectorAll('.cart-button');

    cartButtons.forEach(button => {

        button.addEventListener('click', cartClick);

    });

    function cartClick() {
        let button = this;
        button.classList.add('clicked');
    }



});
// bootstap card


// bootstap card details
function changeImage(element) {

    var main_prodcut_image = document.getElementById('main_product_image');
    main_prodcut_image.src = element.src;


}
// bootstap card details end


// details pagefunction changeImage(element) {


// details page end

// product details
const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

// product details end


//preloader//
setTimeout(function () {
    $('.loader-bg').fadeToggle();
}, 1000);



//   $(document).ready(function () {
//     $(".video-gallery").magnificPopup({
//       delegate: "a",
//       type: "iframe",
//       gallery: {
//         enabled: true
//       }
//     });
//   });


$
    (document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });


// navbar-x //

function myFunction(x) {
    x.classList.toggle("change");
}

$(document).ready(function () {
    $('img.img-width').on('click', function () {
        var image = $(this).attr('src');
        var captions = $(this).attr('alt');
        var youtube = $(this).data("youtube");
        var capts = decodeURIComponent(captions);
        var youtubevideo = decodeURIComponent(youtube);
        $('#myModal').on('show.bs.modal', function () {
            $(".showimage").attr("src", image);
            $("#showcaption").text(decodeURIComponent(capts.replace(/\+/g, ' ')));
            var link = $("<a>");
            link.attr("href", youtubevideo);
            link.attr("title", "Videos");
            link.attr("target", "_blank");
            link.text("Youtube Videos");
            link.addClass("link");
            if (youtubevideo != '') {
                //$("#showvideo").html(link);
                $("#showvideo").html(link);
            } else {
                $("#showvideo").hide();
            }
        });
    });
});
//$('input[type="number"]').keypress(function(){
$(document).ready(function () {
    $("input.form-control.tg").on("keypress", function (e) {
        if (event.keyCode == 13) {
            event.keyCode = 9;
        }
    });
});
$(window).on('scroll', function () {
    console.log('test');
    if ($(this).scrollTop() >= 250) { // Set position from top to add class
        $('#showdis').addClass('total-appear');
        var hT = $('#scroll-to').offset().top,
            hH = $('#scroll-to').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        //console.log((hT-wH) , wS);
        if (wS > (hT + hH - wH)) {
            //alert('you have scrolled to the h1!');
            $('#showdis').removeClass('total-appear');
        }
    } else {
        $('#showdis').removeClass('total-appear');
    }
});

///////////////////////////////////







