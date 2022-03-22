Your developing environment should include:
- a Sass compiler. For example install these packages in VSCode: "Sass" and "Sass Live Compiler". Sass allows writing css code with variables and other time saving tools.
- PHP, that also include a PHP local server. Download from: https://www.php.net/downloads. To launch the php server, go to the website folder in a terminal and >php -S localhost:8000, then from a browser open localhost:8000.
- an FTP sync tool to send the file to the host server of the website. For example this package from VSCode: SFTP. See the file settings/ftp_credencials.txt for all the settings. FTP comunication will be needed only when you are deploying the website to the host.

The website uses the following packages from npm through jsdelivr:
- bootstrap 5.0beta2
- boostrap-icons 1.4.0

How to keep the technology updated:
In include/head.php, replace css stylesheets and bootstrap icons jsdelivr retrival code.
In include/footer.php, replase the javascript code for jsdelivr retrival. 
See:
https://getbootstrap.com/docs/5.1/getting-started/introduction/
https://icons.getbootstrap.com/
