$(document).ready(function() {
    let originalTasks = $('.task');

    $('[type="submit"]').on("click", function () {
        $('form').submit(function() {
            $(this).find("[type='submit']").prop('disabled',true);
        });
    });

    $('#sort').on("click", function (){
        let tasks = originalTasks;
        let sort = $(this);
        if (sort.attr('data') == 0 ) {
            var numericallyOrderedDivs = tasks.sort(function (a, b) {

                var contentA =parseInt( $(a).attr('data'));
                var contentB =parseInt( $(b).attr('data'));
                return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
            });
            sort.attr('data', 1);
            $(".card-body").html(numericallyOrderedDivs);
            console.log(originalTasks);
        } else if(sort.attr('data') == 1) {
            var numericallyOrderedDivs = tasks.sort(function (a, b) {

                var contentA =parseInt( $(a).attr('data-sort'));
                var contentB =parseInt( $(b).attr('data-sort'));
                return (contentA > contentB) ? -1 : (contentA < contentB) ? 1 : 0;
            });
            $(".card-body").html(numericallyOrderedDivs);
            sort.attr('data', 0);
            console.log(originalTasks);
        }
    });

    $('#filt').change(function () {
       let filtOn = $('#filt option:selected').attr('data');
       $('.task').each(function (index, value) {
           let data = $.trim(($(this).attr('data-sort')));
           if (filtOn == '0') {
               $(this).removeAttr('hidden');
           } else if (data != filtOn) {
               $(this).attr('hidden', true);
           } else {
               $(this).removeAttr('hidden');
           }
       });
    });
});

