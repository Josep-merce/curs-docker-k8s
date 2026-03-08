<?php

$nodes = [

    ["nom" => "SVR-WEB-01", "ip" => "192.168.1.10", "tipus" => "Càlcul", "estat" => true], // ERROR 9: hauria de ser "estat"

    ["nom" => "NAS-DATA-02", "ip" => "10.0.0.5", "tipus" => "Emmagatzematge", "estat" => true],  // ERROR 10: falta coma
    ["nom" => "BCK-OFFSITE", "ip" => "85.23.12.4", "tipus" => "Backup", "estat" => false]

];
