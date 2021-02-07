(function($){
	$(function(){

		$('#main-menu li').click(function(e){
			var $el = $(e.target);

			if( $el.is('.menu-item-has-children') ){
				$el.toggleClass('expanded');
				e.stopPropagation()
			}
		});

		$('#main-menu-toggle').click(function(e){
			$(this).toggleClass('menu-visible');
		});

		$( document.body ).on( 'click', '.nettmaker-share a', function( e ) {
			e.preventDefault();
			window.open( $( this ).attr( 'href' ), 'formpopup', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');
			this.target = 'formpopup';
		});

	});
})(jQuery);