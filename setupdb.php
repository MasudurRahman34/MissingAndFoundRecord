<?php 
@$con=mysql_connect("localhost","root",'')
or die("could not connect database");
$query="DROP DATABASE IF EXISTS db_missing";
$result=mysql_query($query,$con);
$query="CREATE DATABASE db_missing";
$result=mysql_query($query,$con);
mysql_select_db(db_missing);

$query="CREATE TABLE tbl_mfi(
			mid int(11) UNSIGNED AUTO_INCREAENT PRIMARY KEY,
			mname varchar(50),
			ddate date,
			status varchar(50),
			description varchar(255),
			lastplace varchar(150),
			contact_add varchar(255),
			img varchar(255),
			mphone varchar(20),
			id int(11)
			)";
$result=mysql_query($query,$con);
if ($query) {
 	echo "success";
 } else {
 	echo "failled";
 } 

$query="CREATE TABLE tbl_rgs(
			id int(11) UNSIGNED AUTO_INCREAENT PRIMARY KEY,
			rname varchar(50),
			rpsw varchar(20),
			remail varchar(50)
		
			
			)";

$result=mysql_query($query,$con);
 ?>