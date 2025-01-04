$(document).ready(function() {
    
    $('#modal-food').on('click', function() {
     $('#modal').toggle();
    });

    $('#X').on('click', function() {
     $('#modal').hide();
    });
    
    $('#ult').on('mouseenter' , function() {
     $('#nav-sav').show();
    });

    $('#nav-sav').on('mouseleave', function() {
        $('.nav-sav').hide();
    });
    
});