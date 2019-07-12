$(document).ready(function(){

    let seoText = $(".seo-text").html();
    $(".footer-seo-output").html(seoText);
    $(".seo-text").html('');

    $(".schedule-time1").change(function(){
        $('.schedule-time1 input:checked').each(function() {
            $(this).parent().css('color', '#d40064');
        });
        $("input:checkbox").click(function() {
            if (!$(this).is(":checked"))
                $(this).parent().css('color', 'black');
        });
    });

    $(".schedule-time2").change(function(){
        $('.schedule-time2 input:checked').each(function() {
            $(this).parent().css('color', '#d40064');
        });
        $("input:checkbox").click(function() {
            if (!$(this).is(":checked"))
                $(this).parent().css('color', 'black');
        });
    });

    $(".btn-continue-order").click(function(){
        let bookTime = [];
        $('.schedule-time1 input:checked').each(function() {
            let time1 = this.value.slice(0, -3);
            bookTime.push(time1);
        });
        $('.schedule-time2 input:checked').each(function() {
            let time2 = this.value.slice(0, -3);
            bookTime.push(time2);
        });
        $("#book-time1").val(bookTime);
        $(".book-time-order").css("display", "none");
    });

    $(".btn-continue").click(function(){
        let bookTime = [];
        $('.schedule-time1 input:checked').each(function() {
            let time1 = this.value.slice(0, -3);
            bookTime.push(time1);
        });
        $('.schedule-time2 input:checked').each(function() {
            let time2 = this.value.slice(0, -3);
            bookTime.push(time2);
        });
        $("#book-time2").val(bookTime);
        $(".book-time-application").css("display", "none");
    });

    $(".btn-continue-admin").click(function(){
        let bookTime = [];
        $('.schedule-time1 input:checked').each(function() {
            let time1 = this.value.slice(0, -3);
            bookTime.push(time1);
        });
        $('.schedule-time2 input:checked').each(function() {
            let time2 = this.value.slice(0, -3);
            bookTime.push(time2);
        });
        $("#book-time3").val(bookTime);
        $(".book-time-admin").css("display", "none");
    });

    $(".bookpagination").change(function(){
        $(".bookpagesizerefresh").click();
    });

    $(".contactpagination").change(function(){
        $(".contactpagesizerefresh").click();
    });

    $(".blogpagination").change(function(){
        $(".blogpagesizerefresh").click();
    });

    $(".servicespagination").change(function(){
        $(".servicespagesizerefresh").click();
    });

    $(".menu-order").click(function(){
        if ($(".order").css("display") == "none")
            $(".order").css("display", "block");
        else
            $(".order").css("display", "none");
    });

    $(".menu-order").click(function(){
        if ($(".order-blog").css("display") == "none")
            $(".order-blog").css("display", "block");
        else
            $(".order-blog").css("display", "none");
    });

    $(".menu-order").click(function(){
        if ($(".order-contact").css("display") == "none")
            $(".order-contact").css("display", "block");
        else
            $(".order-contact").css("display", "none");
    });

    $(".order-close-icon").click(function(){
        $(".order").css("display", "none");
        $(".order-blog").css("display", "none");
        $(".order-contact").css("display", "none");
    });

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
            if (parseInt($(".gallery-icon"+i).css("margin-left"))<0 || parseInt($(".gallery-icon"+i).css("margin-left"))>750)
            {
                $(".gallery-icon"+i).css("display", "none");
            }
            else
            {
                $(".gallery-icon"+i).css("display", "block");
            }
        }
    }

    function hideIcons()
    {
        for (let i=-27;i<=32;i++)
        {
            $(".gallery-icon"+i).css("display", "none");
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

    function iconsMagnify(i, width, marginLeft)
    {
        let photoSmallHover = $(".gallery-icon"+i).css("background-image");
        let photoMedium = photoSmallHover.replace("smallhover", "medium");
        photoMedium = photoMedium.replace("png", "jpg");
        $(".gallery-photo").css("background-image", photoMedium);
        $(".gallery-photo").css("width", width);
        $(".gallery-photo").css("margin-left", marginLeft);
    }

    $(".gallery-icon-27").click(function(){
        iconsMagnify(-27, "883px", "25px");
    });

    $(".gallery-icon-26").click(function(){
        iconsMagnify(-26, "883px", "25px");
    });

    $(".gallery-icon-25").click(function(){
        iconsMagnify(-25, "883px", "25px");
    });

    $(".gallery-icon-24").click(function(){
        iconsMagnify(-24, "883px", "25px");
    });

    $(".gallery-icon-23").click(function(){
        iconsMagnify(-23, "883px", "25px");
    });

    $(".gallery-icon-22").click(function(){
        iconsMagnify(-22, "883px", "25px");
    });

    $(".gallery-icon-21").click(function(){
        iconsMagnify(-21, "883px", "25px");
    });

    $(".gallery-icon-20").click(function(){
        iconsMagnify(-20, "883px", "25px");
    });

    $(".gallery-icon-19").click(function(){
        iconsMagnify(-19, "883px", "25px");
    });

    $(".gallery-icon-18").click(function(){
        iconsMagnify(-18, "883px", "25px");
    });

    $(".gallery-icon-17").click(function(){
        iconsMagnify(-17, "883px", "25px");
    });

    $(".gallery-icon-16").click(function(){
        iconsMagnify(-16, "883px", "25px");
    });

    $(".gallery-icon-15").click(function(){
        iconsMagnify(-15, "883px", "25px");
    });

    $(".gallery-icon-14").click(function(){
        iconsMagnify(-14, "883px", "25px");
    });

    $(".gallery-icon-13").click(function(){
        iconsMagnify(-13, "883px", "25px");
    });

    $(".gallery-icon-12").click(function(){
        iconsMagnify(-12, "883px", "25px");
    });

    $(".gallery-icon-11").click(function(){
        iconsMagnify(-11, "883px", "25px");
    });

    $(".gallery-icon-10").click(function(){
        iconsMagnify(-10, "883px", "25px");
    });

    $(".gallery-icon-9").click(function(){
        iconsMagnify(-9, "883px", "25px");
    });

    $(".gallery-icon-8").click(function(){
        iconsMagnify(-8, "883px", "25px");
    });

    $(".gallery-icon-7").click(function(){
        iconsMagnify(-7, "883px", "25px");
    });

    $(".gallery-icon-6").click(function(){
        iconsMagnify(-6, "883px", "25px");
    });

    $(".gallery-icon-5").click(function(){
        iconsMagnify(-5, "883px", "25px");
    });

    $(".gallery-icon-4").click(function(){
        iconsMagnify(-4, "883px", "25px");
    });

    $(".gallery-icon-3").click(function(){
        iconsMagnify(-3, "883px", "25px");
    });

    $(".gallery-icon-2").click(function(){
        iconsMagnify(-2, "883px", "25px");
    });

    $(".gallery-icon-1").click(function(){
        iconsMagnify(-1, "883px", "25px");
    });

    $(".gallery-icon0").click(function(){
        iconsMagnify(0, "883px", "25px");
    });

    $(".gallery-icon1").click(function(){
        iconsMagnify(1, "393px", "265px");
    });

    $(".gallery-icon2").click(function(){
        iconsMagnify(2, "883px", "25px");
    });

    $(".gallery-icon3").click(function(){
        iconsMagnify(3, "393px", "265px");
    });

    $(".gallery-icon4").click(function(){
        iconsMagnify(4, "883px", "25px");
    });

    $(".gallery-icon5").click(function(){
        iconsMagnify(5, "883px", "25px");
    });

    $(".gallery-icon6").click(function(){
        iconsMagnify(6, "883px", "25px");
    });

    $(".gallery-icon7").click(function(){
        iconsMagnify(7, "883px", "25px");
    });

    $(".gallery-icon8").click(function(){
        iconsMagnify(8, "883px", "25px");
    });

    $(".gallery-icon9").click(function(){
        iconsMagnify(9, "883px", "25px");
    });

    $(".gallery-icon10").click(function(){
        iconsMagnify(10, "883px", "25px");
    });

    $(".gallery-icon11").click(function(){
        iconsMagnify(11, "883px", "25px");
    });

    $(".gallery-icon12").click(function(){
        iconsMagnify(12, "883px", "25px");
    });

    $(".gallery-icon13").click(function(){
        iconsMagnify(13, "883px", "25px");
    });

    $(".gallery-icon14").click(function(){
        iconsMagnify(14, "883px", "25px");
    });

    $(".gallery-icon15").click(function(){
        iconsMagnify(15, "883px", "25px");
    });

    $(".gallery-icon16").click(function(){
        iconsMagnify(16, "883px", "25px");
    });

    $(".gallery-icon17").click(function(){
        iconsMagnify(17, "883px", "25px");
    });

    $(".gallery-icon18").click(function(){
        iconsMagnify(18, "883px", "25px");
    });

    $(".gallery-icon19").click(function(){
        iconsMagnify(19, "883px", "25px");
    });

    $(".gallery-icon20").click(function(){
        iconsMagnify(20, "883px", "25px");
    });

    $(".gallery-icon21").click(function(){
        iconsMagnify(21, "883px", "25px");
    });

    $(".gallery-icon22").click(function(){
        iconsMagnify(22, "883px", "25px");
    });

    $(".gallery-icon23").click(function(){
        iconsMagnify(23, "883px", "25px");
    });

    $(".gallery-icon24").click(function(){
        iconsMagnify(24, "883px", "25px");
    });

    $(".gallery-icon25").click(function(){
        iconsMagnify(25, "883px", "25px");
    });

    $(".gallery-icon26").click(function(){
        iconsMagnify(26, "883px", "25px");
    });

    $(".gallery-icon27").click(function(){
        iconsMagnify(27, "883px", "25px");
    });

    $(".gallery-icon28").click(function(){
        iconsMagnify(28, "883px", "25px");
    });

    $(".gallery-icon29").click(function(){
        iconsMagnify(29, "393px", "265px");
    });

    $(".gallery-icon30").click(function(){
        iconsMagnify(30, "393px", "265px");
    });

    $(".gallery-icon31").click(function(){
        iconsMagnify(31, "393px", "265px");
    });

    $(".gallery-icon32").click(function(){
        iconsMagnify(32, "883px", "25px");
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

    $(".gallery-previous").click(function(){
        iconsShift(208);
    });

    $(".gallery-next").click(function(){
        iconsShift(-208);
    });

});