$(document).ready(function(){
				$(window).scroll(function(){
								var scrolltop=$(window).scrollTop()/10; 
								$("#Home-2").css({"transform":"translateY(-"+scrolltop+"%)"});
								});
				
					$.ajax({
										type:"GET", 
										url:"https://coronavirus-19-api.herokuapp.com/countries", 
										dataType:"json",
										success:function(data){
															for(i=1;i<data.length;i++){
																				var country=data[i].country;
																				var totaldeath=data[i].deaths;
																				var newdeath=data[i].todayDeaths;
																				var totalrecover=data[i].recovered;												
																				var newrecover=data[i].active;
																				var totalcases=data[i].cases;
																				var newcases=data[i].todayCases;
																									$("#datablock .datacontent").append("<div><h1>"+country+"</h1><line></line><p>:Newcases:</p><p>"+newcases+"</p><p>:TotalCases:</p><p>"+totalcases+"</p><p>:NewDeath:</p><p>"+newdeath+"</p><p>:TotalDeath:</p><p>"+totaldeath+":</p><p>:NewRecovered:</p><p>"+newrecover+":</p><p>:TotalRecover:</p><p>"+totalrecover+":</p></div>")
																									
																				}
										},
								error:function(error){
															console.log(error);
															$("#datablock .datacontent").append(error.statusText,"-["+error.status+"]");
										}
					});
												$("#head input[type=search]").on("keyup", function() {
									var value = $(this).val().toLowerCase();
									$(".datacontent div").filter(function(){
													$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
    });
  });
				$("#search-icon").click(function(){
								$("#search-box").slideToggle(250);
								});
				$("#openbox").click(function(){
								$("#menu-block").slideToggle(250);
								$(this).toggleClass("change")	;
								});
				$("#togglebutton").click(function(){
								if($(this).is(':checked')){
								$(".ball").animate({"left":"30px"},250);
								$(":root").css({"--white":"#000000","--black":"#ffffff"});
								
							}
							else{
											$(".ball").animate({"left":"10px"},250);
											$(":root").css({"--white":"#ffffff","--black":"#000000"});
											}
							});
					$("#datablock").on('click','.datacontent div',function(){
								$("#box-open").slideToggle(250);
								$("#box-open data").html($(this).html());
												});
					$("#box-close").on('click',function(){
									$("#box-open").slideToggle(250);
									});
					$("#menu-block").on("click","li", function(){
									$(this).find("span").toggleClass("half-rotate");
									$(this).find("ul").slideToggle(250);
									})
				});
