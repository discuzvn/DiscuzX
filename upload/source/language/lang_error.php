<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'System Message' => 'Tin hệ thống',
    'config_notfound' =>
        'Tập tin cấu hình "config_global.php" không tìm thấy hoặc không thể truy cập, hãy chắc chắn bạn đã cài đặt nó',
    'template_notfound' => 'Template không thấy hoặc không thể truy cập',
    'directory_notfound' => 'Thư mục không tìm thấy hoặc không thể truy cập',
    'request_tainting' =>
        'Yêu cầu truy cập của bạn có chứa các ký tự bất hợp pháp, đã bị từ chối bởi hệ thống',
    'db_help_link' => 'Click vào đây để được giúp đỡ',
    'db_error_message' => 'Thông tin về lỗi',
    'db_error_sql' => '<b>SQL</b>: $sql<br />',
    'db_error_backtrace' => '<b>Backtrace</b>: $backtrace<br />',
    'db_error_no' => 'Mã lỗi',
    'db_notfound_config' =>
        'Tập tin cấu hình "config_global.php" không tìm thấy hoặc không thể truy cập',
    'db_notconnect' => 'Không thể kết nối đến CSDL',
    'db_security_error' => 'Security Threats to Query Statements',
    'db_query_sql' => 'Query',
    'db_query_error' => 'Query error',
    'db_config_db_not_found' =>
        'Database configuration error, please check the config_global.php file carefully',
    'system_init_ok' =>
        'Website system initialization is complete, please <a href="index.php">Click here</ a> into the',
    'backtrace' => 'Operation information',
    'error_end_message' =>
        '<a href="http://{host}">{host}</a> chúng tôi đã ghi nhận lỗi này, xin lỗi vì bất tiện đã gây ra',
    'mobile_error_end_message' =>
        '<a href="http://{host}">{host}</a> chúng tôi xin lỗi vì bất tiện này',
    'file_upload_error_-101' =>
        'Tải lên thất bại! File tải lên không tồn tại hoặc không hợp lệ, hãy thử lại',
    'file_upload_error_-102' =>
        'Tải lên thất bại! File tải lên không phải là ảnh, hãy thử lại',
    'file_upload_error_-103' =>
        'Tải lên thất bại! Không thể ghi file, có thể do lỗi máy chủ, hãy thử lại',
    'file_upload_error_-104' =>
        'Tải lên thất bại! Định dạng ảnh không hợp lệ, hãy thử lại',
);
