$(document).ready(function(){

    $(".menu-services").click(function(){
        if ($(".services").css("display") == "none")
            $(".services").css("display", "block");
        else
            $(".services").css("display", "none");

        if ($(".services-mobile").css("display") == "none")
            $(".services-mobile").css("display", "block");
        else
            $(".services-mobile").css("display", "none");

        if ($(".services-mobile-blog").css("display") == "none")
            $(".services-mobile-blog").css("display", "block");
        else
            $(".services-mobile-blog").css("display", "none");
    });

    $(".services-close-icon").click(function(){
        $(".services").css("display", "none");
        $(".services-mobile").css("display", "none");
        $(".services-mobile-blog").css("display", "none");
    });

    $(".menu-order").click(function(){
        if ($(".order").css("display") == "none")
            $(".order").css("display", "block");
        else
            $(".order").css("display", "none");
    });

    $(".order-close-icon").click(function(){
        $(".order").css("display", "none");
    });

    function galleryVisibility(display)
    {
        $("#gallery-bg").css("display", display);
        $("#gallery-bg-mobile").css("display", display);
        $(".gallery-window-bg").css("display", display);
        $(".gallery-window-bg-mobile").css("display", display);
        $(".gallery-close-icon").css("display", display);
        $(".gallery-close-icon-mobile").css("display", display);
        $(".gallery-photo").css("display", display);
        $(".gallery-photo-mobile").css("display", display);
        $(".gallery-next").css("display", display);
        $(".gallery-next-mobile").css("display", display);
        $(".gallery-previous").css("display", display);
        $(".gallery-previous-mobile").css("display", display);
    }

    function showIcons()
    {
        for (let i=-27;i<=32;i++)
        {
            if (parseInt($(".gallery-icon"+i).css("margin-left"))<-150 || parseInt($(".gallery-icon"+i).css("margin-left"))>950)
            {
                $(".gallery-icon"+i).css("display", "none");
            }
            else
            {
                $(".gallery-icon"+i).css("display", "block");
            }
            if (parseInt($(".gallery-icon"+i+"-mobile").css("margin-left"))<-150 || parseInt($(".gallery-icon"+i+"-mobile").css("margin-left"))>700)
            {
                $(".gallery-icon"+i+"-mobile").css("display", "none");
            }
            else
            {
                $(".gallery-icon"+i+"-mobile").css("display", "block");
            }
        }
    }

    function hideIcons()
    {
        for (let i=-27;i<=32;i++)
        {
            $(".gallery-icon"+i).css("display", "none");

            $(".gallery-icon"+i+"-mobile").css("display", "none");
        }
    }

    $(".more-photo").click(function(){
        galleryVisibility("block");
        showIcons();
    });

    $(".more-photo-mobile").click(function(){
        galleryVisibility("block");
        showIcons();
    });

    $(".gallery-close-icon").click(function(){
        galleryVisibility("none");
        hideIcons();
    });

    $(".gallery-close-icon-mobile").click(function(){
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

    function iconsMagnify(i, width, marginLeft)
    {
        let photoSmallHover = $(".gallery-icon"+i).css("background-image");
        let photoMedium = photoSmallHover.replace("smallhover", "medium");
        photoMedium = photoMedium.replace("png", "jpg");
        $(".gallery-photo").css("background-image", photoMedium);
        $(".gallery-photo").css("width", width);
        $(".gallery-photo").css("margin-left", marginLeft);
    }

    function iconsMagnifyMobile(i, width, marginLeft)
    {
        let photoSmallHover = $(".gallery-icon"+i+"-mobile").css("background-image");
        let photoMobile = photoSmallHover.replace("smallhover", "mobile");
        photoMobile = photoMobile.replace("png", "jpg");
        $(".gallery-photo-mobile").css("background-image", photoMobile);
        $(".gallery-photo-mobile").css("width", width);
        $(".gallery-photo-mobile").css("margin-left", marginLeft);
    }

    $(".gallery-icon-27").click(function(){
        iconsMagnify(-27, "883px", "25px");
    });

    $(".gallery-icon-27-mobile").click(function(){
        iconsMagnifyMobile(-27, "700px", "0px");
    });

    $(".gallery-icon-26").click(function(){
        iconsMagnify(-26, "883px", "25px");
    });

    $(".gallery-icon-26-mobile").click(function(){
        iconsMagnifyMobile(-26, "700px", "0px");
    });

    $(".gallery-icon-25").click(function(){
        iconsMagnify(-25, "883px", "25px");
    });

    $(".gallery-icon-25-mobile").click(function(){
        iconsMagnifyMobile(-25, "700px", "0px");
    });

    $(".gallery-icon-24").click(function(){
        iconsMagnify(-24, "883px", "25px");
    });

    $(".gallery-icon-24-mobile").click(function(){
        iconsMagnifyMobile(-24, "700px", "0px");
    });

    $(".gallery-icon-23").click(function(){
        iconsMagnify(-23, "883px", "25px");
    });

    $(".gallery-icon-23-mobile").click(function(){
        iconsMagnifyMobile(-23, "700px", "0px");
    });

    $(".gallery-icon-22").click(function(){
        iconsMagnify(-22, "883px", "25px");
    });

    $(".gallery-icon-22-mobile").click(function(){
        iconsMagnifyMobile(-22, "700px", "0px");
    });

    $(".gallery-icon-21").click(function(){
        iconsMagnify(-21, "883px", "25px");
    });

    $(".gallery-icon-21-mobile").click(function(){
        iconsMagnifyMobile(-21, "700px", "0px");
    });

    $(".gallery-icon-20").click(function(){
        iconsMagnify(-20, "883px", "25px");
    });

    $(".gallery-icon-20-mobile").click(function(){
        iconsMagnifyMobile(-20, "700px", "0px");
    });

    $(".gallery-icon-19").click(function(){
        iconsMagnify(-19, "883px", "25px");
    });

    $(".gallery-icon-19-mobile").click(function(){
        iconsMagnifyMobile(-19, "700px", "0px");
    });

    $(".gallery-icon-18").click(function(){
        iconsMagnify(-18, "883px", "25px");
    });

    $(".gallery-icon-18-mobile").click(function(){
        iconsMagnifyMobile(-18, "700px", "0px");
    });

    $(".gallery-icon-17").click(function(){
        iconsMagnify(-17, "883px", "25px");
    });

    $(".gallery-icon-17-mobile").click(function(){
        iconsMagnifyMobile(-17, "700px", "0px");
    });

    $(".gallery-icon-16").click(function(){
        iconsMagnify(-16, "883px", "25px");
    });

    $(".gallery-icon-16-mobile").click(function(){
        iconsMagnifyMobile(-16, "700px", "0px");
    });

    $(".gallery-icon-15").click(function(){
        iconsMagnify(-15, "883px", "25px");
    });

    $(".gallery-icon-15-mobile").click(function(){
        iconsMagnifyMobile(-15, "700px", "0px");
    });

    $(".gallery-icon-14").click(function(){
        iconsMagnify(-14, "883px", "25px");
    });

    $(".gallery-icon-14-mobile").click(function(){
        iconsMagnifyMobile(-14, "700px", "0px");
    });

    $(".gallery-icon-13").click(function(){
        iconsMagnify(-13, "883px", "25px");
    });

    $(".gallery-icon-13-mobile").click(function(){
        iconsMagnifyMobile(-13, "700px", "0px");
    });

    $(".gallery-icon-12").click(function(){
        iconsMagnify(-12, "883px", "25px");
    });

    $(".gallery-icon-12-mobile").click(function(){
        iconsMagnifyMobile(-12, "700px", "0px");
    });

    $(".gallery-icon-11").click(function(){
        iconsMagnify(-11, "883px", "25px");
    });

    $(".gallery-icon-11-mobile").click(function(){
        iconsMagnifyMobile(-11, "700px", "0px");
    });

    $(".gallery-icon-10").click(function(){
        iconsMagnify(-10, "883px", "25px");
    });

    $(".gallery-icon-10-mobile").click(function(){
        iconsMagnifyMobile(-10, "700px", "0px");
    });

    $(".gallery-icon-9").click(function(){
        iconsMagnify(-9, "883px", "25px");
    });

    $(".gallery-icon-9-mobile").click(function(){
        iconsMagnifyMobile(-9, "700px", "0px");
    });

    $(".gallery-icon-8").click(function(){
        iconsMagnify(-8, "883px", "25px");
    });

    $(".gallery-icon-8-mobile").click(function(){
        iconsMagnifyMobile(-8, "700px", "0px");
    });

    $(".gallery-icon-7").click(function(){
        iconsMagnify(-7, "883px", "25px");
    });

    $(".gallery-icon-7-mobile").click(function(){
        iconsMagnifyMobile(-7, "700px", "0px");
    });

    $(".gallery-icon-6").click(function(){
        iconsMagnify(-6, "883px", "25px");
    });

    $(".gallery-icon-6-mobile").click(function(){
        iconsMagnifyMobile(-6, "700px", "0px");
    });

    $(".gallery-icon-5").click(function(){
        iconsMagnify(-5, "883px", "25px");
    });

    $(".gallery-icon-5-mobile").click(function(){
        iconsMagnifyMobile(-5, "700px", "0px");
    });

    $(".gallery-icon-4").click(function(){
        iconsMagnify(-4, "883px", "25px");
    });

    $(".gallery-icon-4-mobile").click(function(){
        iconsMagnifyMobile(-4, "700px", "0px");
    });

    $(".gallery-icon-3").click(function(){
        iconsMagnify(-3, "883px", "25px");
    });

    $(".gallery-icon-3-mobile").click(function(){
        iconsMagnifyMobile(-3, "700px", "0px");
    });

    $(".gallery-icon-2").click(function(){
        iconsMagnify(-2, "883px", "25px");
    });

    $(".gallery-icon-2-mobile").click(function(){
        iconsMagnifyMobile(-2, "700px", "0px");
    });

    $(".gallery-icon-1").click(function(){
        iconsMagnify(-1, "883px", "25px");
    });

    $(".gallery-icon-1-mobile").click(function(){
        iconsMagnifyMobile(-1, "700px", "0px");
    });

    $(".gallery-icon0").click(function(){
        iconsMagnify(0, "883px", "25px");
    });

    $(".gallery-icon0-mobile").click(function(){
        iconsMagnifyMobile(0, "700px", "0px");
    });

    $(".gallery-icon1").click(function(){
        iconsMagnify(1, "393px", "265px");
    });

    $(".gallery-icon1-mobile").click(function(){
        iconsMagnifyMobile(1, "312px", "180px");
    });

    $(".gallery-icon2").click(function(){
        iconsMagnify(2, "883px", "25px");
    });

    $(".gallery-icon2-mobile").click(function(){
        iconsMagnifyMobile(2, "700px", "0px");
    });

    $(".gallery-icon3").click(function(){
        iconsMagnify(3, "393px", "265px");
    });

    $(".gallery-icon3-mobile").click(function(){
        iconsMagnifyMobile(3, "312px", "180px");
    });

    $(".gallery-icon4").click(function(){
        iconsMagnify(4, "883px", "25px");
    });

    $(".gallery-icon4-mobile").click(function(){
        iconsMagnifyMobile(4, "700px", "0px");
    });

    $(".gallery-icon5").click(function(){
        iconsMagnify(5, "883px", "25px");
    });

    $(".gallery-icon5-mobile").click(function(){
        iconsMagnifyMobile(5, "700px", "0px");
    });

    $(".gallery-icon6").click(function(){
        iconsMagnify(6, "883px", "25px");
    });

    $(".gallery-icon6-mobile").click(function(){
        iconsMagnifyMobile(6, "700px", "0px");
    });

    $(".gallery-icon7").click(function(){
        iconsMagnify(7, "883px", "25px");
    });

    $(".gallery-icon7-mobile").click(function(){
        iconsMagnifyMobile(7, "700px", "0px");
    });

    $(".gallery-icon8").click(function(){
        iconsMagnify(8, "883px", "25px");
    });

    $(".gallery-icon8-mobile").click(function(){
        iconsMagnifyMobile(8, "700px", "0px");
    });

    $(".gallery-icon9").click(function(){
        iconsMagnify(9, "883px", "25px");
    });

    $(".gallery-icon9-mobile").click(function(){
        iconsMagnifyMobile(9, "700px", "0px");
    });

    $(".gallery-icon10").click(function(){
        iconsMagnify(10, "883px", "25px");
    });

    $(".gallery-icon10-mobile").click(function(){
        iconsMagnifyMobile(10, "700px", "0px");
    });

    $(".gallery-icon11").click(function(){
        iconsMagnify(11, "883px", "25px");
    });

    $(".gallery-icon11-mobile").click(function(){
        iconsMagnifyMobile(11, "700px", "0px");
    });

    $(".gallery-icon12").click(function(){
        iconsMagnify(12, "883px", "25px");
    });

    $(".gallery-icon12-mobile").click(function(){
        iconsMagnifyMobile(12, "700px", "0px");
    });

    $(".gallery-icon13").click(function(){
        iconsMagnify(13, "883px", "25px");
    });

    $(".gallery-icon13-mobile").click(function(){
        iconsMagnifyMobile(13, "700px", "0px");
    });

    $(".gallery-icon14").click(function(){
        iconsMagnify(14, "883px", "25px");
    });

    $(".gallery-icon14-mobile").click(function(){
        iconsMagnifyMobile(14, "700px", "0px");
    });

    $(".gallery-icon15").click(function(){
        iconsMagnify(15, "883px", "25px");
    });

    $(".gallery-icon15-mobile").click(function(){
        iconsMagnifyMobile(15, "700px", "0px");
    });

    $(".gallery-icon16").click(function(){
        iconsMagnify(16, "883px", "25px");
    });

    $(".gallery-icon16-mobile").click(function(){
        iconsMagnifyMobile(16, "700px", "0px");
    });

    $(".gallery-icon17").click(function(){
        iconsMagnify(17, "883px", "25px");
    });

    $(".gallery-icon17-mobile").click(function(){
        iconsMagnifyMobile(17, "700px", "0px");
    });

    $(".gallery-icon18").click(function(){
        iconsMagnify(18, "883px", "25px");
    });

    $(".gallery-icon18-mobile").click(function(){
        iconsMagnifyMobile(18, "700px", "0px");
    });

    $(".gallery-icon19").click(function(){
        iconsMagnify(19, "883px", "25px");
    });

    $(".gallery-icon19-mobile").click(function(){
        iconsMagnifyMobile(19, "700px", "0px");
    });

    $(".gallery-icon20").click(function(){
        iconsMagnify(20, "883px", "25px");
    });

    $(".gallery-icon20-mobile").click(function(){
        iconsMagnifyMobile(20, "700px", "0px");
    });

    $(".gallery-icon21").click(function(){
        iconsMagnify(21, "883px", "25px");
    });

    $(".gallery-icon21-mobile").click(function(){
        iconsMagnifyMobile(21, "700px", "0px");
    });

    $(".gallery-icon22").click(function(){
        iconsMagnify(22, "883px", "25px");
    });

    $(".gallery-icon22-mobile").click(function(){
        iconsMagnifyMobile(22, "700px", "0px");
    });

    $(".gallery-icon23").click(function(){
        iconsMagnify(23, "883px", "25px");
    });

    $(".gallery-icon23-mobile").click(function(){
        iconsMagnifyMobile(23, "700px", "0px");
    });

    $(".gallery-icon24").click(function(){
        iconsMagnify(24, "883px", "25px");
    });

    $(".gallery-icon24-mobile").click(function(){
        iconsMagnifyMobile(24, "700px", "0px");
    });

    $(".gallery-icon25").click(function(){
        iconsMagnify(25, "883px", "25px");
    });

    $(".gallery-icon25-mobile").click(function(){
        iconsMagnifyMobile(25, "700px", "0px");
    });

    $(".gallery-icon26").click(function(){
        iconsMagnify(26, "883px", "25px");
    });

    $(".gallery-icon26-mobile").click(function(){
        iconsMagnifyMobile(26, "700px", "0px");
    });

    $(".gallery-icon27").click(function(){
        iconsMagnify(27, "883px", "25px");
    });

    $(".gallery-icon27-mobile").click(function(){
        iconsMagnifyMobile(27, "700px", "0px");
    });

    $(".gallery-icon28").click(function(){
        iconsMagnify(28, "883px", "25px");
    });

    $(".gallery-icon28-mobile").click(function(){
        iconsMagnifyMobile(28, "700px", "0px");
    });

    $(".gallery-icon29").click(function(){
        iconsMagnify(29, "393px", "265px");
    });

    $(".gallery-icon29-mobile").click(function(){
        iconsMagnifyMobile(29, "312px", "180px");
    });

    $(".gallery-icon30").click(function(){
        iconsMagnify(30, "393px", "265px");
    });

    $(".gallery-icon30-mobile").click(function(){
        iconsMagnifyMobile(30, "312px", "180px");
    });

    $(".gallery-icon31").click(function(){
        iconsMagnify(31, "393px", "265px");
    });

    $(".gallery-icon31-mobile").click(function(){
        iconsMagnifyMobile(31, "312px", "180px");
    });

    $(".gallery-icon32").click(function(){
        iconsMagnify(32, "883px", "25px");
    });

    $(".gallery-icon32-mobile").click(function(){
        iconsMagnifyMobile(32, "700px", "0px");
    });


    function iconsShift(step)
    {
        for (let i=-27;i<=32;i++)
        {
            let icon = parseInt($(".gallery-icon"+i).css("margin-left"))+step;
            $(".gallery-icon"+i).css("margin-left", icon+"px");
        }
        showIcons();
    }

    function iconsShiftMobile(step)
    {
        for (let i=-27;i<=32;i++)
        {
            let icon = parseInt($(".gallery-icon"+i+"-mobile").css("margin-left"))+step;
            $(".gallery-icon"+i+"-mobile").css("margin-left", icon+"px");
        }
        showIcons();
    }

    $(".gallery-previous").click(function(){
        iconsShift(208);
    });

    $(".gallery-previous-mobile").click(function(){
        iconsShiftMobile(208);
    });

    $(".gallery-next").click(function(){
        iconsShift(-208);
    });

    $(".gallery-next-mobile").click(function(){
        iconsShiftMobile(-208);
    });

});
