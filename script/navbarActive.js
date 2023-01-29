$(document).ready(function () {
    var url = $(location).attr("href"); 
    var indexDebut = url.indexOf('uc=');
    console.log(indexDebut);
    console.log(url.substr(indexDebut));


    if(url.substr(indexDebut) == "uc=planet"){
        $("#item0").addClass("active");
        $("#item0").css("color", "gold");
        $("#item0").css("text-decoration", "underline");
        $("#item0").css("text-underline-position", "under");
        $("#item0").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=dwarfPlanet"){
        $("#item1").addClass("active");
        $("#item1").css("color", "gold");
        $("#item1").css("text-decoration", "underline");
        $("#item1").css("text-underline-position", "under");
        $("#item1").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=moon"){
        $("#item2").addClass("active");
        $("#item2").css("color", "gold");
        $("#item2").css("text-decoration", "underline");
        $("#item2").css("text-underline-position", "under");
        $("#item2").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=asteroid"){
        $("#item3").addClass("active");
        $("#item3").css("color", "gold");
        $("#item3").css("text-decoration", "underline");
        $("#item3").css("text-underline-position", "under");
        $("#item3").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=comet"){
        $("#item4").addClass("active");
        $("#item4").css("color", "gold");
        $("#item4").css("text-decoration", "underline");
        $("#item4").css("text-underline-position", "under");
        $("#item4").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=star"){
        $("#item5").addClass("active");
        $("#item5").css("color", "gold");
        $("#item5").css("text-decoration", "underline");
        $("#item5").css("text-underline-position", "under");
        $("#item5").css("text-underline-offset", "5px");
    }


    $(window).ready(function () {
        // executes when complete page is fully loaded, including all frames, objects and images
        $(".spinnerLoader").addClass("visually-hidden");
    });

});
