jQuery.fn.extend({
    removeClassExchanger: function (remove, add) {
        $(this).removeClass(remove).addClass(add);
        return $(this);
    }
});


$( document ).ready(function() {

    const
        arrowRight = "css_menu_arrow_right",
        arrowLeft = "css_menu_arrow_left";

    $(".js_menu_arrow").on("click", function() {

        let
            id      = $(this).parent().attr("data-id"),
            open    = $(this).hasClass(arrowRight);// we are detect open or close

        if (open) {
            $(this).removeClassExchanger(arrowRight, arrowLeft);

            $(`.js_item_menu[data-parent-id="${id}"]`).show();
        } else { // close

            hide(id, $(this));
        }
    });
    
    
    function hide(id, that) {
        $(`.js_item_menu[data-parent-id=${id}]`).each(function(index) {
            that.removeClass(arrowLeft).addClass(arrowRight); // change parent arrow

            $(this).find(".js_menu_arrow").removeClassExchanger(arrowLeft, arrowRight); // change child arrow
            $(this).hide(); // hide child

            let innerId = $(this).attr("data-id");
            return hide(innerId, that);
        })
    }
});