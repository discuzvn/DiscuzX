<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'groupthread_fids' => 'ID nhóm',
    'groupthread_fids_comment' =>
        'Thiết lập id chủ đề cụ thể mà bạn muốn hiển thị, sử dụng "," ngăn cách các ID',
    'groupthread_gtids' => 'Danh mục nhóm',
    'groupthread_gtids_comment' => 'Chọn danh mục nhóm',
    'groupthread_uids' => 'UID của tác giả',
    'groupthread_uids_comment' =>
        'Thiết lập người dùng mà bạn muốn hiển thị.Sử dụng ","  ngăn cách các UIDs',
    'groupthread_keyword' => 'Từ khóa',
    'groupthread_keyword_comment' =>
        'Đặt từ khoá xuất hiện trong tiêu đề. Lưu ý: để trống là không lọc, có thể dùng wildcard *; Kết hợp nhiều từ khoá bằng toán tử AND hoặc OR.',
    'groupthread_startrow' => 'Hàng đầu tiên',
    'groupthread_startrow_comment' =>
        'Nếu bạn cần phải thiết lập hàng đầu, vui lòng nhập một số, 0 là hàng đầu tiên.',
    'groupthread_items' => 'Các hàng còn lại.',
    'groupthread_items_comment' => 'Điền số 0 nếu muốn là hàng đầu tiên.',
    'groupthread_titlelength' => 'Tiêu đề bài viết nhóm',
    'groupthread_maxlength_comment' =>
        'Thiết lập độ dài tối đa của tiêu đề, khi tiêu đề dài hơn giá trị này, nó sẽ tự động báo lỗi và vô hiệu hóa chúng.',
    'groupthread_fnamelength' => 'Chiều dài tên tiêu đề diễn đàn',
    'groupthread_fnamelength_comment' =>
        'Thiết lập độ dài tối đa tiêu đề bao gồm cả tên diễn đàn',
    'groupthread_summarylength' => 'Mô tả bài viết nhóm',
    'groupthread_summarylength_comment' =>
        'Thiết lập độ dài của bản mô tả, để 0 sẽ giá trị mặc ​​định (255 ký tự)',
    'groupthread_picpre' => 'Biểu tượng phân loại',
    'groupthread_picpre_comment' =>
        'Đặt biểu tượng của chủ đề, giữ trống để vô hiệu hóa nó',
    'groupthread_tids' => 'Quy định về chủ đề',
    'groupthread_tids_comment' =>
        'Thiết lập các chủ đề quy định tid bạn muốn hiển thị, sử dụng "," để ngăn cách các tids',
    'groupthread_keyword' => 'Từ khóa',
    'groupthread_keyword_comment' =>
        'Đặt từ khoá xuất hiện trong tiêu đề. Lưu ý: để trống là không lọc, có thể dùng wildcard *; Kết hợp nhiều từ khoá bằng toán tử AND hoặc OR.',
    'groupthread_typeids' => 'Loại chủ đề',
    'groupthread_typeids_comment' =>
        'Chọn loại chủ đề cụ thể. Lưu ý: Chọn tất cả hoặc Xóa tất cả để vô hiệu hóa chọn lọc.',
    'groupthread_typeids_all' => 'Tất cả các chủ đề loại',
    'groupthread_sortids' => 'Sắp xếp ID chủ đề',
    'groupthread_sortids_comment' =>
        'Thiết lập các phân loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupthread_sortids_all' => 'Tất cả danh mục',
    'groupthread_threadtype' => 'Tất cả các phân loại',
    'groupthread_threadtype_comment' =>
        'Hiển thị các tiền tố trước khi chủ đề nhóm',
    'groupthread_groupthreadort' => 'Hiện thị phân loại',
    'groupthread_groupthreadort_comment' =>
        'Thiết lập để hiển thị danh mục phân loại trước khi đề tên trong danh sách chủ đề nhóm',
    'groupthread_highlight' => 'Đánh dấu những từ được tìm thấy',
    'groupthread_highlight_comment' => 'Giữ nổi bật của chủ đề nhóm',
    'groupthread_digest' => 'Lọc phân loại',
    'groupthread_digest_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề nhóm. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupthread_digest_0' => 'Tổng quát',
    'groupthread_digest_1' => 'Loại I',
    'groupthread_digest_2' => 'Loại II',
    'groupthread_digest_3' => 'Loại III',
    'groupthread_stick' => 'Stick filter',
    'groupthread_stick_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupthread_stick_0' => 'Tổng quát',
    'groupthread_stick_1' => 'Loại I',
    'groupthread_stick_2' => 'Loại II',
    'groupthread_stick_3' => 'Loại III',
    'groupthread_special' => 'Loại đặc biệt',
    'groupthread_special_comment' =>
        'Chọn chủ đề cần lọc đặc biệt. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupthread_special_1' => 'Thăm dò',
    'groupthread_special_2' => 'Thị trường',
    'groupthread_special_3' => 'Giải thưởng',
    'groupthread_special_4' => 'Sự kiện',
    'groupthread_special_5' => 'Tranh luận',
    'groupthread_special_0' => 'Tổng quát',
    'groupthread_special_reward' => 'Phần thưởng chọn lọc',
    'groupthread_special_reward_comment' => 'Chọn loại khen thưởng',
    'groupthread_picrequired' => 'Hình ảnh đính kèm',
    'groupthread_picrequired_comment' =>
        'Thiết lập chỉ để hiển thị chủ đề chứa file đính kèm hình ảnh',
    'groupthread_special_reward_0' => 'Tất cả',
    'groupthread_special_reward_1' => 'Cuối cùng',
    'groupthread_special_reward_2' => 'Sôi nổi',
    'groupthread_recommend' => 'Đê xuât chủ đề chọn lọc',
    'groupthread_recommend_comment' => 'Hiển thị chỉ những chủ đề được đề nghị',
    'groupthread_orderby' => 'Sắp xếp theo',
    'groupthread_orderby_comment' => 'Thiết lập các chủ đề',
    'groupthread_orderby_lastpost' => 'Bài mới nhất',
    'groupthread_orderby_dateline' => 'Thời gian bắt đầu',
    'groupthread_orderby_replies' => 'Trả lời',
    'groupthread_orderby_views' => 'Lượt xem',
    'groupthread_orderby_heats' => 'Hot',
    'groupthread_orderby_recommends' => 'Khuyến cáo',
    'groupthread_orderby_hourviews' => 'Số lần đọc trong thời gian quy định',
    'groupthread_orderby_todayviews' => 'Xem trong ngày',
    'groupthread_orderby_weekviews' => 'Xem trong tuần',
    'groupthread_orderby_monthviews' => 'Xem trong tháng',
    'groupthread_postdateline' => 'Thời gian đăng bài',
    'groupthread_postdateline_nolimit' => 'Mọi lúc',
    'groupthread_postdateline_hour' => 'Đăng theo giờ',
    'groupthread_postdateline_day' => 'Đăng theo ngày',
    'groupthread_postdateline_week' => 'Đăng theo tuần',
    'groupthread_postdateline_month' => 'Đăng theo tháng',
    'groupthread_lastpost' => 'Bài mới nhất',
    'groupthread_lastpost_nolimit' => 'Không giới hạn',
    'groupthread_lastpost_hour' => 'Theo giờ',
    'groupthread_lastpost_day' => 'Theo ngày',
    'groupthread_lastpost_week' => 'Theo tuần',
    'groupthread_lastpost_month' => 'Theo tháng',
    'groupthread_orderby_displayorder' => 'Sắp xếp theo mặc định',
    'groupthread_gviewperm' => 'Thiết lập cho thành viên được xem',
    'groupthread_gviewperm_nolimit' => 'Không giới hạn',
    'groupthread_gviewperm_only_member' => 'Chỉ thành viên',
    'groupthread_gviewperm_all_member' => 'Tất cả',
    'groupthread_highlight' => 'Đánh dấu những từ được tìm thấy',
);
