#!/usr/bin/perl -wT 
use CGI':standard';
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
print "Content-type: text/html\n\n";

print "<!DOCTYPE html>";
print "<html><head>";
print "<title>CPS530 Lab 07</title>";
print '<link rel="stylesheet" href="stylesheetA.css"><link rel="stylesheet" href="stylesheetA.css">';
print "</head>";
print "<body>";

$fullName = param ('FullName');
$streetName = param ('StreetName');
$city = param ('City');
$postalCode = param ('PostalCode');
$province = param ('Province');
$email = param ('Email');
$phoneNum = param ('PhoneNum');
$photo = param ('Photo');

print "<div>$fullName</div>";
print "<div>$streetName</div>";
print "<div>$city $postalCode $province</div>";
print "<div>";
if ($email =~ /\@/) {
    print "$email <br>";
}
else {
    print "Email is invalid. <br>";
}
if ((length($phoneNum) == 10) & ($phoneNum =~ /^\d+$/)) {
    print "$phoneNum";
}
else {
    print "Phone Number is invalid <br>";
}
print "</div>";
print '<div><img src="$photo" alt="Entered photo"></div>';

print "</body></html>";