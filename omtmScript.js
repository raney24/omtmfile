
$(document).ready(function(){

var allData=[]
var divId = ["#topLeft", "#midLeft", "#botLeft", "#topCenter", "#midCenter", "#botCenter", "#topRight", "#midRight", "#botRight"]
/*d3.csv("https://docs.google.com/spreadsheet/pub?key=0AiSo9ldMVP1cdFM0ME1KNnJXQzR0VXNGT0pVVWNlbkE&output=csv", 
	function(data) {
    	
		var dataArray = new Array (
			company = data.Company,
			metric = data.Metric,
			num = data.Value
		);
		for (var i=0;i<dataArray.length;i++) {
			allData.push(dataArray[i]);
		};	
			}, function(rows) {			
		});*/
	
	$('div.textField').hide();
	$('footer').hide();
	$('img.arrow').hide();

	var closeDiv = function(clicked, closeValues, clickedImg, contentClass){ //define close function (closeValues are for original values)
		
		$(clicked).animate({
			height:'31%',
			width:'31%',
			left:closeValues.divLeft,
			top:closeValues.divTop,
			fontSize:closeValues.headerSize
			}, 1000, 
				function() {
					$(clicked).css('z-index', 1) //send clicked div back to same level as others
					
				});	
				
		$("div."+contentClass).fadeOut(500); //paragraphs fade in
		$("div."+contentClass).animate({
			fontSize:closeValues.headerSize
		}, 500)
		
		$('footer').fadeOut(500);	//fade footer out	
		$(clickedImg).animate({ // put company image back
			left:closeValues.imgLeft
		}, 1000);
		$("p").fadeOut(500); //fade paragraph back out
		$('img.arrow').fadeOut(500); //fade arrow out
		
		
		$(clicked).off('click');
		
		$(clicked).click(function(){
			openDiv(clicked);
		});
	};	
	
	var openDiv = function(clicked){ // open div function (clicked is div clicked)
		
		$(clicked).css("z-index", 2); //move clicked div over other divs
		
		var contentID = $(clicked).attr('id');	
		var contentStr = contentID.toString();
		var index = divId.indexOf('#' + contentStr);
		/*d3.select(clicked)
			.data(allData)
			.enter()
			.append("p")
			.text(function(d) {
				console.log(allData[index*3]);
			});*/
		
		
		
		var child = $( clicked ).children();//.css( "background-color", "red" );
		var clickedImg = child[1];
		var contentAbbr = child[3];
		var contentID2 = $(contentAbbr).attr('class');
		var contentArr = contentID2.split(' ');
		var contentClass = contentArr[1]; //class such as tl for topleft
		console.log(contentClass);
		$("div."+contentClass).fadeIn(500); //paragraphs fade in
		$("div."+contentClass).animate({
			fontSize:'2em'
			}, 500)
		
		var closeValues = { //closed values of left and top percentage
			divLeft:$(clicked).css('left'),
			divTop:$(clicked).css('top'),
			imgLeft:$(clickedImg).css('left'),
			headerSize:$(clicked).css('fontSize')
			
		};
		
		$(clickedImg).animate({ //img moves left
			left:'65%'
		}, 1000);
		
		$(clicked).animate({ //animation of open function
			height:'97%',
			width:'97%',
			left:'0px',
			top:'0px',
			fontSize:'2em'
		}, 1000);
		//console.log(contentAbbr);
	
		$('footer#'+contentID).fadeIn(500); //footer fades in
		$('img#'+contentID).fadeIn(1000); //arrow fades in
		//console.log(contentID);
		
		$(clicked).click(function(){
			closeDiv(clicked, closeValues, clickedImg, contentClass); //call close div function for second click
		});
	};		
	
	$("div.company-card").click(function(){
		openDiv($(this));
				
	});
	
});
