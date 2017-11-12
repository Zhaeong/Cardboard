/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getPlugFacts()
{
    var countryAname = document.getElementById("countryA").value;
    
    
    
    var params = "getPlugFacts=1&countryA=" + countryAname;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) { 
            
            var responseJSON = JSON.parse(this.responseText);
            console.log(responseJSON.plug);    
            
            var countryAhtml = '';
    
            countryAhtml += '<h1>' + countryAname + '</h1>';
            countryAhtml += '<div> Plug: ' + responseJSON.plug + '</div>';
            countryAhtml += '<div> Voltage: ' + responseJSON.voltage + '</div>';
            countryAhtml += '<div> Frequency: ' + responseJSON.frequency + '</div>';
            countryAhtml += '<img src="images/placeholder.png" alt="plugA">';

            document.getElementById("countryAdata").innerHTML = countryAhtml;
    
        }
    };
    xhttp.open("POST", "database/request_handler.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);           
}