# W-CoreMVC
Custom PHP MVC framework for faster development.

## Info:
- JS & CSS can be added in the ./public folder
- Php code is stored inside of the ./app folder
- Modify the ./app/config/config.php file to match your site and database info
- Set up new models using the ./app/libraries/Database.php class and new controllers extending the 
   base Controller.php in the same dir (create a "models" folder inside the ./app/ dir)
- All classes inside of the ./app/libraries/ folder are being loaded automatically. Any other class must be included in the 
   ./app/bootstrap.php file (e.g. helpers)

