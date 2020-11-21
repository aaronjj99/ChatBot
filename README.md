#HR ChatBot
Chat Bot with Admin Panel

Hello! I had a need to write a bot, but not a standard bot, and to be honest:
how much I searched, I did not find anything like this on github, and decided to write it myself.

What I needed:
  > So that the answers are given in turn regardless of the answer, but for a certain answer i was give another message, 
  > and after the answer, the branch went further, starting from the place to which we jumped.

![chatbot](https://i.ibb.co/SdTVv83/e9978c58-4f0f-40f0-9053-7ba941a7b5ec.jpg)

The bot has an Admin Panel for editing, adding and changing questions and answers.
> Admin Panel is in "function.php"

![chatbotadmin](https://i.ibb.co/4YG444r/Screenshot-4.png)

I also decided that it would be nice to store all user messages, and for this I used Firebase.

![chatbotadmin](https://i.ibb.co/QMDPWdY/57f05032-3156-4057-b16c-2c0faefc0405.jpg)

> Connection to Firebase occurs in the index.php & firebase.js file, whichever is more convenient.
The bot has two databases MySQL and Firebase, the connection to MySQL is made in the database.php file.
