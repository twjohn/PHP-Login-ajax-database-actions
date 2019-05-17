# PHP-Login-ajax-database-actions

this is a simple php web programs that allow a user to login by querying a database and finding the correct credentials.

authenticate.php implements a function called login which gets a connection to a mysql database. it then checks if values are set in the form method of index.php. It then queries the database to find the password and username the matches the information entered on the form. This then takes the info queried and compares it to what was entered by the user. If all goes well, you will be redirected to home.php, if not, a error message displays.

home.php allows the user to select a value from a drop down menu on the webpage. the value selected will be reistered. Javascript will detect the change and make a ajax call. this ajax call makes a call to gameQuery.php to query for a value that equals the the option the user chooses from the drop down menu.
