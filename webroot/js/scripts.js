// Empty JS for your own code to be here
$(document).ready(function(){
    $('body').on('click', '.call-with-me-button', function(){
        $(this).addClass('active');
    })

    $('#select2').select2();
})