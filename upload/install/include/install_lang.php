<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */
if (!defined('IN_COMSENZ')) {
    exit('Access Denied');
}
define('UC_VERNAME', 'Vietnamese Version');
$lang = array(
    'SC_GBK' => 'SC GBK',
    'TC_BIG5' => 'TC BIG5',
    'SC_UTF8' => 'Tiếng Việt',
    'TC_UTF8' => 'TC UTF8',
    'EN_ISO' => 'ENGLISH ISO8859',
    'EN_UTF8' => 'ENGLIST UTF-8',
    'title_install' => 'Cài đặt ' . SOFT_NAME,
    'agreement_yes' => 'Đồng ý',
    'agreement_no' => 'Hủy bỏ',
    'notset' => 'Không giới hạn',
    'enable' => 'Bật',
    'disable' => 'Tắt',
    'message_title' => 'Thông báo',
    'error_message' => 'Có lỗi',
    'message_return' => 'Quay lại',
    'return' => 'Quay lại',
    'install_wizard' => 'Cài đặt Discuz X2.5',
    'config_nonexistence' => 'Tập tin cấu hình config.inc.php không tồn tại.',
    'nodir' => 'Thư mục không tồn tại',
    'redirect' =>
        'Trình duyệt sẽ tự động chuyển sang trang mới.<br>Nếu trình duyệt của bạn không hỗ trợ hãy bấm vào đây.',
    'auto_redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới',
    'database_errno_2003' =>
        'Không thể kết nối với CSDL vui lòng kiểm tra địa chỉ máy chủ CSDL',
    'database_errno_1044' =>
        'Không thể tạo CSDL mới, hãy kiểm tra tên CSDL là chính xác',
    'database_errno_1045' =>
        'Không thể kết nối với CSDL vui lòng kiểm tra tài khoản hoặc mật khẩu CSDL',
    'database_errno_1064' => 'Lỗi kết nối CSDL',
    'dbpriv_createtable' => 'Ko thể CREATE TABLE để tiếp tục cài đặt',
    'dbpriv_insert' => 'Ko thể INSERT để tiếp tục cài đặt',
    'dbpriv_select' => 'Ko thể SELECT để tiếp tục cài đặt',
    'dbpriv_update' => 'Ko thể UPDATE để tiếp tục cài đặt',
    'dbpriv_delete' => 'Ko thể DELETE để tiếp tục cài đặt',
    'dbpriv_droptable' => 'Ko thể DROP TABLE để tiếp tục cài đặt',
    'db_not_null' =>
        'CSDL đã được cài đặt Ucenter, tiếp tục cài đặt sẽ xóa dữ liệu gốc.',
    'db_drop_table_confirm' =>
        'Tiếp tục cài đặt CSDL cũ sẽ bị xóa hết. Bạn có chắc chắn muốn tiếp tục ?',
    'writeable' => 'Có thể viết',
    'unwriteable' => 'Ko thể viết',
    'old_step' => 'Quay lại',
    'new_step' => 'Tiếp theo',
    'database_errno_2003' =>
        'Không thể kết nối với CSDL vui lòng kiểm tra địa chỉ máy chủ CSDL',
    'database_errno_1044' =>
        'Không thể tạo CSDL mới, hãy kiểm tra tên CSDL là chính xác',
    'database_errno_1045' =>
        'Không thể kết nối với CSDL vui lòng kiểm tra tài khoản hoặc mật khẩu CSDL',
    'database_connect_error' => 'Lỗi kết nối CSDL',
    'step_title_1' => 'Môi trường',
    'step_title_2' => 'Ucenter',
    'step_title_3' => 'CSDL',
    'step_title_4' => 'Cài đặt',
    'step_env_check_title' => 'Bắt đầu cài đặt',
    'step_env_check_desc' => 'Kiểm tra môi trường cài đặt',
    'step_db_init_title' => 'Cài đặt cơ sở dữ liệu',
    'step_db_init_desc' => 'Đang chạy trình cài đặt cơ sở dữ liệu',
    'step1_file' => 'Tập tin',
    'step1_need_status' => 'Yêu cầu',
    'step1_status' => 'Hiện tại',
    'not_continue' => 'Xin vui lòng sửa đổi theo yêu cầu',
    'tips_dbinfo' => 'Điền thông tin CSDL',
    'tips_dbinfo_comment' => '',
    'tips_admininfo' => 'Điền thông tin quản trị',
    'step_ext_info_title' => 'Cài đặt thành công',
    'step_ext_info_comment' => 'Nhấn vào đây để nhập thông tin đăng nhập',
    'ext_info_succ' => 'Cài đặt thành công',
    'install_submit' => 'Tiếp tục',
    'install_locked' =>
        'Cài đặt bị khoá, nếu bạn muốn cài lại, hãy xoá file<br /> ' .
        str_replace(ROOT_PATH, '', $lockfile),
    'error_quit_msg' =>
        'Bạn phải giải quyết vấn đề trên, để việc cài đặt có thể tiếp tục',
    'step_app_reg_title' => 'Thiết lập môi trường',
    'step_app_reg_desc' => 'Kiểm tra máy chủ và Ucenter',
    'tips_ucenter' => 'Điền thông tin Ucenter',
    'tips_ucenter_comment' =>
        'Nếu bạn đã cài đặt Ucenter thì hãy điền vào các thông tin dưới đây, nếu chưa cài đặt bạn có thể tải Ucenter tại <a href="http://www.discuz.com/" target="blank">Comsenz</a> hoặc <a href="http://www.discuz.vn/" target="blank">discuz.vn</a>',
    'advice_mysql_connect' => 'Kiểm tra chắc chắn các module mysql ko bị lỗi',
    'advice_gethostbyname' => 'Để cài đặt cần mở chức năng gethostbyname',
    'advice_file_get_contents' =>
        'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
    'advice_xml_parser_create' =>
        'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
    'advice_fsockopen' =>
        'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
    'advice_pfsockopen' => 'Cần bật hàm allow_url_fopen',
    'advice_stream_socket_client' =>
        'Whether the prohibition in the PHP configuration the stream_socket_client function',
    'advice_curl_init' =>
        'Whether banned curl_init function in PHP configuration',
    'ucurl' => 'URL UCenter',
    'ucpw' => 'Mật khẩu',
    'ucip' => 'IP UCenter',
    'ucenter_ucip_invalid' => 'Định dạng lỗi, vui lòng điền đúng định dạng IP',
    'ucip_comment' => 'Thường thì không phải điền',
    'tips_siteinfo' => 'Xin vui lòng điền vào các thông tin trang web',
    'sitename' => 'Tên trang web',
    'siteurl' => 'URL trang web',
    'forceinstall' => 'Bắt buộc cài đặt',
    'dbinfo_forceinstall_invalid' =>
        'CSDL này đã chứa dữ liệu, để cài đặt bạn có thể sửa các bảng tiền tố hoặc cài đè nên dữ liệu cũ.',
    'click_to_back' => 'Quay lại',
    'adminemail' => 'Admin Email',
    'adminemail_comment' => 'Dùng để báo lỗi chương trình',
    'dbhost_comment' => 'Thường là localhost',
    'dbname_comment' => 'Tên database cài Discuz!',
    'dbuser_comment' => 'Tài khoản database',
    'dbpw_comment' => 'Mật khẩu cho tài khoản database',
    'tablepre_comment' =>
        'Điền vào nếu mún phân biệt bảng khi cài nhiều diễn đàn',
    'forceinstall_check_label' => 'Tôi sẽ cài đè dữ liệu cũ',
    'uc_url_empty' => 'Bạn chưa điền URL Ucenter.',
    'uc_url_invalid' => 'URL không hợp lệ',
    'uc_url_unreachable' => 'Sai URL Ucenter, vui lòng kiểm tra',
    'uc_ip_invalid' => 'Không thể dùng tên miền, vui lòng điền IP',
    'uc_admin_invalid' => 'Sai mật khẩu Ucenter',
    'uc_data_invalid' => 'Sai thông tin, vui lòng kiểm tra URL Ucenter ',
    'uc_dbcharset_incorrect' =>
        'Mã font Ucenter không trùng với Discuz X1.5, vui lòng kiểm tra',
    'uc_api_add_app_error' => 'Thêm ứng dụng vài Ucenter ko thành công',
    'uc_dns_error' => 'DNS Ucenter lỗi vui lòng dùng IP',
    'ucenter_ucurl_invalid' => 'Sai URL Ucenter',
    'ucenter_ucpw_invalid' => 'Sai mật khẩu Ucenter',
    'siteinfo_siteurl_invalid' => 'URL trang web trống hoặc sai định dạng',
    'siteinfo_sitename_invalid' => 'Tên trang web trống, vui lòng kiểm tra',
    'dbinfo_dbhost_invalid' => 'Sai tên máy chủ CSDL',
    'dbinfo_dbname_invalid' => 'Sai tài khoản',
    'dbinfo_dbuser_invalid' => 'Sai tài khoản CSDL, vui lòng kiểm tra',
    'dbinfo_dbpw_invalid' => 'Sai mật khẩu CSDL, vui lòng kiểm tra',
    'dbinfo_adminemail_invalid' => 'Email trống, vui lòng kiểm tra',
    'dbinfo_tablepre_invalid' =>
        'Bảng tiền tố trống hoặc sai định dạng, vui lòng kiểm tra',
    'admininfo_username_invalid' =>
        'Tên tài khoản trống hoặc sai định dạng, vui lòng kiểm tra',
    'admininfo_email_invalid' => 'Email trống, vui lòng kiểm tra',
    'admininfo_password_invalid' => 'Mật khẩu trống, vui lòng kiểm tra',
    'admininfo_password2_invalid' => 'Hai mật khẩu không giống nhau.',
    'install_dzfull' =>
        '<br><label><input type="radio"' .
        (getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '') .
        ' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /> Cài đặt mới Discuz! X (gồm UCenter Server)</label>',
    'install_dzonly' =>
        '<br><label><input type="radio"' .
        (getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '') .
        ' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> Chỉ cài Discuz! X (UCenter Server đã cài sẵn)</label>',
    'username' => 'Tài khoản',
    'email' => 'Email',
    'password' => 'Mật khẩu',
    'password_comment' => 'Điền vào mật khẩu',
    'password2' => 'Nhập lại',
    'admininfo_invalid' => 'Sai thông tin, vui lòng kiểm tra lại',
    'dbname_invalid' => 'Tên CSDL trống, vui lòng điền lại',
    'tablepre_invalid' => 'Sai tiền tố hoặc trống, vui lòng kiểm tra',
    'admin_username_invalid' =>
        'Tên tài khoản không đúng, tối đa là 15 ký tự và ko có ký tự đặc biệt',
    'admin_password_invalid' => 'Hai mật khẩu không giống nhau',
    'admin_email_invalid' =>
        'Email lỗi, email đã được sử dụng hoặc sai định dạng.',
    'admin_invalid' => 'Thông tin lỗi, hãy nhập cẩn thận từng mục',
    'admin_exist_password_error' =>
        'Tên người sử dụng đã tồn tại, nếu bạn muốn thiết lập quản trị diễn đàn này, vui lòng nhập đúng mật khẩu cho người dùng, hoặc thay thế tên của người quản trị diễn đàn',
    'tagtemplates_subject' => 'Tiêu đề',
    'tagtemplates_uid' => 'Số ID',
    'tagtemplates_username' => 'Tài khoản',
    'tagtemplates_dateline' => 'Ngày',
    'tagtemplates_url' => 'Địa chỉ chủ đề',
    'uc_version_incorrect' =>
        'Phiên bản Ucenter đã quá cũ bạn cần cập nhật bản mới tại ：http://www.comsenz.com/ hoặc http://wwww.discuz.vn',
    'config_unwriteable' =>
        'Ko cài đặt, bạn cần chmod tập tin config.inc.php = 0777',
    'install_in_processed' => 'Cài đặt ...',
    'install_succeed' => 'Cài đặt thành công, bấm vào đây để tiếp tục',
    'install_cloud' =>
        'Successful installation, welcomed the opening of the Discuz! Cloud platform <br> Powered by Discuz! Cloud platform is committed to help website owners increase traffic, enhance the ability of Web site operators to increase website revenue.<br>Discuz! Cloud platform is provided free of charge QQ Internet, Tencent, vertical and horizontal search, community QQ groups, roaming, SOSO expression services. Discuz! Cloud platform will continue to provide more quality services. <br> opened Discuz! platform, make sure your site (Discuz!, UCHome, or SupeSite) has been upgraded to Discuz! X2.5.',
    'to_install_cloud' => 'Opened to the background',
    'to_index' => 'Temporarily opened',
    'init_credits_karma' => 'Uy tín',
    'init_credits_money' => 'Tiền',
    'init_postno0' => 'Chủ thớt',
    'init_postno1' => 'Giật tem',
    'init_postno2' => 'Hạng 3',
    'init_postno3' => 'Hạng 4',
    'init_support' => 'Tốt',
    'init_opposition' => 'Kém',
    'init_group_0' => 'Thành viên',
    'init_group_1' => 'Quản trị viên',
    'init_group_2' => 'Siêu quản lý',
    'init_group_3' => 'Quản lý',
    'init_group_4' => 'Cấm phát ngôn',
    'init_group_5' => 'Cấm truy cập',
    'init_group_6' => 'Cấm IP',
    'init_group_7' => 'Khách',
    'init_group_8' => 'Chờ xác nhận',
    'init_group_9' => 'Khách/Chưa kích hoạt',
    'init_group_10' => 'Thành viên mới',
    'init_group_11' => 'Thành viên',
    'init_group_12' => 'Thành viên năng nổ',
    'init_group_13' => 'Thành viên nhiệt tình',
    'init_group_14' => 'Thành viên sáng giá',
    'init_group_15' => 'Thành viên gắn bó',
    'init_rank_1' => 'Tập viết',
    'init_rank_2' => 'Học sinh',
    'init_rank_3' => 'Sinh viên',
    'init_rank_4' => 'Tiến sĩ',
    'init_rank_5' => 'Giáo sư',
    'init_cron_1' => 'Xóa hết bài hôm nay',
    'init_cron_2' => 'Xóa thời gian online trong tháng',
    'init_cron_3' => 'Xóa hết dữ liệu ngày',
    'init_cron_4' => 'Thống kê email mừng sinh nhật',
    'init_cron_5' => 'Trả lời thông báo',
    'init_cron_6' => 'Xóa hết thông báo',
    'init_cron_7' => 'Xóa hết kế hoạch',
    'init_cron_8' => 'Làm sạch thúc đẩy diễn đàn',
    'init_cron_9' => 'Xóa hết chủ đề của tháng',
    'init_cron_10' => 'Cập nhật X-Space hàng ngày',
    'init_cron_11' => 'Chủ đề cập nhật hàng tuần',
    'init_bbcode_1' => 'Marquee',
    'init_bbcode_2' => 'Chèn Flash',
    'init_bbcode_3' => 'QQ',
    'init_bbcode_4' => 'Sup',
    'init_bbcode_5' => 'Sub',
    'init_bbcode_6' => 'Chèn file âm thanh',
    'init_bbcode_7' => 'Chèn file video',
    'init_qihoo_searchboxtxt' => 'Nhập từ khóa, Tìm nhanh diễn đàn này',
    'init_threadsticky' => 'Chú ý, Phân loại, Chú ý',
    'init_default_style' => 'Phong cách mặc định',
    'init_default_forum' => 'Diễn đàn mặc định',
    'init_default_template' => 'Mẫu mặc định',
    'init_default_template_copyright' => 'Comsenz (Bắc Kinh)',
    'init_dataformat' => 'j-n-Y',
    'init_modreasons' =>
        'Quảng cáo/SPAM\\r\\nVirus\\r\\nKhông dấu\\r\\nLạc đề\\r\\nTrùng bài\\r\\n\\r\\nĐồng tình\\r\\nBài hay\\r\\nTinh hoa',
    'init_userreasons' =>
        'Quảng cáo\\r\\nSPAM\\r\\nSEX\\r\\nLạc đề\\r\\nPhạm quy\\r\\n\\r\\nĐồng tình\\r\\nBài hay\\r\\nNguyên tác',
    'init_link' => 'Discuz! Diễn đàn chính thức thiết lập và trao đổi kỹ thuật',
    'init_link_note' =>
        'Cung cấp Discuz mới nhất! Tin tức sản phẩm, tải về và trao đổi kỹ thuật',
    'init_promotion_task' => 'Nhiệm vụ thưởng',
    'init_gift_task' => 'Nhiệm vụ nhận quà',
    'init_avatar_task' => 'Nhiệm vụ avatar',
    'license' => '<div class="license"><h1>License</h1>
<p>Copyright (c) 2001-2021, Tencent Cloud Computing (Beijing) Co., Ltd. (formerly Beijing Kangsheng Xinchuang Technology Co., Ltd.) reserves all rights. </p>
<p>Thank you for choosing Kangsheng products. Hope our efforts can provide you with an efficient, fast, and powerful site solution, and a powerful community forum solution. The website of Kangsheng Company is http://www.comsenz.com, and the website of the official product discussion forum is http://www.discuz.net. </p>
<p>Note to users: This agreement is a legal agreement between you and Kangsheng regarding your use of various software products and services provided by Kangsheng. Regardless of whether you are an individual or an organization, profitable or not, and how you use it (including for the purpose of learning and research), you must carefully read this agreement, including the exemption clauses exempting or limiting Kangsheng’s liability and the limitation of your rights. Please review and accept or reject these terms of service. If you do not agree to these terms of service and/or Kangsheng’s amendments to them at any time, you should not use or voluntarily cancel the Kangsheng products provided by Kangsheng. Otherwise, any of your use of registration, login, downloading, viewing and other related services in Kangsheng products will be regarded as your complete acceptance of these terms of service, including accepting any amendments made by Kangsheng to the terms of service at any time .
<p>Once the terms of service are changed, Kangsheng will publish the revised content on the webpage. Once the revised terms of service are published on the website management background, they will effectively replace the original terms of service. You can visit the Kangsheng official forum to check the latest version of the terms of service at any time. If you choose to accept these terms, it means that you agree to be bound by the terms of the agreement. If you do not agree to the terms of service, you cannot obtain the right to use the service. If you violate the provisions of these terms, Kangsheng Company has the right to suspend or terminate your qualification to use Kangsheng products at any time and reserves the right to pursue relevant legal liabilities. </p>
<p>Only after understanding, agreeing, and complying with all the terms of this agreement can you start using Kangsheng products. You may directly sign another written agreement with Kangsheng to supplement or replace all or any part of this agreement. </p></p>
<p>Kangsheng owns all intellectual property rights of this software. This software is for license agreement only, not for sale. Kangsheng only allows you to copy, download, install, use or otherwise benefit from the software\'s functions or intellectual property rights in compliance with the terms of this agreement. </p>
<h3>I. Rights licensed under agreement</h3>
<ol>
    <li>You can use this software for non-commercial purposes on the basis of fully complying with this license agreement without having to pay software copyright license fees. </li>
    <li>You can modify the Kangsheng product source code (if provided) or interface style to suit your website requirements within the constraints and limitations stipulated in the agreement. </li>
    <li>You have the ownership of all member materials, articles and related information in the website built with this software, and independently assume the review and care obligations of the website built with this software, to ensure that it does not infringe on anyone’s legitimate rights and interests. Independently assume all the responsibilities arising from the use of Kangsheng software and services. If the loss of the Kangsheng company or the user is caused, you shall make full compensation. </li>
    <li>If you need to use the Kangsheng software or service users for commercial purposes, you must obtain a separate written permission from Kangsheng. After you have obtained the commercial authorization, you can use the software for commercial purposes, and at the same time according to the type of authorization purchased The determined technical support period, technical support method and technical support content, from the time of purchase, within the technical support period, have to obtain technical support services within the specified range through the specified method. Commercial authorized users have the right to reflect and put forward opinions. Related opinions will be considered as the primary consideration, but there is no promise or guarantee that they will be adopted. </li>
    <li>You can download applications suitable for your website from the application center service provided by Kangsheng, but you should pay the corresponding fees to the application developers/owners. </li>
</ol>
<h3>II. Restrictions and limitations stipulated in the agreement</h3>
<ol>
    <li>The software may not be used for commercial purposes (including but not limited to corporate websites, business websites, profit-making or profit-making websites) without the written commercial authorization of Kangsheng Company. To purchase a commercial license, please log on to http://www.discuz.com for reference, or call 8610-51282255 for details. </li>
    <li>It is not allowed to rent, sell, mortgage or issue sub-licenses to this software or the commercial licenses associated with it. </li>
    <li>In any case, regardless of the purpose, whether it has been modified or beautified, or the degree of modification, as long as the whole or any part of the Kangsheng product is used, without written permission, the name of the Kangsheng product and the Kangsheng company in the footer of the page The links to the affiliated websites (http://www.comsenz.com, or http://www.discuz.net) must be kept and cannot be cleared or modified. </li>
    <li>It is forbidden to develop any derivative version, modified version or third-party version for redistribution based on the whole or any part of Kangsheng products. </li>
    <li>The application you download from the application center, without the written permission of the application developer/owner, shall not be reverse engineered, reverse assembled, reverse compiled, etc., and may not be copied, modified, linked, or copied without authorization. Reprint, compile, publish, publish, and develop derivative products and works related to it. </li>
    <li>If you fail to comply with the terms of this agreement, your authorization will be terminated, the rights you have licensed will be taken back, and you shall bear the corresponding legal responsibilities. </li>
</ol>
<h3>III. Limited Warranty and Disclaimer</h3>
<ol>
    <li>This software and the accompanying files are provided as a form of not providing any explicit or implicit compensation or guarantee. </li>
    <li>Users use this software voluntarily. You must understand the risks of using this software. Before purchasing the product and technical services, we do not promise to provide any form of technical support, warranty for use, or any use of this software. And the related responsibility for the problem. </li>
    <li>Kangsheng Company is not responsible for the articles or information in the websites or forums constructed by using this software, and you are solely responsible for all the responsibilities. </li>
    <li>Kangsheng Company cannot fully monitor the applications uploaded by third parties to the application center, so it does not guarantee the legality, safety, integrity, authenticity or quality of the application; when you download the application from the application center, Agree to make your own judgment and bear all risks without relying on Kangsheng. However, under any circumstances, Kangsheng has the right to stop the application center service in accordance with the law and take corresponding actions, including but not limited to uninstalling relevant applications, suspending all or part of the service, keeping relevant records, and reporting to relevant authorities. Kangsheng Company shall not be liable for any direct, indirect or joint liability for the losses that may be caused to you and the third party. </li>
    <li>Kangsheng Company does not guarantee the timeliness, safety and accuracy of the software and services provided by Kangsheng Company. The software is caused by force majeure and factors beyond the control of Kangsheng Company (including hacker attacks, power outages, etc.). If the use and service are suspended or terminated and you cause losses, you agree to waive all the rights to hold Kangsheng Company responsible. </li>
    <li>Kangsheng Company specially draws your attention to the fact that in order to protect the autonomy of the company’s business development and adjustment, Kangsheng Company has the right to modify the service content, suspend or terminate part or all of the software use and The right of the service, the modification will be announced on the relevant page of the Kangsheng company\'s website, once published, it will be regarded as a notice. If Kangsheng Company exercises the right to modify or suspend or terminate part or all of the software use and service and cause losses, Kangsheng Company shall not be liable to you or any third party. </li>
</ol>
<p>The details of the end-user license agreement, commercial authorization and technical services of Kangsheng products are exclusively provided by Kangsheng. Kangsheng Company has the right to modify the authorization agreement and service price list without prior notice, and the revised agreement or price list will be effective for newly authorized users from the date of the change. </p>
<p>Once you start to install Kangsheng products, you are deemed to fully understand and accept the terms of this agreement. While enjoying the rights granted by the above terms, you are subject to relevant constraints and restrictions. Behavior outside the scope of the agreement will directly violate this authorization agreement and constitute an infringement. We have the right to terminate the authorization at any time, order the damage to be stopped, and reserve the right to pursue relevant liabilities. </p>
<p>The interpretation, validity and dispute resolution of the terms of this license agreement are applicable to the laws of the Mainland of the People’s Republic of China. </p>
<p>If any dispute or controversy occurs between you and Kangsheng, you should first settle it through friendly negotiation. If the negotiation fails, you hereby fully agree to submit the dispute or dispute to the People’s Court of Haidian District, Beijing, where Kangsheng is located. Kangsheng Company has the right to interpret and modify the contents of the above clauses. </p>
<p>(End of text)</p>
<p align="right">Kangsheng Company</p>
</div>',
    'php_version_too_low' => 'Phiên bản PHP quá thấp, vui lòng nâng cấp lên bản tối thiểu '.$env_items['php']['r'],
    'php8_tips' => 'Phiên bản h iện tại chưa hỗ trợ PHP8, hãy sử dụng PHP 7.4 và thử lại',
	'no_utf8_tips' => 'Hello, the version you are using is a localized encoding version such as GBK / BIG-5. This version is no longer the main push version. If you plan to build a new site [strongly] it is recommended that you use the latest official UTF-8 version to install.',
	'no_latest_tips' => 'Hello, the version you are using is older, and there may be bugs and security risks. If there are no special circumstances, it is recommended that you use the latest official UTF-8 version to install.',
	'unstable_tips' => 'Hello, the version you are using is an unofficial version, and there may be unknown bugs or defects. If you plan to formally build a website or purchase a plug-in, it is recommended that you use the latest official UTF-8 version to install.',
	'next_tips' => '\r\nClick [OK] to jump to the latest official UTF-8 version download page, click [Cancel] to continue the installation (not recommended) ',
    'uc_installed' =>
        'Bạn đã cài đặt UCenter, nếu bạn muốn cài đặt lại vui lòng xóa tập tin data/install.lock',
    'i_agree' => 'Tôi đã đọc và đồng ý với các điều khoản',
    'supportted' => 'Hỗ trợ',
    'unsupportted' => 'Ko hỗ trợ',
    'max_size' => 'Hỗ trợ/Tối đa',
    'project' => 'Dự án',
    'ucenter_required' => 'Yêu cầu',
    'ucenter_best' => 'Discuz! X2.0',
    'curr_server' => 'Hiện tại',
    'env_check' => 'Kiểm tra',
    'os' => 'OS',
    'php' => 'Bản PHP',
    'attachmentupload' => 'Đính kèm',
    'unlimit' => 'Không giới hạn',
    'version' => 'Phiên bản',
    'gdversion' => 'Bản GD',
    'allow' => 'Hỗ trợ',
    'unix' => 'Unix',
    'diskspace' => 'Đĩa cứng',
    'opcache' => 'OPcache',
    'curl' => 'cURL',
    'priv_check' => 'Thư mục, tập tin',
    'func_depend' => 'Kiểm tra',
    'func_name' => 'Tên',
    'check_result' => 'Kết quả',
    'suggestion' => 'Khuyến nghị',
    'advice_mysql' => 'Kiểm tra chắc chắn các module mysql ko bị lỗi',
    'advice_fopen' =>
        'Chức năng này yêu cầu mở hàm allow_url_fopen trong php.ini.',
    'advice_file_get_contents' =>
        'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
    'advice_xml' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
    'none' => 'Không có gì',
    'dbhost' => 'Máy chủ CSDL',
    'dbuser' => 'Tài khoản CSDL',
    'dbpw' => 'Mật khẩu CSDL',
    'dbname' => 'Tên CSDL',
    'tablepre' => 'Tiền tố',
    'ucfounderpw' => 'Mật khẩu',
    'ucfounderpw2' => 'Nhập lại',
    'init_log' => 'Khởi tạo Log',
    'clear_dir' => 'Thư mục trống',
    'select_db' => 'Chọn CSDL',
    'create_table' => 'Tạo bảng',
    'succeed' => 'Thành công ',
    'install_data' => 'Dữ liệu đang được cài đặt',
    'install_test_data' => 'Các dữ liệu đang được cài đặt',
    'method_undefined' => 'Không xác định phương pháp',
    'database_nonexistence' => 'CSDL không tồn tại',
    'skip_current' => 'Bỏ qua bước này',
    'topic' => 'Chủ đề',
    'install_finish' =>
        'Diễn đàn của bạn đã được cài đặt, bấm vào đây để truy cập',
);
$msglang = array(
    'config_nonexistence' => 'Tập tin cấu hình config.inc.php không tồn tại.',
);
