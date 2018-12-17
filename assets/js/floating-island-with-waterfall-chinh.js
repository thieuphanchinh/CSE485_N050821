
$(window).on('load', function() {
	$(window).on('resize', function(event){ redrawElements(); });	
	redrawElements();
});

function redrawElements(event) {
	var islandWidth = $('#islandContainer img.island').width();
	var islandHeight = $('#islandContainer img.island').height();
	var islandPosition = $('#islandContainer img.island').offset().left - $('#islandContainer').offset().left;
	$('#islandInsideContainer').css('width',islandWidth + 'px');
	$('#islandInsideContainer').css('height',islandHeight + 'px');
	$('#islandInsideContainer').css('left',islandPosition + 'px');
	var container = $('#islandInsideContainer').width();
	bigCloudWidth = container * 40 / 100;
	smallCloudWidth = container * 20 / 100;
	$('.cloudBig').css('width', bigCloudWidth + 'px');
	$('.cloudSmall').css('width', smallCloudWidth + 'px');
}