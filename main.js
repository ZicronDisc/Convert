$(document).ready(function(){
    $("#mile").click(function(){
    $("#input").attr({
        "name" : "mileValue",
        "placeholder" : "Put a value here",
    });
    $("#title").text("mi to km");
    });

    $("#cm").click(function(){
    $("#input").attr({
        "name" : "cmValue",
        "placeholder" : "Put a value here",
    });
    $("#title").text("cm to ft & in");
    });

    $("#lb").click(function(){
    $("#input").attr({
        "name" : "lbValue",
        "placeholder" : "Put a value here",
    });
    $("#title").text("lb to g");
    });

    $("#db").click(function(){
        $("#input").attr({
            "name" : "dbValue",
            "placeholder" : "Put a value here",
        });
        $("#title").text("x2 ^2 /2");
        });

    $("#pt").click(function(){
        $("#input").attr({
            "name" : "ptValue",
            "placeholder" : "Put a value here",
        });
        $("#title").text("pt to gi, qt, & gal");
        });
});

