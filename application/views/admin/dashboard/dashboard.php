<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php $username = $this->session->userdata('username'); ?>
    <h1>Selamat Datang, &nbsp<?php echo $username;?></h1>
