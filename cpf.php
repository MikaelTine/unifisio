<?php

$cpf = $_GET['cpf'];

$url = "http://api.medicinadireta.com.br/odata/$metadata#Paciente(nome".$nome."&cpf=".$cpf."&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJDRU5UUk8gREUgRklTSU9URVJBUElBIEUgUkVBQklMSVRBw4fDg08gQ0FWRU5BR0hJIFMvUyIsImp0aSI6ImUxY2M4OTY1LTFhOTAtNDZkYS05NTBmLTExNmVkMjI0ZDQwZiIsIk9yZ2FuaXphY2FvSWQiOiIyNjEyIiwiVXNlcklkIjoiMTkxNzUiLCJleHAiOjE2ODc4MzI4MDcsImlzcyI6Ik1lZGljaW5hRGlyZXRhLkFQSSIsImF1ZCI6Ik1lZGljaW5hRGlyZXRhLkFQSSJ9.ajkIc6wP9nyprhXDu1IQECAeSTSy-q-pRWjt8Mu1h6w";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT,450);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,10);
$result = curl_exec($ch);
curl_close($ch);



?>