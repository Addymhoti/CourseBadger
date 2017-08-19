<?php
$data = file_get_contents('https://www.codeschool.com/users/AdmireMusimwa.json');
$json_data = json_decode($data, true);
$courses = $json_data['courses']['completed'];