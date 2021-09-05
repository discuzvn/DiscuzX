<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupactivity.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'groupactivity_fids' => 'Thiết lặp ID nhóm',
    'groupactivity_fids_comment' => 'Sử dụng "," để ngăn cách nhiều ID nhóm',
    'groupactivity_gtids' => 'Nhóm danh mục',
    'groupactivity_gtids_comment' =>
        'Thiết lập danh mục nhóm.Bạn hãy nhấm giữ phím CTRL để chọn nhiều nhóm.',
    'groupactivity_uids' => 'UID của sáng lập nhóm',
    'groupactivity_uids_comment' =>
        'Thiết lập người dùng mà bạn muốn hiển thị.Sử dụng ","  để ngăn cách nhiều UIDs',
    'groupactivity_startrow' => 'Hàng đầu tiên',
    'groupactivity_startrow_comment' => 'Điền số 0 nếu muốn là hàng đầu tiên.',
    'groupactivity_items' => 'Các hàng còn lại.',
    'groupactivity_items_comment' =>
        'Thiết lập số lượng hàng mà bạn muốn hiển thị, nó phải số nguyên lớn hơn 0.',
    'groupactivity_titlelength' => 'Tiêu đề nhóm',
    'groupactivity_titlelength_comment' =>
        'Thiết lập độ dài tối đa của tiêu đề.',
    'groupactivity_fnamelength' => 'Tên diễn đàn',
    'groupactivity_fnamelength_comment' =>
        'Thiết lập độ dài tối đa tên diễn đàn.',
    'groupactivity_summarylength' => 'Mô tả nhóm',
    'groupactivity_summarylength_comment' =>
        'Thiết lập độ dài của bản mô tả, để 0 sẽ giá trị mặc ​​định (255 ký tự)',
    'groupactivity_tids' => 'Chủ đề',
    'groupactivity_tids_comment' =>
        'Thiết lập id chủ đề cụ thể mà bạn muốn hiển thị, sử dụng "," để ngăn cách nhiều tids',
    'groupactivity_keyword' => 'Từ khóa',
    'groupactivity_keyword_comment' =>
        'Đặt từ khoá xuất hiện trong tiêu đề. Lưu ý: để trống là không lọc, có thể dùng wildcard *; Kết hợp nhiều từ khoá bằng toán tử AND hoặc OR.',
    'groupactivity_typeids' => 'Các loại chủ đề',
    'groupactivity_typeids_comment' =>
        'Thiết lập các loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupactivity_typeids_all' => 'Tất cả các loại chủ đề',
    'groupactivity_sortids' => 'Sắp xếp ID',
    'groupactivity_sortids_comment' =>
        'Thiết lập các phân loại nhóm. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupactivity_sortids_all' => 'Tất cả danh mục',
    'groupactivity_digest' => 'Lọc phân loại',
    'groupactivity_digest_comment' =>
        'Thiết lập các phân loại nhóm. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupactivity_digest_0' => 'Tổng quát',
    'groupactivity_digest_1' => 'Loại I',
    'groupactivity_digest_2' => 'Loại II',
    'groupactivity_digest_3' => 'Loại III',
    'groupactivity_stick' => 'Stick filter',
    'groupactivity_stick_comment' =>
        'Chọn chủ đề: để có tính năng lọc nhóm. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupactivity_stick_0' => 'Tổng quát',
    'groupactivity_stick_1' => 'Loại  I',
    'groupactivity_stick_2' => 'Loại II',
    'groupactivity_stick_3' => 'Loại III',
    'groupactivity_special' => 'Loại đặc biệt',
    'groupactivity_special_comment' =>
        'Chọn nhóm cần lọc đặc biệt. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'groupactivity_special_1' => 'Thăm dò',
    'groupactivity_special_2' => 'Thi trường',
    'groupactivity_special_3' => 'Giải thưởng',
    'groupactivity_special_4' => 'Sự kiện',
    'groupactivity_special_5' => 'Tranh luận',
    'groupactivity_special_0' => 'Tổng quát',
    'groupactivity_special_reward' => 'Phần thưởng chọn lọc',
    'groupactivity_special_reward_comment' => 'Chọn loại khen thưởng',
    'groupactivity_special_reward_0' => 'Tất cả',
    'groupactivity_special_reward_1' => 'Cuối cùng',
    'groupactivity_special_reward_2' => 'Sôi nổi',
    'groupactivity_recommend' => 'Đê xuât chủ đề chọn lọc',
    'groupactivity_recommend_comment' =>
        'Hiển thị chỉ những chủ đề được đề nghị',
    'groupactivity_orderby' => 'Sắp xếp theo',
    'groupactivity_orderby_comment' => 'Thiết lập các chủ đề đặt hàng',
    'groupactivity_orderby_lastpost' => 'Bài mới nhất',
    'groupactivity_orderby_dateline' => 'Thời gian bắt đầu',
    'groupactivity_orderby_replies' => 'Trả lời',
    'groupactivity_orderby_views' => 'Lượt xem',
    'groupactivity_orderby_heats' => 'Hot',
    'groupactivity_orderby_recommends' => 'Khuyến cáo',
    'groupactivity_orderby_hourviews' => 'Số lần đọc trong thời gian quy định',
    'groupactivity_orderby_todayviews' => 'Xem trong ngày',
    'groupactivity_orderby_weekviews' => 'Xem trong tuần',
    'groupactivity_orderby_monthviews' => 'Xem trong tháng',
    'groupactivity_orderby_hours' => 'Chọn giờ (hours)',
    'groupactivity_orderby_hours_comment' =>
        'Thiết lập thời gian cụ thể để xem',
    'groupactivity_orderby_todayhots' => 'Hots trong ngày',
    'groupactivity_orderby_weekhots' => 'Hots trong tuần',
    'groupactivity_orderby_monthhots' => 'Hots trong tháng',
    'groupactivity_price_add' => 'Bổ sung',
    'groupactivity_place' => 'Địa điểm',
    'groupactivity_class' => 'Loại',
    'groupactivity_class_all' => 'Tất cả thể loại',
    'groupactivity_gender' => 'Giới tính',
    'groupactivity_gender_0' => 'Không rõ',
    'groupactivity_gender_1' => 'Nam',
    'groupactivity_gender_2' => 'Nữ',
    'groupactivity_orderby_weekstart' => 'Bắt đầu trong tuần',
    'groupactivity_orderby_monthstart' => 'Bắt đầu trong tháng',
    'groupactivity_orderby_weekexp' => 'Tuần hết hạn',
    'groupactivity_orderby_monthexp' => 'Tháng hết hạn',
    'groupactivity_gviewperm' => 'Thiết lập nhóm cho phép xem',
    'groupactivity_gviewperm_nolimit' => 'Không giới hạn',
    'groupactivity_gviewperm_only_member' => 'Chỉ một người dùng',
    'groupactivity_gviewperm_all_member' => 'Tất cả',
    'groupactivity_highlight' => 'Đánh dấu những từ được tìm thấy',
);
