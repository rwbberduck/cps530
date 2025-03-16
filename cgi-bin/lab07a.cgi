#!/usr/bin/perl -wT 
use CGI':standard';
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

print "Content-type: text/html\n\n";
print "<!DOCTYPE html>";
print "<html><head>";
print '<link rel="preconnect" href="https://fonts.googleapis.com">';
print '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
print '<link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">';
print "<title>CPS530 Lab 07</title>";
print "<style> body {color:red; font-family: Sour Gummy; font-size: 50pt; text-align: center;}</style>";
print "</head>";
print "<body>";
print "<div>This is my first Perl program.</div>";
print "</body></html>";