# AdminBoard

AdminBoard is a web console designed to manage websites and users on a Linux server. It provides an intuitive and user-friendly interface for administrators to efficiently handle website management tasks and user administration.

## Features

**Website Management:** AdminBoard allows administrators to manage websites hosted on the Linux server. It provides functionalities such as creating new websites, installing wordpress and more.

**User Administration:** With AdminBoard, administrators can easily manage users on the Linux server. It enables functionalities like creating new users, modifying user permissions, resetting passwords, and managing user groups.

**Dashboard:** The dashboard provides a quick overview of essential server statistics, including CPU usage, memory usage, disk space usage. It helps administrators monitor server performance and identify any potential issues.

**Installation**

Follow these steps to install AdminBoard on your Linux server:

Clone the repository to your server:

git clone https://github.com/antuvarghese/adminboard.git

Configure the server environment:

Ensure that your server meets the necessary requirements, such as PHP, MySQL, and Apache/Nginx.
Configure the virtual host or server block to point to the public directory of the AdminBoard.
Set up the database:

Create a MySQL database for AdminBoard.
database name should be "adminboard"
Import the provided SQL schema file (adminboard.sql) into the database.

NB : Do not upload these files on a production server. Only use in a test server for test purpose. Besides, some functions or features are not completed yet. I appreciate your interest in improving the codebase of AdminBoard. By contributing, you can help enhance its functionality, fix bugs, and introduce new features.

**Theme options :** Dark, Light

![dashboard](https://github.com/antuvarghese/adminboard/assets/55937016/6bf91c1f-4c13-416d-88e4-1b9f05ca361b)


![light_theme](https://github.com/antuvarghese/adminboard/assets/55937016/0834210b-63eb-4355-b31a-9163b950df4f)

