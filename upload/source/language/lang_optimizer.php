<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 33906 2013-08-29 09:40:37Z jeffjzhang $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'optimizer_dbbackup_advice' => 'No data backup for three months, it is recommended to back up the data immediately',
    'optimizer_dbbackup_lastback' => 'The last data was backed up at',
    'optimizer_dbbackup_clean_safe' => 'No database backup files are detected, no security issues',
    'optimizer_dbbackup_clean_delete' =>
        '{filecount} files được sao lưu (Nội dung: ./data/backup_xxx),<br>Hãy copy thủ công vào vị trí an toàn sớm nhất có thể',
    'optimizer_filecheck_advice' => 'The document verification has not been carried out for three months, it is recommended to carry out the verification immediately',
    'optimizer_filecheck_lastcheck' => 'The last file was verified on',
    'optimizer_log_clean' => 'There are {count} log tables that can be cleaned and optimized',
    'optimizer_log_not_found' => 'No log table found to be cleaned up',
    'optimizer_patch_have' => 'You have {patchnum}, please update as soon as possible',
    'optimizer_patch_check_safe' => 'Detection safety',
    'optimizer_plugin_new_plugin' => 'You have {newversion} apps with available updates',
    'optimizer_plugin_no_upgrade' => 'No need to apply updates',
    'optimizer_post_need_split' => 'There are {count} posts and sub-tables that need to be optimized',
    'optimizer_post_not_need' => 'No need to optimize',
    'optimizer_seo_advice' => 'It is recommended that you improve the SEO settings',
    'optimizer_seo_no_need' => 'Found that the seo settings have been improved',
    'optimizer_setting_cache_index' => 'Cache Forum Home',
    'optimizer_setting_cache_index_desc' => 'Turn on this feature to reduce server load',
    'optimizer_setting_cache_optimize_desc' => 'Set the cache time to 900 seconds',
    'optimizer_setting_cache_post' => 'Cache posts',
    'optimizer_setting_cache_post_desc' => 'Turn on this feature to reduce server load',
    'optimizer_setting_cache_post_optimize_desc' => 'Set the cache time to 900 seconds',
    'optimizer_setting_optimizeviews' => 'Optimize and update topic views',
    'optimizer_setting_optimizeviews_desc' =>
        'Enabling this function can reduce the load on the server when updating the topic views',
    'optimizer_setting_optimizeviews_optimize_desc' => 'Turn on this feature',
    'optimizer_setting_delayviewcount' => 'Delayed update of attachment downloads',
    'optimizer_setting_delayviewcount_desc' =>
        'Delaying the number of pageviews to update attachments can significantly reduce the server burden on sites with a large number of visits',
    'optimizer_setting_delayviewcount_optimize_desc' => 'Turn on this feature',
    'optimizer_setting_preventrefresh' => 'Turn on anti-refresh for viewing count',
    'optimizer_setting_preventrefresh_desc' =>
        'Turn on anti-refresh, which can significantly reduce server pressure',
    'optimizer_setting_preventrefresh_optimize_desc' => 'Turn on this feature',
    'optimizer_setting_nocacheheaders' => 'Disable browser buffering',
    'optimizer_setting_nocacheheaders_desc' =>
        'It can be used to solve the problem of abnormal content refresh in a very few browsers, this function will increase the burden on the server',
    'optimizer_setting_nocacheheaders_optimize_desc' => 'Turn off this feature',
    'optimizer_setting_jspath' => 'JS file cache',
    'optimizer_setting_jspath_desc' =>
        'When the script is the cache directory, the system will compress the *.js file in the default directory and save it to the cache directory to improve the reading speed',
    'optimizer_setting_jspath_optimize_desc' => 'Modify the js path to the cache directory',
    'optimizer_setting_lazyload' => 'Picture delay loading',
    'optimizer_setting_lazyload_desc' =>
        'The pictures in the page are reloaded in the current window of the browser, which can significantly reduce the server burden of heavily visited sites',
    'optimizer_setting_lazyload_optimize_desc' => 'Turn on this feature',
    'optimizer_setting_sessionclose' => 'Close the session mechanism',
    'optimizer_setting_sessionclose_desc' =>
        'After closing the session mechanism, the server load on the site can be significantly reduced. It is recommended to turn on this function when the number of online users exceeds 20,000<br>Note: The number of visitors and online time of users will no longer be counted, and the online user list function on the forum homepage and section list page will not be available',
    'optimizer_setting_sessionclose_optimize_desc' => 'Turn on this feature',
    'optimizer_setting_need_optimizer' => 'There are {count} settings to optimize',
    'optimizer_setting_no_need' => 'Settings do not need to be optimized',
    'optimizer_thread_need_optimizer' => 'Need to optimize your topic table',
    'optimizer_thread_no_need' => 'No need to optimize',
    'optimizer_upgrade_need_optimizer' => 'There is a new version, update to the latest version in time',
    'optimizer_upgrade_no_need' => 'Already the latest version',
    'optimizer_setting_rewriteguest' => 'Rewrite is only for guest',
    'optimizer_setting_rewriteguest_desc' =>
        'If this option is enabled, the Rewrite function is only effective for tourists and search engines, which can reduce the burden on the server',
    'optimizer_setting_rewriteguest_optimize_desc' => 'Turn on this feature',
    'optimizer_inviteregister_tip' =>
        'After the invitation registration is turned on in the registration item, set a list of places that are not restricted by the invitation code, which is suitable for local community settings',
    'optimizer_iniviteregister_normal' => 'The detection settings are normal',
    'optimizer_emailregister_normal' => 'This item has been set, please check whether the mail server is configured',
    'optimizer_emailregister_tip' => 'This setting can improve user quality',
    'optimizer_pwlength_need' => 'The minimum password length is too low to be safe',
    'optimizer_pwlength_no_need' => 'After testing, the password length is set normally',
    'optimizer_regmaildomain_need' => 'Need to optimize the blacklist list',
    'optimizer_regmaildomain_tip' => 'You can set email domain name restrictions to prevent spam registration',
    'optimizer_ipregctrl_no_need' => 'A limited time registration IP list has been set',
    'optimizer_ipregctrl_tip' =>
        'When some IP segments are maliciously registered, the malicious IP address can be entered',
    'optimizer_newbiespan_no_need' => 'Trainee time has been set',
    'optimizer_newbiespan_need' => 'It’s safer to set a probation time',
    'optimizer_editperdel_no_need' => 'This setting item has been set',
    'optimizer_editperdel_need' => 'Need to optimize this',
    'optimizer_recyclebin_no_need' => 'Recycle bin has been turned on in the section',
    'optimizer_recyclebin_need' => 'The section does not have the trash bin turned on<br>{forumdesc}',
    'optimizer_forumstatus_no_need' =>
        'No hidden sections or hidden sections have been set up access permissions',
    'optimizer_forumstatus_need' => 'Hidden section has not set access permissions<br>{forumdesc}',
    'optimizer_usergroup9_no_need' => 'Restricted member user group settings are normal',
    'optimizer_usergroup9_need' => 'Please close "{desc}" các lựa chọn',
    'optimizer_usergroup4_need' => 'Please close "{desc}" các lựa chọn',
    'optimizer_usergroup5_need' => 'Please close "{desc}" các lựa chọn',
    'optimizer_usergroup6_need' => 'Please close "{desc}" các lựa chọn',
    'optimizer_usergroup_need_allowsendpm' => 'Whether to allow SMS',
    'optimizer_usergroup_need_allowposturl' => 'Whether to allow out-of-site URL',
    'optimizer_usergroup_need_allowgroupposturl' => 'Whether the group allows out-of-site URLs',
    'optimizer_usergroup_need_allowpost' => 'Allow to post new topics',
    'optimizer_usergroup_need_allowreply' => 'Allow reply',
    'optimizer_usergroup_need_allowdirectpost' => 'Allow direct posting',
    'optimizer_usergroup_need_allowgroupdirectpost' => 'Group allows direct posting',
    'optimizer_usergroup4_no_need' => 'The setting of the non-speaking user group is normal',
    'optimizer_usergroup5_no_need' => 'The prohibition of access to the user group is set normally',
    'optimizer_usergroup6_no_need' => 'Prohibited IP user group settings are normal',
    'optimizer_cloudsecurity_no_need' => 'The waterproof wall is turned on',
    'optimizer_cloudsecurity_need' =>
        'The waterproof wall can effectively prevent spam posts, improve the quality of website content, and reduce management costs. It is highly recommended to install this application',
    'optimizer_cloudsecurity_setting_need' => 'Waterproof wall settings are modified',
    'optimizer_attachexpire_need' => 'After setting, it can play the role of anti-leech',
    'optimizer_attachexpire_no_need' => 'This item is already set',
    'optimizer_attachrefcheck_need' => 'After setting, it can play the role of anti-leech',
    'optimizer_attachrefcheck_no_need' => 'This item is already set',
    'optimizer_loginpwcheck_need' => 'Weak password login detection is not enabled',
    'optimizer_loginpwcheck_no_need' => 'Weak password login detection is turned on',
    'optimizer_loginoutofdate_need' => 'Abnormal login detection is not turned on',
    'optimizer_loginoutofdate_no_need' => 'Abnormal login detection is turned on',
    'optimizer_postqqonly_need' => 'Posting needs to be bound to QQ number, detection is not turned on',
    'optimizer_postqqonly_no_need' => 'Posting needs to be bound to a QQ account. The detection is turned on',
    'optimizer_aggid_need' => '"Administrator, Super Moderator, Moderator" QQ login detection is not enabled',
    'optimizer_aggid_no_need' => '"Administrator, Super Moderator, Moderator" QQ login detection is enabled',
    'optimizer_eviluser_need' => 'If the waterproof wall identifies a user who violates the regulations, please deal with it in time',
    'optimizer_eviluser_no_need' => 'No offending users found',
    'optimizer_white_list_need' =>
        'You have set up a whitelist of waterproof walls. Spam posts sent by whitelisted users will not be processed, please be cautious',
    'optimizer_white_list_no_need' => 'No whitelist set',
    'optimizer_security_daily_need' =>
        'Turn on the daily optimization of the waterproof wall, which can clear the homepage traces after deleting posts',
    'optimizer_security_daily_no_need' => 'The scheduled task has been started',
    'optimizer_dos8p3_need' => 'DOS 8.3 File name support is wrongly turned on',
    'optimizer_dos8p3_no_need' => 'DOS 8.3 File name support is not turned on or the bottom layer does not support',
    'optimizer_httphost_need' => 'Empty HOST access is open',
    'optimizer_httphost_no_need' => 'Empty HOST access support is not enabled or the bottom layer does not support',
);
