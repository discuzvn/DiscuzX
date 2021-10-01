===================================
Instructions for upgrading from Discuz! 7.2 to Discuz! X2.0
===================================

I Preparation before upgrading
---------------
1. Create a program backup directory, such as old/
2. Move all programs of the original forum to the old/ directory
3. Upload the programs in the upload/ directory of Discuz! X products to the forum directory
4. Execute the installation program /install
   When installing, please specify the address of the UCenter Server to which the original Discuz! 7.2 is mounted (if the UCenter version is lower than 1.6.0, you need to upgrade UCenter first)

II Upgrade Forum Data
---------------
1. After the installation is complete and the test forum can run normally, upload the Discuz! X Convert program to the forum directory
2. Execute /convert
3. Select the corresponding program version and start the conversion
4. Do not interrupt the conversion process without authorization until the program is automatically executed.
5. The conversion process may take a long time and consume more server resources. You should choose to execute it when the server is idle

III After the upgrade is complete, a few things to do
--------------------------
1. Edit the config/config_global.php file of the new forum and set the founder.
   In the config/config_global.php file, set $_config['admincp']['founder'] = '1'; the number is the UID of the founder
2. Directly visit the backend of the new forum, visit address: http://your domain name/admin.php
3. Log in with the founder account and enter the background to update the cache
4. The new system adds a lot of setting items, including user permissions, group permissions, forum sections, etc., you need to reset them carefully
5. Transfer the old attachment directory (before the transfer, your post will not be able to find any attachments)
   a) Enter the old/attachments/ directory
   b) Move all files to the new forum directory /data/attachment/forum/ directory
6. Transfer user avatar (users who install UCenter independently do not need this step)
   a) Enter the old/uc_server/data/avatar/ directory
   b) Move all files to the new forum directory uc_server/data/avatar/
7. Delete the convert program, so as not to bring hidden dangers to your forum installation
8. After all the functions of the new forum to be tested are normal, you can delete the old program backup and data backup
9. If you have used the classification information, you need to rearrange the classification information (Background -> Update Statistics -> Sort Information Sort).