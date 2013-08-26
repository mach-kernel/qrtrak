qrtrak
======

## What is it?

This is a QR-Code based parts inventory system. It uses the [Google Chart API](https://developers.google.com/chart/) to generate QR codes. This was made as a side project for [MechoSystems Inc](http://mechosystems.com) during my internship there. 

A working copy filled with actual data can be found at [MechoProducts](http://mechoproducts.com), ironically lacking any copyright claim to me, the original author. 

## Cool! How do I use it?

### Requirements

You'll need:

* A web server that's configured for:
  * HTTP 
  * PHP/FastCGI
  * MySQL

### How-to

1. Edit config.php and enter your mySQL database information. I've used InnoDB format to make it, however, other formats should work just fine. 
2. Start adding or removing parts.

### Custom fields

You can go ahead and modify the database structure to account for more fields or modify the existing ones. You'll also have to modify the queries in add and view.

### To do

Allow for dynamic add and remove of fields using arrays to be passed to functions as opposed to having to edit 999999999 files. 

## This is sweet! Can I use it?

Of course! You are allowed to modify and redistribute this code as long as you give original credit to me. No commercial usage, please. 

This software is bound by the [Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-nc-sa/3.0/).
