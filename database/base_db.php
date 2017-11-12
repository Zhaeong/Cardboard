<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class databaseObj {
    public $databaseIp = '192.168.1.111:9001';    
    public $user = 'testuser';    
    public $pass = 'testpass';    
    public $databaseName = 'cardboard';
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
        $sql = "SELECT Country "
                . "FROM PowerSwitches ";
        
        //return $sql;
        $result = mysqli_query($this->link, $sql);        
        
        
        $output = '';
        while($row = mysqli_fetch_assoc($result))
        {
            $output .= '<option value="';
            $output .= $row['Country'];    
            $output .= '">';
        }
        
        return $output;
    }    
    
    function getCountryInfo($countryName)
    {
        if($this->link === false){
            echo "ERROR: Could not connect. " . mysqli_connect_error();
        }
        $sql = "SELECT country, plug, voltage, frequency 
            FROM cardboard.powerswitches 
            WHERE country = '" . $countryName ."';";
        
        //return $sql;
        $result = mysqli_query($this->link, $sql);   
        
        if (!$result) {
            die('Could not query:' . mysql_error());
        }       
        
        $row = mysqli_fetch_assoc($result);
        
        
        mysqli_free_result($result);
        return $row;
    } 
} 