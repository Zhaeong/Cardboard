/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getPlugFacts()
{
    var countryAname = document.getElementById("countryA").value;
    
    var countryAhtml = '';
    
    countryAhtml += '<h1>' + countryAname + '</h1>';
    countryAhtml += '<img src="images/placeholder.png" alt="plugA">';
    
    document.getElementById("countryAdata").innerHTML = countryAhtml;
    
    var params = "getPlugFacts=1&countryA=" + countryAname;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) { 
            console.log(this.responseText);                           
        }
    };
    xhttp.open("POST", "database/request_handler.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);           
}