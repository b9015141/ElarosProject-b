    $(document).ready(function() {
            $('#fullpage').fullpage();
    


    $('#next').click(function() {
        $.fn.fullpage.moveSectionDown();
    });


    $('#previous').click(function() {
        $.fn.fullpage.moveSectionUp();
    });
    
    });