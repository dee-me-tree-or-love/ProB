$(document).ready(function(){
    $(".amount").click(function(){
        
        $("#your_amount").val($(this).val());
    });
    $(".other").click(function(){
        
        $("#your_amount").val(0);
    });
});