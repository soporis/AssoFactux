<?php
/*
 *  Logiciel AssoFactux by Thomas iaconelli 2020
 *  Fork du code php Factux le facturier libre
 *  Crée par 2003-2005 Guy Hendrickx, 2017 Thomas Ingles
 * 
 * Licensed under the terms of the GNU  General Public License:
 * 		http://opensource.org/licenses/GPL-3.0
 * 
 * For further information visit:
 * 		http://
 * 
 * File Name: activer_lot.php
 * 	desactive les lot a la demande.
 * 
 * * * Version:  5.0.1
 * * * * Modified: 07/10/2016
 * 
 * File Authors:
 * 		thomas iaconelli 
 *
 */
include_once("include/config/common.php");
$num = isset($_GET['num']) ? $_GET['num'] : "";
$acte = isset($_GET['acte']) ? $_GET['acte'] : "non";
$sql2 = "UPDATE " . $tblpref . "lot SET actif='" . $acte . "' WHERE num = '" . $num . "'";
mysql_query($sql2) or die("<p>Erreur Mysql<br/>$sql2<br/>" . mysql_error() . "</p>");
include_once("lister_lot.php");
