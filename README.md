
AKINBLOG 1.0 by Akintunde Jegede

This is a simple portfolio+ blog script that is powered by PHP And MYSQL

It has built-in blog system and admin section.


So feel free to use this script and don't forget to read the license which basically allows you to do anything with the script except that you always mention me as a contributor and that if you made any gains, money or otherwise, feel free to appreciate me according to your own discretion.




# AKINBLOG

**Name:** AKINBLOG<br/>
**Contributors:** akintunde {github}<br/>
**Programmed with:** PHP<br/>
**Requires at least:** php 5.6 <br/>
**Major Dependencies:** bootstrap & jquery<br/>
**License:** APACHE LICENSE <br/>
**License URI:** https://www.apache.org/licenses/LICENSE-2.0 <br/>
**APP Address:** akin.com.ng <br/>

## Short Summary:
This script is a simple portfolio html website with php/mysql powered blog, an about page, a portfolio and options to add other pages.

## Description:
This script was built for frelancers with a eye for beauty and minimalism in mind/ This ref;ective in the concept and design of the front end. It is red themed.

Below is a preview:
![Preview](http://akin.com.ng/a.PNG)


## How it works:
The script has three major types of pages that include: 

### The blog pages
This pages display the blog articles.

**The Index.html Page:** this includes the blog page where all articles are highlighted that is defaultly shown on the index page.

**The viewpost.php Page:** THis displays each post based on a get variable that sends the id to the database to request the text, although this is not visible to the end user as it has been rewrited via the htaccess to have fancy urls that looks like `http://akin.com.ng/9/Using-htaccess-to-set-your-index-file` instead of `http://akin.com.ng/viewpost.php?id=9`.

### The Site Pages
This pages are just displaying information. They include: 

**wd.html** This displays work done, more like a portfolio page.

**contact.html** This displays contact information, it also contains a working form that sends provided information to an email address that is provided on line 15 of the page. Feel free to edit. There are more lines to be edited inside this script to reformat the body, subject and recipients of the email sent via the form.

**about.html** This simply contains information about the owner of the website. All information are provided in html format, feel free to edit the page to add own information.

You can add more pages to this script if you so wish, Just edit head.php to have site-wide header that contain all your pages.


#### Admin Pages
This pages can only be viewed by those who have admin login. The login details are stored in the db.sql, upload this sql dump to your database.

To access the admin page, just use a link like this (http://website.com/admin)

This is a list of all the admin pages, the names of this pages explain what they do:
add-post.php
add-user.php
edit-post.php
edit-user.php
index.php
login.php
logout.php
menu.php
users.php


Other Pages:
This are pages that perform other functions apart from the one listed above:
head.html (Site Header)
foot.html (site footer)


### Folders:
#### Uploader: This contain file Upload script for uploading images while writing or updating blog. (This is yet to be automated)
#### Classes: This contain classes that are being used by the scripts
#### Admin: contain all previously stated admin files
#### Includes: This contains config.php that houses db access details (Note: This Script Uses PDO database calls, so be mindful of the standard database protocols for PDO)
#### css,fonts,js,styles: These folders contain all front end dependencies


All other unstated files should be considered trivial.




## Installation 
Installation is very easy. Just follow the following steps

1. Download this script as a zip file (from [here](https://github.com/Akintunde102/AKINBLOG/archive/master.zip))
2. Copy to your server  www (or htdocs) folder
3. That's it 
4. Just view from your server domain name (or from localhost if you are in a local environment)


## Initial Version
1.0

## Contact Me
**Discord**: @akintunde <br/>
**Email:** jegedeakintunde[at]gmail.com<br/>
**utopian.io:** @akintunde <br/>
**github:** @akintunde102<br/>


## More ScreenShots
![Preview](http://akin.com.ng/a.PNG)
![Preview](http://akin.com.ng/b.PNG)
![Preview](http://akin.com.ng/c.PNG)


 

