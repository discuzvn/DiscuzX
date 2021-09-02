<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'activitylist_fids' => 'Diễn đàn',
    'activitylist_fids_comment' =>
        'Thiết lập hiện thị ở nhiều diễn đàn.Bạn hãy nhấm giữ phím CTRL để chọn các diễn đàn',
    'activitylist_uids' => 'UID của tác giả',
    'activitylist_uids_comment' =>
        'Thiết lập người dùng mà bạn muốn hiển thị.Sử dụng ","  ngăn cách các UIDs',
    'activitylist_startrow' => 'Hàng đầu tiên',
    'activitylist_startrow_comment' => 'Điền số 0 nếu muốn là hàng đầu tiên.',
    'activitylist_items' => 'Các hàng còn lại.',
    'activitylist_items_comment' =>
        'Thiết lập số lượng hàng mà bạn muốn hiển thị, nó phải số nguyên lớn hơn 0.',
    'activitylist_titlelength' => 'Tiêu đề',
    'activitylist_titlelength_comment' => 'Thiết lập độ dài tối đa của tiêu đề',
    'activitylist_fnamelength' => 'Tên tiêu đề diễn đàn',
    'activitylist_fnamelength_comment' =>
        'Thiết lập độ dài tối đa tiêu đề bao gồm cả tên diễn đàn',
    'activitylist_summarylength' => 'Mô tả',
    'activitylist_summarylength_comment' =>
        'Thiết lập độ dài của bản mô tả, để 0 sẽ giá trị mặc ​​định (255 ký tự)',
    'activitylist_tids' => 'Chủ đề',
    'activitylist_tids_comment' =>
        'Thiết lập id chủ đề cụ thể mà bạn muốn hiển thị, sử dụng "," ngăn cách nhiều tids',
    'activitylist_keyword' => 'Từ khóa',
    'activitylist_keyword_comment' =>
        'Thiết lập các từ khóa được sử dụng.<br />Bạn có thể sử dụng ký tự đại diện "*" trong từ khóa.<br />Nếu bạn muốn sử dụng một số từ khóa tại cùng một thời điểm, bạn có thể sử dụng "AND". Ví dụ: win32 AND Unix.<br />Nếu bạn muốn sử dụng chỉ cần một từ khóa, bạn có thể sử dụng "|" hoặc "OR". Ví dụ: win32 OR unix',
    'activitylist_typeids' => 'Các loại chủ đề',
    'activitylist_typeids_comment' =>
        'Thiết lập các loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'activitylist_typeids_all' => 'Tất cả các loại chủ đề',
    'activitylist_sortids' => 'Thể loại',
    'activitylist_sortids_comment' =>
        'Thiết lập các loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'activitylist_sortids_all' => 'Tất cả danh mục',
    'activitylist_digest' => 'Lọc phân loại',
    'activitylist_digest_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'activitylist_digest_0' => 'Tổng quát',
    'activitylist_digest_1' => 'Loại I',
    'activitylist_digest_2' => 'Loại II',
    'activitylist_digest_3' => 'Loại III',
    'activitylist_stick' => 'Bộ lọc',
    'activitylist_stick_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'activitylist_stick_0' => 'Tổng quát',
    'activitylist_stick_1' => 'Loại  I',
    'activitylist_stick_2' => 'Loại  II',
    'activitylist_stick_3' => 'Loại  III',
    'activitylist_special' => 'Loại đặc biệt ',
    'activitylist_special_comment' =>
        'Chọn chủ đề cần lọc đặc biệt. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'activitylist_special_1' => 'Thăm dò',
    'activitylist_special_2' => 'Thị trường',
    'activitylist_special_3' => 'Giải thưởng',
    'activitylist_special_4' => 'Sự kiện',
    'activitylist_special_5' => 'Tranh luận',
    'activitylist_special_0' => 'Tổng quát',
    'activitylist_special_reward' => 'Phần thưởng',
    'activitylist_special_reward_comment' => 'Chọn loại khen thưởng',
    'activitylist_special_reward_0' => 'Tất cả',
    'activitylist_special_reward_1' => 'Cuối cùng',
    'activitylist_special_reward_2' => 'Sôi nổi',
    'activitylist_recommend' => 'Đê xuât chủ đề',
    'activitylist_recommend_comment' =>
        'Hiển thị chỉ những chủ đề được đề nghị',
    'activitylist_orderby' => 'Sắp xếp',
    'activitylist_orderby_comment' => 'Thiết lập các chủ đề',
    'activitylist_orderby_lastpost' => 'Bài mới nhất',
    'activitylist_orderby_dateline' => 'Thời gian bắt đầu',
    'activitylist_orderby_replies' => 'Trả lời',
    'activitylist_orderby_views' => 'Lượt xem',
    'activitylist_orderby_heats' => 'Hot',
    'activitylist_orderby_recommends' => 'Khuyến cáo',
    'activitylist_orderby_hourviews' => 'Số lần đọc trong thời gian quy định',
    'activitylist_orderby_todayviews' => 'Xem trong ngày',
    'activitylist_orderby_weekviews' => 'Xem trong tuần',
    'activitylist_orderby_monthviews' => 'Xem trong tháng',
    'activitylist_orderby_hours' => 'Chọn giờ (hours)',
    'activitylist_orderby_hours_comment' => 'Thiết lập thời gian cụ thể để xem',
    'activitylist_orderby_todayhots' => 'Hots trong ngày',
    'activitylist_orderby_weekhots' => 'Hots trong tuần',
    'activitylist_orderby_monthhots' => 'Hots trong tháng',
    'activitylist_price_add' => 'Bổ sung',
    'activitylist_place' => 'Địa điểm',
    'activitylist_class' => 'Loại',
    'activitylist_class_all' => 'Tất cả thể loại',
    'activitylist_gender' => 'Giới tính',
    'activitylist_gender_0' => 'Không rõ',
    'activitylist_gender_1' => 'Nam',
    'activitylist_gender_2' => 'Nữ',
    'activitylist_orderby_weekstart' => 'Bắt đầu trong tuần',
    'activitylist_orderby_monthstart' => 'Bắt đầu trong tháng',
    'activitylist_orderby_weekexp' => 'Tuần hết hạn',
    'activitylist_orderby_monthexp' => 'Tháng hết hạn',
    'activitylist_orderby_weekhot' => 'Hots trong tuần',
    'activitylist_orderby_monthhot' => 'Hots trong tháng',
    'activitylist_orderby_alltimehot' =>
        'Khi kết thúc hoạt động đã không tham gia bất kỳ thứ tự của số lượng',
    'activitylist_highlight' => 'Đánh dấu những từ được tìm thấy',
);
