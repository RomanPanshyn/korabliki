$(document).ready(function(){

    function galleryVisibility(display)
    {
        $("#gallery-bg").css("display", display);
        $(".gallery-window-bg").css("display", display);
        $(".gallery-close-icon").css("display", display);
        $(".gallery-photo").css("display", display);
        $(".gallery-next").css("display", display);
        $(".gallery-previous").css("display", display);
    }

    function showIcons()
    {
        for (let i=-27;i<=32;i++)
        {
            if (parseInt($(".gallery-icon"+i).css("margin-left"))<-150 || parseInt($(".gallery-icon"+i).css("margin-left"))>950)
            {
                $(".gallery-icon"+i).css("display", "none");
                $(".gallery-icon"+i+"-bg").css("display", "none");
            }
            else
            {
                $(".gallery-icon"+i).css("display", "block");
                $(".gallery-icon"+i+"-bg").css("display", "block");
            }
        }
    }

    function hideIcons()
    {
        for (let i=-27;i<=32;i++)
        {
            $(".gallery-icon"+i).css("display", "none");
            $(".gallery-icon"+i+"-bg").css("display", "none");
        }
    }

    $(".more-photo").click(function(){
        galleryVisibility("block");
        showIcons();
    });

    $(".gallery-close-icon").click(function(){
        galleryVisibility("none");
        hideIcons();
    });

    $("#idship-image").click(function(){
        if ($("#gallery-bg").css("display") == "none")
        {
            galleryVisibility("block");
            showIcons();
        }
        else
        {
            galleryVisibility("none");
            hideIcons();
        }
    });

    function iconsMangify(i, width, marginLeft)
    {
        let photoSmall = $(".gallery-icon"+i).css("background-image");
        let photoMedium = photoSmall.replace("small", "medium");
        $(".gallery-photo").css("background-image", photoMedium);
        $(".gallery-photo").css("width", width);
        $(".gallery-photo").css("margin-left", marginLeft);
    }

    $(".gallery-icon-27-magnifier").click(function(){
        iconsMangify(-27, "883px", "25px");
    });

    $(".gallery-icon-26-magnifier").click(function(){
        iconsMangify(-26, "883px", "25px");
    });

    $(".gallery-icon-25-magnifier").click(function(){
        iconsMangify(-25, "883px", "25px");
    });

    $(".gallery-icon-24-magnifier").click(function(){
        iconsMangify(-24, "883px", "25px");
    });

    $(".gallery-icon-23-magnifier").click(function(){
        iconsMangify(-23, "883px", "25px");
    });

    $(".gallery-icon-22-magnifier").click(function(){
        iconsMangify(-22, "883px", "25px");
    });

    $(".gallery-icon-21-magnifier").click(function(){
        iconsMangify(-21, "883px", "25px");
    });

    $(".gallery-icon-20-magnifier").click(function(){
        iconsMangify(-20, "883px", "25px");
    });

    $(".gallery-icon-19-magnifier").click(function(){
        iconsMangify(-19, "883px", "25px");
    });

    $(".gallery-icon-18-magnifier").click(function(){
        iconsMangify(-18, "883px", "25px");
    });

    $(".gallery-icon-17-magnifier").click(function(){
        iconsMangify(-17, "883px", "25px");
    });

    $(".gallery-icon-16-magnifier").click(function(){
        iconsMangify(-16, "883px", "25px");
    });

    $(".gallery-icon-15-magnifier").click(function(){
        iconsMangify(-15, "883px", "25px");
    });

    $(".gallery-icon-14-magnifier").click(function(){
        iconsMangify(-14, "883px", "25px");
    });

    $(".gallery-icon-13-magnifier").click(function(){
        iconsMangify(-13, "883px", "25px");
    });

    $(".gallery-icon-12-magnifier").click(function(){
        iconsMangify(-12, "883px", "25px");
    });

    $(".gallery-icon-11-magnifier").click(function(){
        iconsMangify(-11, "883px", "25px");
    });

    $(".gallery-icon-10-magnifier").click(function(){
        iconsMangify(-10, "883px", "25px");
    });

    $(".gallery-icon-9-magnifier").click(function(){
        iconsMangify(-9, "883px", "25px");
    });

    $(".gallery-icon-8-magnifier").click(function(){
        iconsMangify(-8, "883px", "25px");
    });

    $(".gallery-icon-7-magnifier").click(function(){
        iconsMangify(-7, "883px", "25px");
    });

    $(".gallery-icon-6-magnifier").click(function(){
        iconsMangify(-6, "883px", "25px");
    });

    $(".gallery-icon-5-magnifier").click(function(){
        iconsMangify(-5, "883px", "25px");
    });

    $(".gallery-icon-4-magnifier").click(function(){
        iconsMangify(-4, "883px", "25px");
    });

    $(".gallery-icon-3-magnifier").click(function(){
        iconsMangify(-3, "883px", "25px");
    });

    $(".gallery-icon-2-magnifier").click(function(){
        iconsMangify(-2, "883px", "25px");
    });

    $(".gallery-icon-1-magnifier").click(function(){
        iconsMangify(-1, "883px", "25px");
    });

    $(".gallery-icon0-magnifier").click(function(){
        iconsMangify(0, "883px", "25px");
    });

    $(".gallery-icon1-magnifier").click(function(){
        iconsMangify(1, "393px", "265px");
    });

    $(".gallery-icon2-magnifier").click(function(){
        iconsMangify(2, "883px", "25px");
    });

    $(".gallery-icon3-magnifier").click(function(){
        iconsMangify(3, "393px", "265px");
    });

    $(".gallery-icon4-magnifier").click(function(){
        iconsMangify(4, "883px", "25px");
    });

    $(".gallery-icon5-magnifier").click(function(){
        iconsMangify(5, "883px", "25px");
    });

    $(".gallery-icon6-magnifier").click(function(){
        iconsMangify(6, "883px", "25px");
    });

    $(".gallery-icon7-magnifier").click(function(){
        iconsMangify(7, "883px", "25px");
    });

    $(".gallery-icon8-magnifier").click(function(){
        iconsMangify(8, "883px", "25px");
    });

    $(".gallery-icon9-magnifier").click(function(){
        iconsMangify(9, "883px", "25px");
    });

    $(".gallery-icon10-magnifier").click(function(){
        iconsMangify(10, "883px", "25px");
    });

    $(".gallery-icon11-magnifier").click(function(){
        iconsMangify(11, "883px", "25px");
    });

    $(".gallery-icon12-magnifier").click(function(){
        iconsMangify(12, "883px", "25px");
    });

    $(".gallery-icon13-magnifier").click(function(){
        iconsMangify(13, "883px", "25px");
    });

    $(".gallery-icon14-magnifier").click(function(){
        iconsMangify(14, "883px", "25px");
    });

    $(".gallery-icon15-magnifier").click(function(){
        iconsMangify(15, "883px", "25px");
    });

    $(".gallery-icon16-magnifier").click(function(){
        iconsMangify(16, "883px", "25px");
    });

    $(".gallery-icon17-magnifier").click(function(){
        iconsMangify(17, "883px", "25px");
    });

    $(".gallery-icon18-magnifier").click(function(){
        iconsMangify(18, "883px", "25px");
    });

    $(".gallery-icon19-magnifier").click(function(){
        iconsMangify(19, "883px", "25px");
    });

    $(".gallery-icon20-magnifier").click(function(){
        iconsMangify(20, "883px", "25px");
    });

    $(".gallery-icon21-magnifier").click(function(){
        iconsMangify(21, "883px", "25px");
    });

    $(".gallery-icon22-magnifier").click(function(){
        iconsMangify(22, "883px", "25px");
    });

    $(".gallery-icon23-magnifier").click(function(){
        iconsMangify(23, "883px", "25px");
    });

    $(".gallery-icon24-magnifier").click(function(){
        iconsMangify(24, "883px", "25px");
    });

    $(".gallery-icon25-magnifier").click(function(){
        iconsMangify(25, "883px", "25px");
    });

    $(".gallery-icon26-magnifier").click(function(){
        iconsMangify(26, "883px", "25px");
    });

    $(".gallery-icon27-magnifier").click(function(){
        iconsMangify(27, "883px", "25px");
    });

    $(".gallery-icon28-magnifier").click(function(){
        iconsMangify(28, "883px", "25px");
    });

    $(".gallery-icon29-magnifier").click(function(){
        iconsMangify(29, "393px", "265px");
    });

    $(".gallery-icon30-magnifier").click(function(){
        iconsMangify(30, "393px", "265px");
    });

    $(".gallery-icon31-magnifier").click(function(){
        iconsMangify(31, "393px", "265px");
    });

    $(".gallery-icon32-magnifier").click(function(){
        iconsMangify(32, "883px", "25px");
    });


    function iconsShift(step)
    {
        for (let i=-27;i<=32;i++)
        {
            let icon = parseInt($(".gallery-icon"+i).css("margin-left"))+step;
            $(".gallery-icon"+i).css("margin-left", icon+"px");
            let iconbg = parseInt($(".gallery-icon"+i+"-bg").css("margin-left"))+step;
            $(".gallery-icon"+i+"-bg").css("margin-left", iconbg+"px");
            let iconmagnifier = parseInt($(".gallery-icon"+i+"-magnifier").css("margin-left"))+step;
            $(".gallery-icon"+i+"-magnifier").css("margin-left", iconmagnifier+"px");
        }
        showIcons();
    }

    $(".gallery-previous").click(function(){
        iconsShift(200);
    });

    $(".gallery-next").click(function(){
        iconsShift(-200);
    });

});
