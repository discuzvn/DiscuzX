<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'custom_name' => 'Tùy chọn quảng cáo',
    'custom_desc' =>
        'By adding advertising code in the template and HTML files, you can add advertisements on any page of the site. Suitable for webmasters who understand simple HTML knowledge.<br /><br />
		<a href="javascript:;" onclick="prompt(\'Bấm (CTRL+C) để copy nội dung sau đây để thêm vào ad slot\', \'<!--{ad/custom_' .
        $_GET['customid'] .
        '}-->\')" />Internal call</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'Bấm (CTRL+C) để copy nội dung vào file HTML vào ad slot\', \'&lt;script type=\\\'text/javascript\\\' src=\\\'' .
        $_G['siteurl'] .
        'api.php?mod=ad&adid=custom_' .
        $_GET['customid'] .
        '\\\'&gt;&lt;/script&gt;\')" />External call</a>',
    'custom_id_notfound' => 'Quảng cáo không tồn tại',
    'custom_codelink' => 'Code nội bộ',
    'custom_text' => 'Tùy chọn quảng cáo',
);
