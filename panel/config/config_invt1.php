<?php
if(!defined('checkaccess')){die('Direct access not permitted');}

// ### GENERAL FOR INVERTER #1
$INVNAME1="Falownik 1";
// ### SPECS
$PLANT_POWER1=4200;
$PHASE1=false;
$CORRECTFACTOR1=1;
$STRING1=2;
$PASSO1=9999999;
$SR1='no';

// #### PROTOCOL
$PORT1='/dev/ttyUSB0';
$PROTOCOL1='aurora';
$ADR1='2';
$COMOPTION1='-Y15 -l5';
$SYNC1=true;
$LOGCOM1=false;
$SKIPMONITORING1=false;

// ### FRONT PAGE
$YMAX1=3600;
$YINTERVAL1=1000;

// ### INFO DETAILS
$PANELS11="12x175W panele BP";
$PANELS21="12x175W panele BP";

// ### DASHBOARD
$ARRAY1_POWER1=2100;
$ARRAY2_POWER1=2100;
$ARRAY3_POWER1=0;
$ARRAY4_POWER1=0;

// ### EXPECTED PRODUCTION
$EXPECT1_1=72.5;
$EXPECT2_1=125;
$EXPECT3_1=288;
$EXPECT4_1=420;
$EXPECT5_1=484;
$EXPECT6_1=495;
$EXPECT7_1=497;
$EXPECT8_1=415;
$EXPECT9_1=313;
$EXPECT10_1=199;
$EXPECT11_1=89;
$EXPECT12_1=60.5;

// ### REPORT
$EMAIL1="";

// ### CHECKS & NOTIFICATION
$AWPOOLING1=5;
$DIGESTMAIL1=30;
$FILTER1="W011,W001,E011";
$MAILW1=false;
$SENDALARMS1=true;
$SENDMSGS1=true;
$NORESPM1=true;
$LOGMAW1=true;
$VGRIDUT1=208;
$VGRIDT1=250;
$RISOT1=8;
$ILEAKT1=15;
$POAKEY1='';
$POUKEY1='';
$TLGRTOK1='';
$TLGRCID1='';

$cfgver=1580641665;
?>