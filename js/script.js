$(function(){
    $(document).ready( function(){
        $("#content").mousedown( function(e){
            $(this).data("mouseDown", true).data("cursorY", e.pageY);
        });

        $(document).mousemove(function(e) {
           var c = $("#content");
            if( c.data("mouseDown") == true ) {
                var mouseMoved = c.data("cursorY") - e.pageY;
                c.data("cursorY", e.pageY);

                var currentTop = c.css("top");
                currentTop = currentTop.substr(0, currentTop.length-2); // drop "px" suffix
                var newTop = Math.round(currentTop) - mouseMoved;

                var maxTop = -10;
                var minTop = maxTop - (c.height() - $("#main_container").height());
                
                if ( newTop < minTop ) {
                    newTop = minTop;
                }
                if ( newTop > maxTop ) {
                    newTop = maxTop;
                }
                c.css({top: newTop});
            }
        });

        $("iframe").bind("mouseup mouseleave", function(){
            $("#content").data("mouseDown", false);
        });

        $(window).bind("mouseup mouseleave", function(){
            $("#content").data("mouseDown", false);
        });
    });
});
