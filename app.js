$(document).ready(function(){
	$.ajax({
		url:"chart_data.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var time = [];
			var temp = [];
			
			for(var i in data){
				time.push(data[i].time);//problem here cause instead of time it is CONVERT_TZ(time,'-04:00','+10:00')
				temp.push(data[i].temp);
			}
			
			
			var chartdata = {
				labels: time,
				datasets : [
					{
						label: "Temperatures",
						backgroundColor: 'rgba(0,0,0,0)',
						borderColor:'#619bf9',
						//hoverBackgroundColor:'rgba(200,200,200,1)',
						//hoverBorderColor: 'rbga(200,200,200,1)',
						data:temp
					}
				]
				
			}
			var ctx = $("#mycanvas");
			
			var lineGraph = new Chart(ctx, {
				type:'line',
				data: chartdata,
				options : {
					title: {
						display: true,
						text: 'Temps from 1st of June'
					},
					scales:{
						yAxes:[{
							display: true,
							ticks:{
								suggestedMin: 20,
								suggestedMax: 30
							}
						}]
					}
				}	
			});
		},
 		error: function(data){
			console.log(data);
		}
	});
});