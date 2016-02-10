<?php
return array(
// set your paypal credential
'client_id' => 'AckrU5EX4bBfr4ZFJkXL54ff7Qont4o_-Tz3uHP0m2RqebHG_2C0OJE0Cxgk9xRYAZd-Lca6W9ofFnqp',
'secret' => 'EOZWVev9QTb6NrD1bgBlBbUCjfzf0UCBVoDBbkg5c4T4Sn654vh5Ez0nXJ07v1cFNUU0CNtxqLqWxKVO',
/**
* SDK configuration
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 30,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);
