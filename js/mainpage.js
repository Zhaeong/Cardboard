/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getPlugFacts()
{
    var countryAname = document.getElementById("countryA").value;
    var countryBname = document.getElementById("countryB").value;
    
    
    
    var params = "getPlugFacts=1&countryA=" + countryAname + "&countryB=" + countryBname;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) { 
            
            var responseJSON = JSON.parse(this.responseText);
            console.log(this.responseText);    
            
            var countryAhtml = '';
    
            countryAhtml += '<table id = "outputTable">' 
            + '<tr>'
                + '<th></th>'
                + '<th>' + responseJSON.CountryA.country + '</th>'
                + '<th>' + responseJSON.CountryB.country + '</th>'
            + '</tr>'
            + '<tr>'
                + '<td>Plug Type(s)</td>'
                + '<td>' + responseJSON.CountryA.plug + '</td>'
                + '<td>' + responseJSON.CountryB.plug + '</td>'
            + '</tr>'
            + '<tr>'
                + '<td>Voltage</td>'
                + '<td>' + responseJSON.CountryA.voltage + ' V </td>'
                + '<td>' + responseJSON.CountryB.voltage + ' V </td>'
            + '</tr>'
            + '<tr>'
                + '<td>Frequency</td>'
                + '<td>' + responseJSON.CountryA.frequency + ' Hz </td>'
                + '<td>' + responseJSON.CountryB.frequency + ' Hz </td>'
            + '</tr>'
            

            countryAhtml += '</table>' 
            document.getElementById("countryAdata").innerHTML = countryAhtml;
    
        }
    };
    xhttp.open("POST", "database/request_handler.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);           
}