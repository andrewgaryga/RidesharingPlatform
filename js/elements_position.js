// $(window).resize(function(){
//         // alert("Height of div: " + $("div").height());
//         // console.log ($(".benefits").height());
//         // x = $(".benefits").height() * 0.14;
//         // console.log (x);
//         // $(".btn-success").css("margin-top", x);
//         x = $(".benefits").height();
//         console.log (x);
//         $(".no-title").css("height", x);
// });

$(window).on("resize", function () {
    if ( $(window).width() > 992) { 
	    x = $(".benefits").height();
	    console.log (x);
	    $(".no-title").css("height", x);
    }
    else {
  		$(".no-title").css("height", "auto");
	}
}).resize();