# OneDirect Assignment - Flight Reservation

This is a website to book airplane tickets using PHP, HTML, Bootstrap and MYSQL.

Platform Required : Xampp, MySQL and Apache

Instuctions on how to run the code : 
1. Run Apache and MySQL
2. Clone into this git repository, save contents in a file under xampp->htdocs
3. Save the .sql files in xampp->mysql
4. View the website on localhost

Order of viewing pages :
home.php -> form.php -> flights.php -> bookpage.php -> confirm.php

home.php
![alt text](https://raw.githubusercontent.com/ShivaniMangal/OneDirectAssignment/master/imgs/screenshot1.jpg)


form.php

flights.php

bookpage.php

confirm.php

Tasks Acheieved :
1)Getting user's input from the form and printing available flights
2)Booking a ticket and updating passengers_details table with details of booked tickets
3)Using an insertion script to update passenger details

Bugs Disclosed :
1) If no flight is present, it prints an empty table.
2) In the confirmation form, it displays the first row of the search_details table. This is just a static representation, as the dynamic approach using button ID's did not prove to be successful.

