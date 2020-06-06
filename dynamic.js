var mydata = JSON.parse(countries.json) ;
for (var i = 0 ; i < mydata.length ; i++){
	console.log(mydata[i].country_name) ;
}