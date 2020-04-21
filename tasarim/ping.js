var Ping=function(){};Ping.prototype.ping=function(a,b,c){function d(){e&&clearTimeout(e);var a=new Date-f;"function"==typeof b&&b(a)}this.img=new Image,c=c||0;var e,f=new Date;this.img.onload=this.img.onerror=d,c&&(e=setTimeout(d,c)),this.img.src=a+"/?"+ +new Date};
var p = new Ping();
	setInterval(function(){
      p.ping("37.228.132.3", function(data){
		  if(data >= 125){
			  $('#server-tr').css('color', 'red');
			  $('#server-tr').css('font-weight', 'bold');
			  //$('#server-tr').attr('title', 'High Ping');
		  }else if(data <= 124){
			  $('#server-tr').css('color', 'green');
			  $('#server-tr').css('font-weight', 'normal');
			  //$('#server-tr').removeAttr('title');
		  }
        //document.getElementById("server-tr").innerHTML = data-20;
		$('#server-tr').html(""+data+" ms");
		//setTimeout("location.href = '"+data.url+"';", 3000);
      });
      p.ping("104.160.131.3", function(data){
		  if(data >= 125){
			  $('#server-fr').css('color', 'red');
			  $('#server-fr').css('font-weight', 'bold');
		  }else if(data <= 124){
			  $('#server-fr').css('color', 'green');
			  $('#server-fr').css('font-weight', 'normal');
		  }
        $('#server-fr').html(""+data+" ms");
      });
      p.ping("104.160.131.3", function(data){
		  if(data >= 125){
			  $('#server-gers').css('color', 'red');
			  $('#server-gers').css('font-weight', 'bold');
		  }else if(data <= 124){
			  $('#server-gers').css('color', 'green');
			  $('#server-gers').css('font-weight', 'normal');
		  }
        $('#server-gers').html(""+data+" ms");
      });
      p.ping("104.160.142.3", function(data){
		  if(data >= 125){
			  $('#server-ger').css('color', 'red');
			  $('#server-ger').css('font-weight', 'bold');
		  }else if(data <= 124){
			  $('#server-ger').css('color', 'green');
			  $('#server-ger').css('font-weight', 'normal');
		  }
        $('#server-ger').html(""+data+" ms");
      });
	  p.ping("104.160.156.1", function(data){
		  if(data >= 125){
			  $('#server-oce').css('color', 'red');
			  $('#server-oce').css('font-weight', 'bold');
		  }else if(data <= 124){
			  $('#server-oce').css('color', 'green');
			  $('#server-oce').css('font-weight', 'normal');
		  }
        $('#server-oce').html(""+data+" ms");
      });
	  p.ping("104.160.136.3", function(data){
		  if(data >= 125){
			  $('#server-lan').css('color', 'red');
			  $('#server-lan').css('font-weight', 'bold');
		  }else if(data <= 124){
			  $('#server-lan').css('color', 'green');
			  $('#server-lan').css('font-weight', 'normal');
		  }
        $('#server-lan').html(""+data+" ms");
      });
	}, 1000);
/*setTimeout(function(){
   window.location.reload(1);
}, 60000);*/