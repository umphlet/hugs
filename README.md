# hugs by Sean Umphlet
A very simple hugs-tracking script using PHP/MySQL. More of a way to learn to use git than anything else.

Requires a server running PHP, MySQL, and optionally mod_rewrite. Requires the use a MySQL database. It is recommended to create
a new one but you can use an existing one provided it doesn't already have an existing HUGS_DATA table (for some reason).

Just upload the files to your server.

Be sure to edit hugs-config.php.sample variables to match your database. This is based on your host.

If you have mod_rewrite enable the CLEAN_URI variable. Remember to copy the contents of htaccess.txt to your .htaccess file.

If you install to a folder be sure to set BASE_URI to whichever folder you put it in. I will add some functionality in the future to have it detect this for you.

Also remember to rename hugs-config.php.sample to hugs-config.php or nothing will work and I will mock you.

Live demo here: http://umphlet.com/hugs/ Be aware I wipe this db every once in a while for sanity.

Happy hugging!
