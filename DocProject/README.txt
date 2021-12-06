/// general informations ///

Not responsive for big screen ! design for 1080p resolution and mobile phone
This project uses php bootstrap5 and mysql. 
It is essential to launch it on server (local or remote). 
Getting started is described in the next section.
The project is responsive and easily modifiable.
It is not optimized but the entries and requests are secure.
For more informations go to ./ZZZ/documentation.pdf

/// start the app ///

To start the app you must have a local server such as MAMP, XAMP or WAMP.
This can also be done on an online server, it will not be detailed here.

1- start your local server
2- put the unzip folder in the ./www/ or ./htdocs/ file of your local server
3- open your mysql or phpmyadmin console
4- run the scripts located in ./ZZZ/dbscript/ (comments may generate errors, remove them for execution at this time)
5- check that the database is well created and filled (6 tables)
6- go to ./model/modelPatients.php and ./model/modelEmployees.php to modify dbConnet() with the correct informations (dbhost and dbpassword)
7- go to http://localhost/DocProject/ in your favorite browser
8- you can now use the functions offered on the main page

/// authors ///

Pierre-Louis Létoquart
Vianney Portalier
Josselin Araujo

/// Licence ///

Free to use and modify
