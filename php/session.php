<!-- A session is a way to store information (in variables) to be used across multiple pages. 

Working mechanism of session:
a> first the session_start() is called.
b> session_start() checks whether there is any available session or not, 
    b i> if there is already existing session, it resume that session

    b ii> else it starts new session. i.e if NO,

    Store a Cookie on Client Machine
    Cookie_Name PHPSESSID
    Content- SessionID : 26 char like: 345iervsdfsfsfb3456... which is unique for every session.

    parallelly on the server, 
    Store a file on Server
    Name- SESS_SessionID
    Content- Session_Variable
-->

<?php

session_start();

?>