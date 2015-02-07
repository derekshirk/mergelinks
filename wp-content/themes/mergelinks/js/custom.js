( function( $ ) {

//     $('input#foo').focus(function() {
//     $('.submit-button').fadeToggle();
// });

//     $('input#foo').blur(function() {
//     $('.submit-button').fadeToggle();
// });

//set placeholder
$("#foo").val($("#foo").data("placeholder"));

//delete placeholder when input gets focus…
$("#foo").on("focus", function(){
    //…but only if current value is the placeholder string
    if($("#foo").val() === $("#foo").data("placeholder")){
        $("#foo").removeClass("placeholder-active");
        $("#foo").val("");
    }
});

//add placeholder when input loses focus…
$("#foo").on("blur", function(){
    //… but only if it's empty :)
    if($("#foo").val() === ""){
        $("#foo").val($("#foo").data("placeholder"));
        $("#foo").addClass("placeholder-active");
    }
});

//bonus: reset input of hitting escape
$("#foo").on("keydown", function(event){
    if(event.keyCode === 27){
        $("#foo").val("");
    }
});

} )( jQuery );