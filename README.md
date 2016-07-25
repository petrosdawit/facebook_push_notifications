# facebook_push_notifications
full example code on how to send a push notification from an app to a user using facebook SDK for PHP

For this example code, please download the facebook sdk zip file from https://developers.facebook.com/docs/php/gettingstarted. It is in the manual option and is the green download button. Open the zip file in which ever folder you will be working in (where you will place the push
notification php file). You will have a folder called facebook-php-sdk-v4-5.0.0 in your folder. In this folder, move its 'src' folder out into the same folder the facebook-php-sdk-v4-5.0.0 folder is in. In the end, you should have 3 things in your main folder. You should the facebook-php-sdk-v4-5.0.0 folder, the push notifications php file you run your code and a src folder.

This repository only contains the push notifications php file which is all you need. It uses facebook's graph api call post to send a push notification to a user who is using your app. The code is well commented and should have all the necessary information there. For additional resources, please refer to this: https://developers.facebook.com/docs/games/services/appnotifications. These are Facebook docs for app notifications and limitations. There is always the facebook developers group on facebook where you can ask questions and actual facebook engineers answer questions in real time in minutes!

The code in the pushNotifications.php file is ready to run. All that is needed is the steps mentioned before and for someone to insert their app_id, app_secret and customizations (notification message, notification app link, user_id they are sending to). 
