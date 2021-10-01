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
    'license' => '<div class="license"><h1>Điều khoản sử dụng</h1>

<p>版权所有 (c) 2001-2021，腾讯云计算（北京）有限责任公司(原北京康盛新创科技有限责任公司)保留所有权利。</p>

<p>感谢您选择康盛产品。希望我们的努力能为您提供一个高效快速、强大的站点解决方案，和强大的社区论坛解决方案。康盛公司网址为 http://www.comsenz.com，产品官方讨论区网址为 http://www.discuz.net。</p>

<p>用户须知：本协议是您与康盛公司之间关于您使用康盛公司提供的各种软件产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制康盛责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款及/或康盛随时对其的修改，您应不使用或主动取消康盛公司提供的康盛产品。否则，您的任何对康盛产品中的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受康盛对服务条款随时所做的任何修改。
<p>本服务条款一旦发生变更, 康盛将在网页上公布修改内容。修改后的服务条款一旦在网站管理后台上公布即有效代替原来的服务条款。您可随时登陆康盛官方论坛查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，康盛公司有权随时中止或终止您对康盛产品的使用资格并保留追究相关法律责任的权利。</p>
<p>在理解、同意、并遵守本协议的全部条款后，方可开始使用康盛产品。您可能与康盛公司直接签订另一书面协议，以补充或者取代本协议的全部或者任何部分。</p></p>

<p>康盛拥有本软件的全部知识产权。本软件只供许可协议，并非出售。康盛只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。</p>

<h3>I. 协议许可的权利</h3>
<ol>
   <li>您可以在完全遵守本许可协议的基础上，将本软件应用于非商业用途，而不必支付软件版权许可费用。</li>
   <li>您可以在协议规定的约束和限制范围内修改康盛产品源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
   <li>您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与使用本软件构建的网站内容的审核、注意义务，确保其不侵犯任何人的合法权益，独立承担因使用康盛软件和服务带来的全部责任，若造成康盛公司或用户损失的，您应予以全部赔偿。</li>
   <li>若您需将康盛软件或服务用户商业用途，必须另行获得康盛的书面许可，您在获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
   <li>您可以从康盛提供的应用中心服务中下载适合您网站的应用程序，但应向应用程序开发者/所有者支付相应的费用。</li>
</ol>

<h3>II. 协议规定的约束和限制</h3>
<ol>
   <li>未获康盛公司书面商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.discuz.com参考相关说明，也可以致电8610-51282255了解详情。</li>
   <li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
   <li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用康盛产品的整体或任何部分，未经书面许可，页面页脚处的康盛产品名称和康盛公司下属网站（http://www.comsenz.com、或 http://www.discuz.net） 的链接都必须保留，而不能清除或修改。</li>
   <li>禁止在康盛产品的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
   <li>您从应用中心下载的应用程序，未经应用程序开发者/所有者的书面许可，不得对其进行反向工程、反向汇编、反向编译等，不得擅自复制、修改、链接、转载、汇编、发表、出版、发展与之有关的衍生产品、作品等。</li>
   <li>如果您未能遵守本协议的条款，您的授权将被终止，所许可的权利将被收回，同时您应承担相应法律责任。</li>
</ol>

<h3>III. 有限担保和免责声明</h3>
<ol>
   <li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
   <li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
   <li>康盛公司不对使用本软件构建的网站中或者论坛中的文章或信息承担责任，全部责任由您自行承担。</li>
   <li>康盛公司无法全面监控由第三方上传至应用中心的应用程序，因此不保证应用程序的合法性、安全性、完整性、真实性或品质等；您从应用中心下载应用程序时，同意自行判断并承担所有风险，而不依赖于康盛公司。但在任何情况下，康盛公司有权依法停止应用中心服务并采取相应行动，包括但不限于对于相关应用程序进行卸载，暂停服务的全部或部分，保存有关记录，并向有关机关报告。由此对您及第三人可能造成的损失，康盛公司不承担任何直接、间接或者连带的责任。</li>
   <li>康盛公司对康盛提供的软件和服务之及时性、安全性、准确性不作担保，由于不可抗力因素、康盛公司无法控制的因素（包括黑客攻击、停断电等）等造成软件使用和服务中止或终止，而给您造成损失的，您同意放弃追究康盛公司责任的全部权利。</li>
   <li>康盛公司特别提请您注意，康盛公司为了保障公司业务发展和调整的自主权，康盛公司拥有随时经或未经事先通知而修改服务内容、中止或终止部分或全部软件使用和服务的权利，修改会公布于康盛公司网站相关页面上，一经公布视为通知。 康盛公司行使修改或中止、终止部分或全部软件使用和服务的权利而造成损失的，康盛公司不需对您或任何第三方负责。</li>
</ol>

<p>有关康盛产品最终用户授权协议、商业授权与技术服务的详细内容，均由康盛公司独家提供。康盛公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权利，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>

<p>一旦您开始安装康盛产品，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权利的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>

<p>本许可协议条款的解释，效力及纠纷的解决，适用于中华人民共和国大陆法律。</p>

<p>若您和康盛之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，您在此完全同意将纠纷或争议提交康盛所在地北京市海淀区人民法院管辖。康盛公司拥有对以上各项条款内容的解释权及修改权。</p>

<p>（正文完）</p>

<p align="right">康盛公司</p>

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
