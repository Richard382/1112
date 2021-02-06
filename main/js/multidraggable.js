(function($) { 
    'use strict';

    var global = {
        aInternal: 10,
        aListener: function(val) {},
        set group(val) {
            this.aInternal = val;
            this.aListener(val);
        },
        get group() {
          return this.aInternal;
        },
        registerListener: function(listener) {
            this.aListener = listener;
        }
    };

    $.fn.multidraggable = function (opts) {
		opts = opts || {};

        var leftOffset = [];
        var topOffset = [];

        createSelectable(this, opts);
        return createDraggable(opts, leftOffset, topOffset);
    };

    function createSelectable(main, opts) {
        $(main).selectable(opts, {
            //onCreate RETURN EVENT UI
            create:function(event, ui) {
                opts.onCreate ? opts.onCreate(event, ui) : {};
            },
            //onSelecting RETURN EVENT UI
            selecting: function( event, ui ) {
                opts.onSelecting ? opts.onSelecting(event, ui) : {};
            },
            //onSelected RETURN EVENT UI
            selected:function( event, ui ) {
                opts.onSelected ? opts.onSelected(event, ui) : {};
            },
            //onStopSelecting RETURN EVENT UI
            stop: function( event, ui ) { 
                var group = [];
                $('.ui-selected').each(function(){
                    group.push(this);
                });
                global.group = group;
                opts.onSelecting ? opts.onSelecting(event, ui) : {};
                opts.onStopSelecting ? opts.onStopSelecting(event, ui) : {};
            },
            //onStartSelecting RETURN EVENT UI
            start:function( event, ui ) {
                opts.onStartSelecting ? opts.onStartSelecting(event, ui) : {};
            },
            //onUnselected RETURN EVENT UI
            unselected: function(event, ui){
                global.group = [];
                opts.onUnselected ? opts.onUnselected(event, ui) : {};
            },
            //onUnselecting RETURN EVENT UI
            unselecting:function(event, ui) {
                opts.onUnselecting ? opts.onUnselecting(event, ui) : {};
            }
        });
    }

    function createDraggable(opts, leftOffset, topOffset) {
        global.registerListener(function(val) {
            opts.group = val;
            return $(opts.group).each (function (){
           		$(this).on("mouseover", function() {
                    if (!$(this).data("init")) {
                       $(this).data("init", true).draggable(opts,{
                            //onStartMultidrag event, ui, elements
                            start: function (event,ui) {
                               var pos = $(this).position();
                               $.each(opts.group || {}, function(key,value) {
                                   var elemPos = $(value).position();
                                   leftOffset[key] = elemPos.left - pos.left;
                                   topOffset[key] = elemPos.top - pos.top;
                               });
                               opts.onStartDrag ? opts.onStartDrag(event, ui, opts.group) : {};
                            },
                            //onDrag event, ui, elements
                            drag: function(event,ui) {
                               var pos = $(this).offset();
                               $.each(opts.group || {}, function(key,value) {
                                   $(value).offset({left: pos.left + leftOffset[key],
                                   top: pos.top + topOffset[key]});
                               });
                               opts.onDrag ? opts.onDrag(event, ui, opts.group) : {};
                            },
                            //onStopDrag event, ui, elements
                            stop: function(event,ui) { 
                               var pos = $(this).offset();
                               $.each(opts.group || {}, function(key,value) {
                                   $(value).offset({left: pos.left + leftOffset[key],
                                   top: pos.top + topOffset[key]});
                               });
                               $(opts.group).each(function() {
                                   $(this).removeClass("ui-draggable");
                                   $(this).removeClass("ui-draggable-handle");
                               });
                               opts.onStopDrag ? opts.onStopDrag(event, ui, opts.group) : {};
                               global.group = [];
                                opts.onUnselected ? opts.onUnselected(event, ui) : {};
                            },
                       });
                    }
        	    });
         	 });
        });
    }

}(jQuery));
