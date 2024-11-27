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
  'ssh -i /home/urko/Deskargak/keyak/team2-sshkey root@10.0.1.1'
  nano /root/xxx.flag
    Paste copied flags. 

If you are part of the defending team, your goal is to identify and fix this vulnerability. Here are some ideas to mitigate the issue:

#Defenders: How to Secure This System

-Disable PHP execution in the uploads directory:
  Configure the web server (Apache or Nginx) to disallow script execution in uploads.
-Validate allowed file types:
  Ensure only safe file types, such as images, can be uploaded.
     

# Checker checks:
- Ports to reach dockers are open (WEB:8001)
- Upload folder has unchanged permissions: Set 777 permissions for the uploads directory

Checks done: 
- TEAM 0. Stop the container: 'root@team0-services:~# docker stop pasapasa_web_1' It works OK, service's status becomes DOWN. 
- TEAM 1. Stop the container: 'root@team0-services:~# docker stop pasapasa_ssh_1' It works OK, service's status becomes DOWN.
- TEAM 2. 'userdel dev1'. It works OK, service's status becomes faulty. 
- TEAM 3. Change '/etc/sshd_config' file from 'pasapasa_ssh' docker. It works OK, service's status becomes faulty.
- TEAM 4. Change '/usr/local/apache2/htdocs/index.html' file from 'pasapasa_web' docker. It works OK, service's status becomes faulty.
- TEAM 5. 'ssh service stop'. It works OK, service's status becomes faulty. 
- TEAM 0. apt update apache2
# License notes
Parts from:
https://github.com/kristianvld/SQL-Injection-Playground



