/* FILE: ANIMATIONS*/
//
var page_loaded = false;
// animations
var elementsToAnimate = [];
//
window.addEvent('load', function() {
	//
	page_loaded = true;
	// smooth anchor scrolling
	new SmoothScroll(); 
	// style area
	if(document.id('kioStyleArea')){
		document.id('kioStyleArea').getElements('a').each(function(element,i){
			element.addEvent('click',function(e){
	            e.stop();
				changeStyle(i+1);
			});
		});
	}
	// font-size switcher
	if(document.id('kioTools') && document.id('kioMainbody')) {
		var current_fs = 100;
		var content_fx = new Fx.Tween(document.id('kioMainbody'), { property: 'font-size', unit: '%', duration: 200 }).set(100);
		document.id('kioToolsInc').addEvent('click', function(e){ 
			e.stop(); 
			if(current_fs < 150) { 
				content_fx.start(current_fs + 10); 
				current_fs += 10; 
			} 
		});
		document.id('kioToolsReset').addEvent('click', function(e){ 
			e.stop(); 
			content_fx.start(100); 
			current_fs = 100; 
		});
		document.id('kioToolsDec').addEvent('click', function(e){ 
			e.stop(); 
			if(current_fs > 70) { 
				content_fx.start(current_fs - 10); 
				current_fs -= 10; 
			} 
		});
	}
	// K2 font-size switcher fix
	if(document.id('fontIncrease') && document.getElement('.itemIntroText')) {
		document.id('fontIncrease').addEvent('click', function() {
			document.getElement('.itemIntroText').set('class', 'itemIntroText largerFontSize');
		});
		
		document.id('fontDecrease').addEvent('click', function() {
			document.getElement('.itemIntroText').set('class', 'itemIntroText smallerFontSize');
		});
	}
	// create the list of elements to animate
	document.getElements('.kioHorizontalSlideRightColumn').each(function(element, i) {
		elementsToAnimate.push(['animation', element, element.getPosition().y]);
	});
	
	document.getElements('.layered').each(function(element, i) {
		elementsToAnimate.push(['animation', element, element.getPosition().y]);
	});
	
	document.getElements('.kioPriceTableAnimated').each(function(element, i) {
		elementsToAnimate.push(['queue_anim', element, element.getPosition().y]);
	});
});