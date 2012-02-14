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

                //I used this coordinate and offset values for debuggin
                console.log("S_Top : " + s_top + " | Cursor Start : " + $this.data("cursorY") + " | Page : " + e.pageY + " | Client " + e.clientY + " | Layer " + e.layerY);
                console.log(Math.round(($this.data("cursorY") - e.pageY)));

                //Calculate the top value
                //This equation is not the perfect, but it 's very close
                console.log("Height : " + $this.height());
                var contentOff = ($this.height() - 1310);
                var top_value = Math.round( (s_top - ($this.data("cursorY") - e.pageY) ) );
                console.log("Top Value : " + top_value);
                console.log("ContentOff : " + contentOff + " | Max : " + (0 - contentOff) + " | Min : " + contentOff);
                top_value = Math.max( top_value, 0 - contentOff );
                console.log("Top Value : " + top_value);
                top_value = Math.min( top_value, contentOff );
                console.log("Top Value : " + top_value);
                $this.data("cursorY", e.pageY);

                //Animate the #menu by chaging the top value
                $this.css({top: top_value});
            }
        });
       $(window).mouseup( function(){
            $("#content").data("mouseDown", false);
       });
    });
});
