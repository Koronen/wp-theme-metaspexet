$(function(){
    $(document).ready( function(){
        $("#content").mousedown( function(e){
            $(this).data("mouseDown", true).data("cursorY", e.pageY);
       });
       $(document).mousemove(function(e) {
           var $this = $("#content");
            if( $this.data("mouseDown") == true ) {
                //Sidebar Offset, Top value
                var s_top = parseInt($this.position().top);

                var mouseMoved =  $this.data("cursorY") - e.pageY;

                $this.data("cursorY", e.pageY);
                var top = $this.css("top");
                top = top.substr(0, top.length-2);
                var newTop = (Math.round(top) - mouseMoved);

//                //Calculate the top value
//                //This equation is not the perfect, but it 's very close
                var maxToMove = ($this.height()-$("#main_container").height()+20);
                newTop = Math.max(newTop, 0-maxToMove);
                newTop = Math.min(newTop, 0);;
                $this.css({top: newTop});
            }
        });
       $(window).mouseup( function(){
            $("#content").data("mouseDown", false);
       });
    });
});
