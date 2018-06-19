$(document).ready(function(){

    $("#idbtn-send").click(function(){


    });

    $("#idbtn-more-photo").click(function(){

        console.log("Button gallery click");
    });

    $("#idcuba-libre-photo").click(function(){
        alert("The paragraph was clicked.");
    });

    $("#idship-image").click(function(){
        if ($("#gallery-bg").css("display") == "none")
        {
            $("#gallery-bg").css("display", "block");
            $(".gallery-window-bg").css("display", "block");
            $(".close-icon").css("display", "block");
            $(".gallery-photo").css("display", "block");
        }
        else
        {
            $("#gallery-bg").css("display", "none");
            $(".gallery-window-bg").css("display", "none");
            $(".close-icon").css("display", "none");
            $(".gallery-photo").css("display", "none");
        }

    });

});
