$(document).ready(function ()
{
   
        //alert('aaaa');
		var leftCol = $.cookie('quoteopen');

        if (leftCol != 'open')
        {
            $("#feedback").animate(
            {
                left: -360
            }, 1, "linear", function ()
            {
                $(".button-show").show();
                $(".button-hide").hide();
            });
        }
        else
        {
            $("#feedback").animate(
            {
                left: 0
            }, 1000, "linear", function ()
            {
                $(".button-show").hide();
                $(".button-hide").show();
            });
        }


        $(".button-show").click(function ()
        {
            $("#feedback").animate(
            {
                left: 0
            }, 1000, "linear", function ()
            {
                $(".button-show").hide();
                $(".button-hide").show();
            });

            $.cookie("quoteopen", "open");

        });



        $(".button-hide").click(function ()
        {
            $("#feedback").animate(
            {
                left: -360
            }, 1000, "linear", function ()
            {
                $(".button-show").show();
                $(".button-hide").hide();
            });

            $.cookie("quoteopen", "close");
        });
//-----------------
//------------------------------
    //var pathname = window.location.pathname; 
    //alert('Path : '+ pathname +'Path : '+ window.location.hostname );
    var activeTab = $.cookie('selectTab');

    if (activeTab == "iphone")
    {
       // alert('444 : Iphone   ori : '+ activeTab);

        $(".tab-body-1").hide();
        $(".tab-body-2").show();
        $("#tab-body-1-nav").hide();
        $("#tab-body-2-nav").show();

        $("#slide-next-web").hide();
        $("#slide-next-iphone").show();
        $("#slide-prev-web").hide();
        $("#slide-prev-iphone").show();


        $("#nav-portfolio-web-full").hide();
        $("#nav-portfolio-iphone-full").show();
        $('.tab-head-1').addClass('normal-web');
        $('.tab-head-2').addClass('selected-iphone');

    }
    else
    {

		
		//alert('444 : ind WEB   ori : '+ activeTab);

        $(".tab-body-2").hide();
        $("#tab-body-2-nav").hide();

        $("#slide-next-web").show();
        $("#slide-next-iphone").hide();
        $("#slide-prev-web").show();
        $("#slide-prev-iphone").hide();

        $(".tab-body-1").show();
        $("#tab-body-1-nav").show();
        $("#nav-portfolio-web-full").show();
        $("#nav-portfolio-iphone-full").hide();
        $('.tab-head-1').addClass('selected-web');
        $('.tab-head-2').addClass('normal-iphone');

    }

    $('.tab-head-1').mouseover(function ()
    {
        $('.tab-head-1').css(
        {
            'cursor': 'hand'
        });
    });
    $('.tab-head-2').mouseover(function ()
    {
        $('.tab-head-2').css(
        {
            'cursor': 'hand'
        });
    });

    $('.tab-head-1').click(function ()
    {
        $.cookie('selectTab', "web");
        var activeTab = $.cookie('selectTab');
        //alert('11 : '+ activeTab);
        $(".tab-body-2").hide();
        $("#tab-body-2-nav").hide();

        $("#slide-next-web").show();
        $("#slide-next-iphone").hide();
        $("#slide-prev-web").show();
        $("#slide-prev-iphone").hide();

        $(".tab-body-1").show();
        $("#tab-body-1-nav").show();
        $("#nav-portfolio-web-full").show();
        $("#nav-portfolio-iphone-full").hide();
        $('.tab-head-1').removeClass('normal-web').addClass('selected-web');
        $('.tab-head-2').removeClass('selected-iphone').addClass('normal-iphone');

    });
    $('.tab-head-2').click(function ()
    {
        //alert($(".register-ind-holder"));
        $.cookie("selectTab", "iphone", {
            path: '/'
        });
        var activeTab = $.cookie('selectTab');
        $(".tab-body-1").hide();
        $(".tab-body-2").show();
        $("#tab-body-1-nav").hide();
        $("#tab-body-2-nav").show();

        $("#slide-next-web").hide();
        $("#slide-next-iphone").show();
        $("#slide-prev-web").hide();
        $("#slide-prev-iphone").show();


        $("#nav-portfolio-web-full").hide();
        $("#nav-portfolio-iphone-full").show();
        $('.tab-head-1').removeClass('selected-web').addClass('normal-web');
        $('.tab-head-2').removeClass('normal-iphone').addClass('selected-iphone');

    });

//--------------

 });

    


