# Covid Vaccination Booking Portal
This is a web application for Covid-19 vaccination booking that allows users to search for vaccination centers, check their working hours, and apply for a vaccination slot. The application also includes an admin panel for adding and removing vaccination centers, as well as getting dosage details.

# Demo video
https://user-images.githubusercontent.com/77725682/233567536-c014bd57-24df-44c1-90b8-b1b16f6bc171.mp4

# Accessing the live-portal
This is a web application for Covid-19 vaccination booking with separate use cases for [regular-user](https://vaccinationbooking.000webhostapp.com/php/login.php) and [admin](https://vaccinationbooking.000webhostapp.com/admin/php/login.php). Regular users can log in, sign up, search for vaccination centers and their working hours, apply for a vaccination slot, and log out. Admins can log in, add new vaccination centers, view dosage details grouped by centers, and remove vaccination centers from the system.
>Click on the blue text to access the particular portals

# Tech stack used
| Purpose | Description |
| ----------- | ----------- |
| Backend Language | PHP can be used as the backend language to handle user authentication, database interactions, and business logic. Using PHP in the project can help streamline the development process and create a scalable, efficient, and secure web application. |
| Database |  PHPMyAdmin is a web-based graphical user interface tool used to manage MySQL databases. Using MySQL and PHPMyAdmin in the project can help ensure data security, scalability, and reliability of the application. |

# Notables
- Separte login for admin was enabled with an endpoint to avoid ambiguity
- For vaccination booking only 10 slots are allowed per day. It can be achieved by executing the crontab execute the task everyday at 12:00 AM


