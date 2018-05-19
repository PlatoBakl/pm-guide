(function(global, $) {

    $("button#filter").click(function () {

        let source = $('select#source').val();

        filterTable(source);
    });
})(window, jQuery);

function filterTable(source)
{
    if(source === "all"){

        $('table.principles tbody tr').show();
    }else{

        $('table.principles tbody tr').each(function (i, item) {

            let validSource = this.dataset.source === source;

            if(validSource){
                $(item).removeClass("d-none").addClass("d-flex");
            }else{
                $(item).removeClass("d-flex").addClass("d-none");
            }
        });
    }
}