<?php

$cpf = $_GET['cpf'];
$nome = $_GET['text'];

$url = "https://api.medicinadireta.com.br/odata/Paciente/Filters(id=0, nome='$nome', cpf='$cpf', limit=100, offset=1)""&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJDRU5UUk8gREUgRklTSU9URVJBUElBIEUgUkVBQklMSVRBw4fDg08gQ0FWRU5BR0hJIFMvUyIsImp0aSI6ImM3MzcwMDA1LWEzNzctNDEzNy1hNmM0LTMyYjNiZTk0YzIyMyIsIk9yZ2FuaXphY2FvSWQiOiIyNjEyIiwiVXNlcklkIjoiMTkxNzUiLCJleHAiOjE2ODc4ODIyMDMsImlzcyI6Ik1lZGljaW5hRGlyZXRhLkFQSSIsImF1ZCI6Ik1lZGljaW5hRGlyZXRhLkFQSSJ9.JmVAcZlKLokyhVyR40ACSxXWGqQ9o-jd08uU73gmER4";

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