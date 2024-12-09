# Service definition:
- We have one dockers: 
1. One who has install apache service and php 8.1 version. 
The attacker has access to a web page (web_docker) and must exploit a vulnerability in a web system that allows arbitrary file uploads to an uploads directory. This directory is not securely configured, enabling an attacker to upload and execute malicious PHP files. Your goal is to leverage this vulnerability to access the contents of a secret file (flag.txt) located on the server.
The flags are stored in that last docker's file and attacker has to let them in his T-Submission machine. 

# Environment Details:
Vulnerable Path: /uploads/
Backend Language: PHP
Protected File: flag.txt
Flags location: /tmp/flag.txt
This file is not directly accessible via the browser. Flags will be stored in 'erronka_php_1' docker's '/tmp/flags.txt' file. 
Weak Security:
The uploads directory allows PHP file execution.
    
# About exploting:
- Upload a malicious PHP file to the server.
Use the malicious file to read the contents of flag.txt.
Retrieve the flag and submit it to score points.
Access the service at http://localhost:8001.
Test uploading a file to the /uploads/ path. Verify if you can access the file via your browser.
Create a malicious PHP file to read the contents of flag.txt.
The following PHP code can help you create a file to retrieve the flag:

  <?php
  echo file_get_contents('/tmp/flag.txt');
  ?>

Save this code as ***.php and upload it to the uploads directory. Then access the file via your browser to execute it.
  Copy last flags
  Exit
  'ssh root@10.0.1.1'
  nano /root/xxx.flag
    Paste copied flags. 

If you are part of the defending team, your goal is to identify and fix this vulnerability. Here are some ideas to mitigate the issue:

# Defenders: How to Secure This System

-Disable PHP execution in the uploads directory:
  Configure the web server (Apache or Nginx) to disallow script execution in uploads.
-Validate allowed file types:
  Ensure only safe file types, such as images, can be uploaded.
     
# Checker checks:
- Services is running. Check if erronka_php_1 container is running.
- Ports to reach dockers are open (WEB:8001)
- Upload folder has unchanged permissions: Set 777 permissions for the uploads directory
- Upload folder exists.

Checks done:
Team 2: The content of index.php has changed to remove the Upload form and the checker has detected the change. FAULTY
Team 2: The erronka_php_1 container has been stopped. FAULTY service. It should be DOWN
Team 1: The permissions of the uploads folder has changed. The checker has detected the change. FAULTY
Team 1: Upload owner has changed. Creating a new user (addsuser froga) and granting new owners (chown froga:froga uploads) The checker has detected the change. FAULTY
Team 1: Team 1 have deleted the uploads folder from the established path. The checker has detected the change. FAULTY
Team 1: Has changed or closed the webpage port 8001 to other. The checker has detected the change. DOWN.

# License notes
Parts from:
https://github.com/kristianvld/SQL-Injection-Playground



