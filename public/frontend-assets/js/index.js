
$(document).ready(function(){

    $(window).scroll(function(){

      if($(window).scrollTop()>100){
        $('nav').removeClass('position-absolute w-100 mt-5 mt-sm-5');
        $('#nav-con').removeClass('mt-sm-1 mt-4 ');
        $('nav').addClass('fixed-top shadow master-bg');

      }else{
        $('nav').removeClass('fixed-top shadow master-bg');
        $('#nav-con').addClass('mt-sm-1 mt-4');
        $('nav').addClass('position-absolute w-100 mt-5 mt-sm-5');
      }

    });

});

//accordian

  $(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
      $(this).siblings(".card-header").find(".btn i").addClass("fa-minus-circle").removeClass("fa-plus-circle");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
      $(this).parent().find(".card-header .btn i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
    }).on('hide.bs.collapse', function(){
      $(this).parent().find(".card-header .btn i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
    });
  });