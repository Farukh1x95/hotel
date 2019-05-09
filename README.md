Hotel Booking and Recommendation System
Features:-

It inputs a json file with predefined data fields and feed them into the database.
Users can book a hotel in this application. But first they have to sign up or login to make a booking.
Users can also save the incomplete booking of Hotel and see them in their Draft space and complete thie booking process.
When a user complete a previously saved incomplete booking from draft, so it autodeletes from the drafts.
User can see all his/her previous booking along with the booking date and all the information about the booking.
While checking a hotel information, the application automatically identifies the location of the hotel and recommend the user similar hotels in the same location/city.
Each hotel contains total number of visitors ever visited the hotel. If a user revisit the same hotel after 7 days, so he/she will be considered as a new visitor.
Installation

Copy the whole directory into your server/virtual-server root directory.
Upload the .sql file into your MySQL database.
Edit /includes/conn.php and add MySQL username and password into the file.
Access the application at http://hostname/
Limitations

This project has some limitations which are ignored due to the deadline of the project and those flaws do not affect the functioning of the project.

There's no authentication system is made for the admin to upload json file.
There's no validation is done on the file uploaded.
There's no encryption performed on the cookies stored.
There's no manual delete option of the user records - drafts and booking history
The application is only tested on Google Chrome Version 73.0.3396.87 and not on any other browser.
