$(document).ready(function() {
    $('[type="submit"]').on("click", function () {
        $('form').submit(function() {
            $(this).find("[type='submit']").prop('disabled',true);
        });
    });

    $('#sort').on("click", function (){
        let sortOn = $('#sort').attr('data');

        sortOn++
        console.log(sortOn);
    });
});

