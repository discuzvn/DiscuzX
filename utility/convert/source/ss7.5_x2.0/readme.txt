===================================
SupeSite 7.5 upgrade to Discuz! X2.0 instructions
===================================

Special warning!!!
Discuz! X2.0 does not have all the functions in SupeSite 7.5,
This conversion process only converts the information classification and information article data in SupeSite 7.5 to the article system of Discuz! X2.0 products.
Other data will not be converted.
Therefore, after data conversion, Discuz! X2.0 products have the original SupeSite function loss and data loss problems, please weigh and decide whether to convert or upgrade.


I Preparation before upgrading
---------------
1. Create a program backup directory, such as old
2. Move all programs of the original SupeSite to the old directory
3. Upload the program in the upload directory of the Discuz! X2.0 product to the SupeSite directory
4. Execute the installation program /install
   When installing, please specify the UCenter Server address where the original SupeSite is attached (if the UCenter version is lower than 1.6.0, you need to upgrade UCenter first)

II Upgrade SupeSite data
---------------
1. After the installation is complete, after testing that Discuz! X2.0 can run normally, upload the convert program to the root directory of Discuz! X2.0
2. Execute /convert
3. Select the corresponding program version and start the conversion
4. Do not interrupt the conversion process without authorization until the program is automatically executed.
5. The conversion process may take a long time and consume more server resources. You should choose to execute it when the server is idle

III After the upgrade is complete, a few things to do
--------------------------
1. Edit the config/config_global.php file of the new Discuz! X2.0 and set the founder
2. Directly visit the admin.php of the new Discuz! X2.0
3. Log in with the founder account and enter the background to update the cache
4. The new system adds a lot of setting items, including user permissions, group permissions, forum sections, etc. You need to reset them carefully.
5. Transfer the old attachment directory to the new product root directory (before the transfer, the pictures in your information content cannot be displayed normally)
   a) Move all the files in the old/attachments directory and the directory to the /data/attachment/portal/ directory of the new Discuz! X2.0 product
   b) Find the icon images/base/attachment.gif under the original SS7 source code and put it in Disucuz! Under the directory static/image/filetype/ of X2.0;
   c) Find the source/module/portal/portal_view.php file, and add the following code after the code "$content['content'] = blog_bbcode($content['content']);":

$ss_url ='http://your_ss_site_url/'; // Please change this link address to your SS site address! ! !
$findarr = array(
$ss_url.'batch.download.php?aid=', // Attachment download address
$ss_url.'attachments/', // Attachment picture directory
$ss_url.'images/base/attachment.gif' // attachment download icon
);
$replacearr = array(
'porta.php?mod=attachment&id=',
$_G['setting']['attachurl'].'/portal/',
STATICURL.'image/filetype/attachment.gif'
);
$content['content'] = str_replace($findarr, $replacearr, $content['content']);

6. Transfer the old picture catalog to the new product root catalog (before the transfer, the expressions in your information content cannot be displayed normally)
   a) Move the old/images directory and the files in the directory to the root directory of the new Discuz! X2.0 product
7. Delete the convert program, so as not to bring hidden dangers to your Discuz! X2.0 installation.