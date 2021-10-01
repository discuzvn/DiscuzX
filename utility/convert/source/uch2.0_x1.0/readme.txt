===================================
Instructions for upgrading UCenter Home 2.0 to Discuz! X1.0
===================================

Special warning!!!
As part of the functions of UCHome and Discuz! are integrated, part of the functions of UCHome will be partially lost after being integrated into Discuz! X.
These include:
Due to the newly added special features, the original UCH lively function will no longer be supported;
UCH voting and UCH activities will be integrated with forum voting posts and activity posts, and the function of activity albums and activity groups will no longer be supported;
The UCH group will exist as a new group function, and the original group album and group activity functions will no longer be supported;
Personal information has undergone new adjustments, and the school and work information in UCH's original personal information will need to be filled in again;
UCH's full site real-name function is no longer supported;

Please consider whether to convert UCHome to Discuz! X according to your own site requirements.

I Preparation before upgrading
---------------
1. Create a program backup directory, such as old
2. Move all the original UCHome programs to the old directory
3. Upload the program in the upload directory of the Discuz! X product to the UCHome directory
4. Execute the installation program /install
   When installing, please specify the UCenter Server address where the original UCHome is attached

II Upgrade UCHome data
---------------
1. After the installation is complete, after testing that Discuz! X can run normally, upload the convert program to the Discuz! X root directory
2. Execute /convert
3. Select the corresponding program version and start the conversion
4. Do not interrupt the conversion process without authorization until the program is automatically executed.
5. The conversion process may take a long time and consume more server resources. You should choose to execute it when the server is idle

III After the upgrade is complete, a few things to do
--------------------------
1. Edit the config/config_global.php file of the new Discuz! X and set the founder
2. Directly access the admin.php of New Discuz! X
3. Log in with the founder account and enter the background to update the cache
4. The new system adds a lot of setting items, including user permissions, group permissions, forum sections, etc. You need to reset them carefully.
5. Transfer the old attachment directory to the new product root directory (before the transfer, the pictures in your dynamics, logs, comments, messages, etc. cannot be displayed normally)
   a) Enter the old/attachment directory
   b) Move all files to the new Discuz! X product /data/attachment/album/ directory
   c) At the same time, modify the Discuz! X code
Let the inserted picture address in the log content be replaced with the latest picture address through string replacement to solve the problem that the log content picture cannot be displayed.
	 Methods as below:
Open Discuz! X's ./source/include/space/space_blog.php program
	 turn up:
$blog['message'] = blog_bbcode($blog['message']);
Add the following code below:
$home_url ='http://your_home_site_url/'; // Please change this link address to your UCHome site address! ! !
$bbs_url ='http://your_bbs_site_url/'; // Please change this link address to your BBS site address! ! !
$findarr = array(
'<img src="attachment/', //Original uchmoe attachment image directory
'<IMG src="'.$home_url.'attachment/', // original UCHome attachment image directory
$bbs_url.'attachments/month', // original forum attachment image directory
);
$replacearr = array(
'<img src="'.$_G['setting']['attachurl'].'album/',
'<IMG src="'.$_G['setting']['attachurl'].'album/',
$bbs_url.$_G['setting']['attachurl'].'forum/month',
);
$blog['message'] = str_replace($findarr, $replacearr, $blog['message']);

If your UCHome attachments are not stored in the default ./attachment directory, then
Fix the attachment in <img src="attachment/ in the code above to be your own attachment directory name
6. Transfer the old picture catalog to the new product root catalog (before the transfer, the expressions in your dynamics, logs, comments, messages, etc. cannot be displayed normally)
   a) Move the old/image directory and the files in the directory to the root directory of the new Discuz! X product
7. Restore access to the space.php URL address (before restoring, the information link in your site will point to an inaccessible address)
   1) Move the utility/oldprg/uchome/space.php file to the root directory of the new Discuz! X product
8. Delete the convert program, so as not to bring hidden dangers to your Discuz! X installation
9. After testing all the functions of the new Discuz! X product are normal, you can delete the old program backup and data backup