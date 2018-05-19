(function(global, $) {

    $("button#filter").click(function () {

        let type = $('select#type').val();
        let source = $('select#source').val();
        let category = $('select#category').val();

        filterTable(type, source, category);
    });
})(window, jQuery);

function filterTable(type, source, category)
{
    if(type === source === category === "all"){

        $('table.principles tbody tr').show();
    }else{

        $('table.principles tbody tr').each(function (i, item) {

            let validType = (type === "all" || this.dataset.type === type);
            let validSource = (source === "all" || this.dataset.source === source);
            let validCategory = (category === "all" || this.dataset.category === category);

            if(validType && validSource && validCategory){
                $(item).removeClass("d-none").addClass("d-flex");
            }else{
                $(item).removeClass("d-flex").addClass("d-none");
            }
        });
    }
}