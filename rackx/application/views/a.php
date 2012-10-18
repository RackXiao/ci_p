<div id="accordion">
    <h3>Section 1</h3>
    <div>
        <p>
        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
        </p>
    </div>
    <h3>Section 2</h3>
    <div>
        <p>
        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
        suscipit faucibus urna.
        </p>
    </div>
    <h3>Section 3</h3>
    <div>
        <p>
        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
        </p>
        <ul>
            <li>List item one</li>
            <li>List item two</li>
            <li>List item three</li>
        </ul>
    </div>
    <h3>Section 4</h3>
    <div>
        <p>
        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
        mauris vel est.
        </p>
        <p>
        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
        inceptos himenaeos.
        </p>
    </div>
</div>

<script>
	$(function() {
	    $( "#accordion" ).accordion({
	        event: "click hoverintent"
	    });
	});
	
    var cfg = ($.hoverintent = {
        sensitivity: 7,
        interval: 100
    });
 
    $.event.special.hoverintent = {
        setup: function() {
            $( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
        },
        teardown: function() {
            $( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
        },
        handler: function( event ) {
            var that = this,
                args = arguments,
                target = $( event.target ),
                cX, cY, pX, pY;
 
            function track( event ) {
                cX = event.pageX;
                cY = event.pageY;
            };
            pX = event.pageX;
            pY = event.pageY;
            function clear() {
                target
                    .unbind( "mousemove", track )
                    .unbind( "mouseout", arguments.callee );
                clearTimeout( timeout );
            }
            function handler() {
                if ( ( Math.abs( pX - cX ) + Math.abs( pY - cY ) ) < cfg.sensitivity ) {
                    clear();
                    event.type = "hoverintent";
                    // prevent accessing the original event since the new event
                    // is fired asynchronously and the old event is no longer
                    // usable (#6028)
                    event.originalEvent = {};
                    jQuery.event.handle.apply( that, args );
                } else {
                    pX = cX;
                    pY = cY;
                    timeout = setTimeout( handler, cfg.interval );
                }
            }
            var timeout = setTimeout( handler, cfg.interval );
            target.mousemove( track ).mouseout( clear );
            return true;
        }
    };
</script>