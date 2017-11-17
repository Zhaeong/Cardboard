<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class databaseObj {
    public $databaseIp = '914f3017-75eb-4690-820c-a82d0037f145.mysql.sequelizer.com';    
    public $user = 'uonbwrkplyfkjcpw';    
    public $pass = 'F6JCfZFFzW7KmXsJTB5RT4LtTf7dSsUvEBTCJoN7a8LeSWyLMKM4j2iKtpRa2CWh';    
    public $databaseName = 'db914f301775eb4690820ca82d0037f145';
    private $link;   
   
    function databaseObj() {
        $this->connectDB();
    }
    function connectDB() {
        $this->link = mysqli_connect($this->databaseIp, $this->user, $this->pass, $this->databaseName); 
    }
    
    function disconnectDB()
    {
        mysqli_close($this->link);        
    }  
    function getCountryOptions()
    {
        if($this->link === false){
            echo "ERROR: Could not connect. " . mysqli_connect_error();
        }
        $sql = "SELECT country_display "
                . "FROM powerswitches";
        
        //return $sql;
        $result = mysqli_query($this->link, $sql);        
        
        //return print_r($result);
        $output = '';
        while($row = mysqli_fetch_assoc($result))
        {
            $output .= '<option value="';
            $output .= $row['country_display'];    
            $output .= '">';
        }
        
        return $output;
    }    
    
    function getCountryInfo($countryA, $countryB)
    {
        $output = array();
        if($this->link === false){
            echo "ERROR: Could not connect. " . mysqli_connect_error();
        }
        $sqlA = "SELECT country_display, plug, voltage, frequency 
            FROM powerswitches 
            WHERE country_display = '" . $countryA ."';";
        
        //return $sql;
        $result = mysqli_query($this->link, $sqlA);   
        
        if (!$result) {
            die('Could not query:' . mysqli_error($this->link));
        }       
        
        $row = mysqli_fetch_assoc($result);
        $output['CountryA'] = $row;   
        
        
        mysqli_free_result($result);
        
        $sqlB = "SELECT country_display, plug, voltage, frequency 
            FROM powerswitches 
            WHERE country_display = '" . $countryB ."';";
        
        //return $sql;
        $resultB = mysqli_query($this->link, $sqlB);   
        
        if (!$resultB) {
            die('Could not query:' . mysql_error());
        }       
        
        $rowB = mysqli_fetch_assoc($resultB);
        $output['CountryB'] = $rowB; 
        return $output;
    } 
    
    function getCountryInfoSingle($country)
    {        
        if($this->link === false){
            echo "ERROR: Could not connect. " . mysqli_connect_error();
        }
        $sqlA = "SELECT country, plug, voltage, frequency 
            FROM powerswitches 
            WHERE country = '" . $country ."';";
        
        //return $sql;
        $result = mysqli_query($this->link, $sqlA);   
        
        if (!$result) {
            die('Could not query:' . mysql_error());
        }       
        
        $row = mysqli_fetch_assoc($result);  
        mysqli_free_result($result);
        
        
        return $row;
    } 
} 