/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getPlugFacts()
{
    var countryAname = document.getElementById("countryA").value;
    var countryBname = document.getElementById("countryB").value;
    
    console.log(countryAname);
    
    var params = "getPlugFacts=1&countryA=" + countryAname + "&countryB=" + countryBname;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) {             
            console.log(this.responseText);
            var responseJSON = JSON.parse(this.responseText);  
            var countryAhtml = '';

            var plugAstr = responseJSON.CountryA.plug;
            var plugA = plugAstr.split("/");
            var plugBstr = responseJSON.CountryB.plug;
            var plugB = plugBstr.split("/");
    
            countryAhtml += '<table id = "outputTable">' 
            + '<tr>'
                + '<th></th>'
                + '<th>' + responseJSON.CountryA.country_display + '</th>'
                + '<th>' + responseJSON.CountryB.country_display + '</th>'
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
            + '<tr>'
                + '<td>Plug Type(s)</td>'
                + '<td>'
            // Country A plug str and plug img
            for (i = 0; i < plugA.length; i++) { // for every substr of plugA
                countryAhtml += plugA[i] // display the plug type str
                switch (plugA[i]) { // display the plug img
                    case 'A':
                        countryAhtml += '<img src="/plugtypes/A.png" alt="Plug Type A" width="79" height="37">';
                        break;
                    case 'B':
                        countryAhtml += '<img src="/plugtypes/B.png" alt="Plug Type B" width="79" height="37">';
                        break;
                    case 'C':
                        countryAhtml += '<img src="/plugtypes/C.png" alt="Plug Type C" width="79" height="37">';
                        break;
                    case 'D':
                        countryAhtml += '<img src="/plugtypes/D.png" alt="Plug Type D" width="79" height="37">';
                        break;
                    case 'E':
                        countryAhtml += '<img src="/plugtypes/E.png" alt="Plug Type E" width="79" height="37">';
                        break;
                    case 'F':
                        countryAhtml += '<img src="/plugtypes/F.png" alt="Plug Type F" width="79" height="37">';
                        break;
                    case 'G':
                        countryAhtml += '<img src="/plugtypes/G.png" alt="Plug Type G" width="79" height="37">';
                        break;
                    case 'H':
                        countryAhtml += '<img src="/plugtypes/H.png" alt="Plug Type H" width="79" height="37">';
                        break;
                    case 'I':
                        countryAhtml += '<img src="/plugtypes/I.png" alt="Plug Type I" width="79" height="37">';
                        break;
                    case 'J':
                        countryAhtml += '<img src="/plugtypes/J.png" alt="Plug Type J" width="79" height="37">';
                        break;
                    case 'K':
                        countryAhtml += '<img src="/plugtypes/K.png" alt="Plug Type K" width="79" height="37">';
                        break;
                    case 'L':
                        countryAhtml += '<img src="/plugtypes/L.png" alt="Plug Type L" width="79" height="37">';
                        break;
                    case 'M':
                        countryAhtml += '<img src="/plugtypes/M.png" alt="Plug Type M" width="79" height="37">';
                        break;
                    case 'N':
                        countryAhtml += '<img src="/plugtypes/N.png" alt="Plug Type N" width="79" height="37">';
                        break;
                } // break before next plug
                countryAhtml +='<br>'
            } // at end of for loop, close cell
            countryAhtml += '</td>'

            // Country B plug str and plug img
            countryAhtml += '<td>'
            for (i = 0; i < plugB.length; i++) { // for every substr of plugB
                countryAhtml += plugB[i] // display the plug type str
                switch (plugB[i]) { // display the plug img
                    case 'A':
                        countryAhtml += '<img src="/plugtypes/A.png" alt="Plug Type A" width="79" height="37">';
                        break;
                    case 'B':
                        countryAhtml += '<img src="/plugtypes/B.png" alt="Plug Type B" width="79" height="37">';
                        break;
                    case 'C':
                        countryAhtml += '<img src="/plugtypes/C.png" alt="Plug Type C" width="79" height="37">';
                        break;
                    case 'D':
                        countryAhtml += '<img src="/plugtypes/D.png" alt="Plug Type D" width="79" height="37">';
                        break;
                    case 'E':
                        countryAhtml += '<img src="/plugtypes/E.png" alt="Plug Type E" width="79" height="37">';
                        break;
                    case 'F':
                        countryAhtml += '<img src="/plugtypes/F.png" alt="Plug Type F" width="79" height="37">';
                        break;
                    case 'G':
                        countryAhtml += '<img src="/plugtypes/G.png" alt="Plug Type G" width="79" height="37">';
                        break;
                    case 'H':
                        countryAhtml += '<img src="/plugtypes/H.png" alt="Plug Type H" width="79" height="37">';
                        break;
                    case 'I':
                        countryAhtml += '<img src="/plugtypes/I.png" alt="Plug Type I" width="79" height="37">';
                        break;
                    case 'J':
                        countryAhtml += '<img src="/plugtypes/J.png" alt="Plug Type J" width="79" height="37">';
                        break;
                    case 'K':
                        countryAhtml += '<img src="/plugtypes/K.png" alt="Plug Type K" width="79" height="37">';
                        break;
                    case 'L':
                        countryAhtml += '<img src="/plugtypes/L.png" alt="Plug Type L" width="79" height="37">';
                        break;
                    case 'M':
                        countryAhtml += '<img src="/plugtypes/M.png" alt="Plug Type M" width="79" height="37">';
                        break;
                    case 'N':
                        countryAhtml += '<img src="/plugtypes/N.png" alt="Plug Type N" width="79" height="37">';
                        break;
                } // break before next plug
                countryAhtml +='<br>'
            } // at end of for loop, close cell
            countryAhtml += '</td>'

            // close this row (Plug Types)
            countryAhtml += '</tr>'

            // close whole table
            countryAhtml += '</table>' 
            document.getElementById("countryAdata").innerHTML = countryAhtml;    
        }
    };
    xhttp.open("POST", "database/request_handler.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);           
}