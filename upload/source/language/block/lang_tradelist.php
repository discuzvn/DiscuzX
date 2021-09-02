<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_tradelist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'tradelist_fids' => 'Diễn đàn',
    'tradelist_fids_comment' =>
        'Thiết lập hiện thị ở nhiều diễn đàn.Bạn hãy nhấm giữ phím CTRL để chọn các diễn đàn',
    'tradelist_uids' => 'UID của thành viên',
    'tradelist_uids_comment' =>
        'Thiết lập người dùng mà bạn muốn hiển thị.Sử dụng ","  ngăn cách các UIDs',
    'tradelist_startrow' => 'Hàng đầu tiên',
    'tradelist_startrow_comment' => 'Điền số 0 nếu muốn là hàng đầu tiên.',
    'tradelist_items' => 'Các hàng còn lại.',
    'tradelist_items_comment' =>
        'Thiết lập số lượng hàng mà bạn muốn hiển thị, nó phải số nguyên lớn hơn 0.',
    'tradelist_titlelength' => 'Tiêu đề',
    'tradelist_titlelength_comment' => 'Thiết lập độ dài tối đa của tiêu đề',
    'tradelist_fnamelength' => 'Tên tiêu đề diễn đàn',
    'tradelist_fnamelength_comment' =>
        'Thiết lập độ dài tối đa tiêu đề bao gồm cả tên diễn đàn',
    'tradelist_summarylength' => 'Mô tả',
    'tradelist_summarylength_comment' =>
        'Thiết lập độ dài của bản mô tả, để 0 sẽ giá trị mặc ​​định (255 ký tự))',
    'tradelist_tids' => 'Chủ đề',
    'tradelist_tids_comment' =>
        'Thiết lập id chủ đề cụ thể mà bạn muốn hiển thị, sử dụng "," ngăn cách nhiều tids',
    'tradelist_keyword' => 'Từ khóa',
    'tradelist_keyword_comment' =>
        'Thiết lập các từ khóa được sử dụng.<br />Bạn có thể sử dụng ký tự đại diện "*" trong từ khóa.<br />Nếu bạn muốn sử dụng một số từ khóa tại cùng một thời điểm, bạn có thể sử dụng "AND". Ví dụ: win32 AND Unix.<br />Nếu bạn muốn sử dụng chỉ cần một từ khóa, bạn có thể sử dụng "|" hoặc "OR". Ví dụ: win32 OR unix',
    'tradelist_typeids' => 'Các loại chủ đề',
    'tradelist_typeids_comment' =>
        'Thiết lập các loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'tradelist_typeids_all' => 'Tất cả các loại chủ đề',
    'tradelist_sortids' => 'Sắp xếp ID',
    'tradelist_sortids_comment' =>
        'Thiết lập các loại chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'tradelist_sortids_all' => 'Tất cả danh mục',
    'tradelist_digest' => 'Lọc phân loại',
    'tradelist_digest_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'tradelist_digest_0' => 'Tổng quát',
    'tradelist_digest_1' => 'Loại I',
    'tradelist_digest_2' => 'Loại II',
    'tradelist_digest_3' => 'Loại III',
    'tradelist_stick' => 'Bộ lọc',
    'tradelist_stick_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'tradelist_stick_0' => 'Tổng quát',
    'tradelist_stick_1' => 'Loại I',
    'tradelist_stick_2' => 'Loại II',
    'tradelist_stick_3' => 'Loại III',
    'tradelist_special' => 'Loại đặc biệt',
    'tradelist_special_comment' =>
        'Chọn chủ đề cần lọc đặc biệt. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'tradelist_special_1' => 'Thăm dò',
    'tradelist_special_2' => 'Thị trường',
    'tradelist_special_3' => 'Giải thưởng',
    'tradelist_special_4' => 'Sự kiện',
    'tradelist_special_5' => 'Tranh luận',
    'tradelist_special_0' => 'Tổng quát',
    'tradelist_special_reward' => 'Phần thưởng',
    'tradelist_special_reward_comment' => 'Chọn loại khen thưởng',
    'tradelist_special_reward_0' => 'Tất cả',
    'tradelist_special_reward_1' => 'Cuối cùng',
    'tradelist_special_reward_2' => 'Sôi nổi',
    'tradelist_recommend' => 'Đê xuât chủ đề',
    'tradelist_recommend_comment' => 'Hiển thị chỉ những chủ đề được đề nghị',
    'tradelist_orderby' => 'Sắp xếp',
    'tradelist_orderby_comment' => 'Thiết lập các chủ đề',
    'tradelist_orderby_lastpost' => 'Bài mới nhất',
    'tradelist_orderby_dateline' => 'Thời gian bắt đầu',
    'tradelist_orderby_replies' => 'Trả lời',
    'tradelist_orderby_views' => 'Lượt xem',
    'tradelist_orderby_heats' => 'Hot',
    'tradelist_orderby_recommends' => 'Khuyến cáo',
    'tradelist_orderby_hourviews' => 'Số lần đọc trong thời gian quy định',
    'tradelist_orderby_todayviews' => 'Xem trong ngày',
    'tradelist_orderby_weekviews' => 'Xem trong tuần',
    'tradelist_orderby_monthviews' => 'Xem trong tháng',
    'tradelist_orderby_hours' => 'Chọn giờ (hours)',
    'tradelist_orderby_hours_comment' => 'Thiết lập thời gian cụ thể để xem',
    'tradelist_orderby_todayhots' => 'Hots trong ngày',
    'tradelist_orderby_weekhots' => 'Hots trong tuần',
    'tradelist_orderby_monthhots' => 'Hots trong tháng',
    'tradelist_price_add' => 'Bổ sung',
    'tradelist_place' => 'Địa điểm',
    'tradelist_class' => 'Loại',
    'tradelist_gender' => 'Giới tính',
    'tradelist_gender_0' => 'Không rõ',
    'tradelist_gender_1' => 'Nam',
    'tradelist_gender_2' => 'Nữ',
    'tradelist_orderby_weekstart' => 'Bắt đầu trong tuần',
    'tradelist_orderby_monthstart' => 'Bắt đầu trong tháng',
    'tradelist_orderby_weekexp' => 'Tuần hết hạn',
    'tradelist_orderby_monthexp' => 'Tháng hết hạn',
    'tradelist_highlight' => 'Đánh dấu những từ được tìm thấy',
);
