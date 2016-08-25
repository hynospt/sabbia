function autoResizeFont(className) {
	var className = className.selector;
	var fontsize = parseInt($(className).css('font-size'));
	fontsize = fontsize * (($(window).outerWidth(true)) / 1366);
	$(className).css('font-size', fontsize);
}

function autoHeight(className){
  var displayHeight = $(window).height();
  $(className).height(displayHeight);
}

function autoMarginLeft(className){
  var widthContent = $("#content").width();
  var result = widthContent / 7.5;
  $(className).css("margin-left" , result);
}

function autoMarginTop(heightOfContent, className){
  var heightContent = $(heightOfContent).height();
  var result = heightContent / 5;
  $(className).css("margin-top", result);
}

function bottomCenterPosition(content , className){
  var topResult = $(content).height() / 1.40;
  var leftResult = $(content).width() / 2.20;

  $(className).css("margin-top", topResult);
  $(className).css("margin-left", leftResult);
}

function resizePanelService(className){
  var originalWidth = $(".icon-service").width();
  $(className).width(originalWidth);
}

jQuery(document).ready(function ($) {
      
  if(screen.width > 1200){
    // Home
    autoHeight($(".index-part1"));
    autoMarginLeft("#homeLeftHeader");
    autoMarginTop(".index-part1" , "#homeLeftHeader");
    autoMarginLeft("#productTagLeft");

    // Portfolio
    autoHeight($("#firstPortfolio"));
    bottomCenterPosition("#firstPortfolio" , "#portfolioIcon");


    // About
    autoHeight($("#about"));
    bottomCenterPosition("#about" , "#aboutIcon");

    // Services
    resizePanelService($(".iconServiceTagPanel"));

    var heightIcon0 = $("#firstImage").height();
    $("#first-col-service").css("height",heightIcon0);

    var mainPortfolioImageHeight = $("#mainPortfolioImage").height();
    var portfolioPanel = $("#portfolioPanel").css("height", mainPortfolioImageHeight);
  }



	autoResizeFont($('.portfolio font'));
});