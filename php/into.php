<!--
    ALL ABOUT PHP     
PHP is a general-purpose scripting language geared toward web
development
Interpreted server-side language
Can be written alongside HTML within PHP tags <?php ?>
Often used with relational databases such as MySQL
Relatively easy language to learn -->

<!-- Working method of php 

As php being the interpreted server side scripting language, so the code that we writes is processed on the server. 

The main reason of using php for server side scripting for web programming because of its practicality as we know it is interpreted, can be written along with the html tags, also often used with the relational data bases MYSQL 

For php to work on our local machine, we have to install php itself and web servers like APACHE or NGIN X

lamp stack: os for linux
apache: web server software
mysql: database


PHP is one of the best choices for freelancers and small
businesses as it is practical, easy to setup, use and deploy
and you can create projects quicker than if you used
something else

-->



<!-- asp = active server pages 
server side jsp : java server page
firstly developed as the personal home page 
developer : rasmus lerfdorf in 1994

wamp: for package in windows 
127.0.0.1 : loop back address i.e accesing the local host using ip address 

            WORKING OF WEBSERVER AND DATA DISPLAY 
webserver gives the file to php processor and then the php processor  after converting it to html, gives to the web client and data are dispalyed in the browser


php process works in 2 mode:
copy mode: if the php processor gets the plain html file, it directly copy the file and return to the webclient

preprocess mode: whenever the php process gets the php coded file than before returning to the webclient, it process the file and convert to its equivalent html file.

     PHP KEYWORDS 

and default false if or break do for include require true case else foreach list return var class elseif continue extends global switch while this xor not virtual new 


DATA TYPES 
primitive 
a. integer 
b. double
c. string 
d. boolean 


     DERIVED/COMPOUND 
arrays 
object 


   ARITHMETIC OPERATIONS 
+ - * / % ++ -- 

    MATHEMATICAL FUNCTIONS 
floor(x)
ceil(x)
round(x)
srand(x)
abs(x)
min(x1,x2,x3,....) 
max(x1,x2,x3,....)
sin(x)
cos(x)
tan(x)
asin(x)  log(x)
acos(x)  exp(x)
atanx(x) log10(x)   etc...............


In php, variable name are case sensitive but function name & keywords are not case sensitive


SOME STRING FUNCTIONS
strlen
strcmp
strpos
substr

chap(str)
trim(str)
utirm(str)
-->

<!-- <html>
    <head>
        <title>PHP intl_error_name</title>
    </head>

    <body>
        <h1>Demo of PHP </h1>
        <?php print "Hello Austin";
        ?>
    </body>
</html> -->

<!-- dual vs single inverted commas in php 
in dual: we can use the variable inside of the double inverted comma 

. operator for the concatenation 

in single: 


control statement in php 
for 

switch case in php: here the switch value is not necessary to be integral(integer and character) i.e it can be float or string or do exploration  -->

<!-- What we'll learn 
PHP Setup
VS Code Setup w/Live Reload
Variables& Data Types
Arrays& Array Methods
Conditionals
Loops & Iteration
Functions
Superglobals
Working With Forms
$_GET & $_POST
Sanitization & Validation
Cookies
Sessions
File Handling
File Uploading
Errors& Exceptions
0OP & Classes
include & require
PHPMyAdmin
MySQLi & Database Interaction
-->

<?php
$data = array("a", "b", "c");

echo $data[0];
echo $data[1];
print "$data[2]\n";
echo "hello world";

// variable
$name = "joe";
echo $name;
$age = 15;
var_dump($age);
?>