(function ( $ ) {
	function pad(n) {
	    return (n < 10) ? ("0" + n) : n;
	}

	$.fn.showclock = function() {
	    
	    var currentDate=new Date();
	    var fieldDate=$(this).data('date').split('-');
	    var fieldTime=[0,0];
	    if($(this).data('time')!=undefined)
	    fieldTime=$(this).data('time').split(':');
	    var futureDate=new Date(fieldDate[0],fieldDate[1]-1,fieldDate[2],fieldTime[0],fieldTime[1]);
	    var seconds=futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

	    if(seconds<=0 || isNaN(seconds)){
	    	this.hide();
	    	return this;
	    }

	    var days=Math.floor(seconds/86400);
	    seconds=seconds%86400;
	    
	    var hours=Math.floor(seconds/3600);
	    seconds=seconds%3600;

	    var minutes=Math.floor(seconds/60);
	    seconds=Math.floor(seconds%60);
	    
	    var html="";

	    if(days!=0){
		    html+="<div id='days' class='count'>"
		    	html+="<span class='period'>Days</span>";
		    	html+="<span class='amount'>"+pad(days)+"</span>";
		    html+="</div>";
		}
	    if(days==0){
		    
            $('#dayin').addClass('dayempty');
		}
	    html+="<div class='count'>"
	    	html+="<span id='hours'  class='period'>Hours</span>";
	    	html+="<span class='amount'>"+pad(hours)+"</span>";
	    html+="</div>";

	    html+="<div class='count'>"
	    	html+="<span id='mint' class='period'>Minutes</span>";
	    	html+="<span class='amount'>"+pad(minutes)+"</span>";
	    html+="</div>";

	    html+="<div class='count'>"
	    	html+="<span id='sec' class='period'>Seconds</span>";
	    	html+="<span class='amount'>"+pad(seconds)+"</span>";
	    html+="</div>";

	    this.html(html);
	};

	$.fn.countdown = function() {
		var el=$(this);
		el.showclock();
		setInterval(function(){
			el.showclock();	
		},1000);
		
	}

}(jQuery));

