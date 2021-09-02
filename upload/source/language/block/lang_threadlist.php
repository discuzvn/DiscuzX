<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'threadlist_fids' => 'Diễn đàn',
    'threadlist_fids_comment' =>
        'Thiết lập hiện thị ở nhiều diễn đàn.Bạn hãy nhấm giữ phím CTRL để chọn các diễn đàn',
    'threadlist_uids' => 'UID của tác giả',
    'threadlist_uids_comment' =>
        'Thiết lập người dùng mà bạn muốn hiển thị.Sử dụng ","  ngăn cách các UIDs',
    'threadlist_startrow' => 'Hàng đầu tiên',
    'threadlist_startrow_comment' => 'Điền số 0 nếu muốn là hàng đầu tiên.',
    'threadlist_items' => 'Các hàng còn lại.',
    'threadlist_items_comment' =>
        'Thiết lập số lượng hàng mà bạn muốn hiển thị, nó phải số nguyên lớn hơn 0.',
    'threadlist_titlelength' => 'Tiêu đề danh sách bài viết',
    'threadlist_titlelength_comment' => 'Thiết lập độ dài tối đa của tiêu đề',
    'threadlist_fnamelength' => 'Tên tiêu đề diễn đàn',
    'threadlist_fnamelength_comment' =>
        'Thiết lập độ dài tối đa tiêu đề bao gồm cả tên diễn đàn',
    'threadlist_summarylength' => 'Mô tả danh sách bài viết',
    'threadlist_summarylength_comment' =>
        'Thiết lập độ dài của bản mô tả, để 0 sẽ giá trị mặc ​​định (255 ký tự)',
    'threadlist_tids' => 'Chủ đề danh sách',
    'threadlist_tids_comment' =>
        'Thiết lập id chủ đề cụ thể mà bạn muốn hiển thị, sử dụng "," ngăn cách nhiều tids',
    'threadlist_keyword' => 'Từ khóa',
    'threadlist_keyword_comment' =>
        'Thiết lập các từ khóa được sử dụng.<br />Bạn có thể sử dụng ký tự đại diện "*" trong từ khóa.<br />Nếu bạn muốn sử dụng một số từ khóa tại cùng một thời điểm, bạn có thể sử dụng "AND". Ví dụ: win32 AND Unix.<br />Nếu bạn muốn sử dụng chỉ cần một từ khóa, bạn có thể sử dụng "|" hoặc "OR". Ví dụ: win32 OR unix',
    'threadlist_tagkeyword' => 'Tags',
    'threadlist_tagkeyword_comment' =>
        'Chọn Tags (keywords). Lưu ý: Để trống không bộ lọc từ khóa có thể sử dụng ký tự đại diện "*" Đối với trận đấu một hoặc nhiều từ khóa sử dụng | hoặc "OR" dấu phân cách, tức là "win32 OR unix"',
    'threadlist_typeids' => 'Các loại chủ đề',
    'threadlist_typeids_comment' =>
        'Chọn loại chủ đề cụ thể. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'threadlist_typeids_all' => 'Tất cả các loại chủ đề',
    'threadlist_sortids' => 'Sắp xếp ID',
    'threadlist_sortids_comment' =>
        'Thiết lập các phân loại chủ đề.Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'threadlist_sortids_all' => 'Tất cả danh mục',
    'threadlist_reply' => '无回复主题过滤',
    'threadlist_digest' => 'Lọc phân loại',
    'threadlist_digest_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'threadlist_digest_0' => 'Tổng quát',
    'threadlist_digest_1' => 'Loại I',
    'threadlist_digest_2' => 'Loại II',
    'threadlist_digest_3' => 'Loại III',
    'threadlist_stick' => 'Stick filter',
    'threadlist_stick_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'threadlist_stick_0' => 'Tổng quát',
    'threadlist_stick_1' => 'Loại I',
    'threadlist_stick_2' => 'Loại II',
    'threadlist_stick_3' => 'Loại III',
    'threadlist_special' => 'Loại đặc biệt',
    'threadlist_special_comment' =>
        'Chọn chủ đề: để có tính năng lọc chủ đề. Lưu ý: nếu chọn không sẽ vô hiệu hóa tính năng này.',
    'threadlist_special_1' => 'Thăm dò',
    'threadlist_special_2' => 'Thị trường',
    'threadlist_special_3' => 'Giải thưởng',
    'threadlist_special_4' => 'Sự kiện',
    'threadlist_special_5' => 'Tranh luận',
    'threadlist_special_0' => 'Tổng quát',
    'threadlist_special_reward' => 'Phần thưởng',
    'threadlist_special_reward_comment' => 'Phần thưởng',
    'threadlist_special_reward_0' => 'Tất cả',
    'threadlist_special_reward_1' => 'Cuối cùng',
    'threadlist_special_reward_2' => 'Sôi nổi',
    'threadlist_recommend' => 'Lọc chủ đề',
    'threadlist_viewmod' => 'Xem thể loại Potar',
    'threadlist_recommend_comment' => 'Hiển thị những chủ đề được đề nghị',
    'threadlist_picrequired' => 'Hình ảnh đính kèm',
    'threadlist_picrequired_comment' =>
        'Thiết lập chỉ để hiển thị các chủ đề có chứa file đính kèm hình ảnh',
    'threadlist_orderby' => 'Sắp xếp',
    'threadlist_orderby_comment' => 'Thiết lập trật tự các chủ đề',
    'threadlist_orderby_lastpost' => 'Bài mới nhất',
    'threadlist_orderby_dateline' => 'Thời gian bắt đầu',
    'threadlist_orderby_replies' => 'Trả lời',
    'threadlist_orderby_views' => 'Lượt xem',
    'threadlist_orderby_heats' => 'Hot',
    'threadlist_orderby_recommends' => 'Khuyến cáo',
    'threadlist_orderby_hourviews' => 'Thời gian quy định lần đọc',
    'threadlist_orderby_todayviews' => 'Xem trong ngày',
    'threadlist_orderby_weekviews' => 'Xem trong tuền',
    'threadlist_orderby_monthviews' => 'Xem trong tháng',
    'threadlist_orderby_hours' => 'Chọn thời gian',
    'threadlist_orderby_hours_comment' => 'Thiết lập thời gian cụ thể',
    'threadlist_orderby_todayhots' => 'Hots trong ngày',
    'threadlist_orderby_weekhots' => 'Hots trong tuần',
    'threadlist_orderby_monthhots' => 'Hots trong tháng',
    'threadlist_lastpost' => 'Bài mới nhất',
    'threadlist_postdateline' => 'Thời gian đăng',
    'threadlist_postdateline_nolimit' => 'Mọi lúc',
    'threadlist_postdateline_hour' => 'Đăng trong giờ',
    'threadlist_postdateline_day' => 'Đăng trong ngày',
    'threadlist_postdateline_week' => 'Đăng trong tuần',
    'threadlist_postdateline_month' => 'Đăng trong tháng',
    'threadlist_lastpost_nolimit' => 'Không giới hạn',
    'threadlist_lastpost_hour' => 'Đăng trong giờ',
    'threadlist_lastpost_day' => 'Đăng trong ngày',
    'threadlist_lastpost_week' => 'Đăng trong tuần',
    'threadlist_lastpost_month' => 'Đăng trong tháng',
    'threadlist_price_add' => 'Bổ sung',
    'threadlist_place' => 'Địa điểm',
    'threadlist_class' => 'Thể loại',
    'threadlist_gender' => 'Giới tính',
    'threadlist_gender_0' => 'Không xác định',
    'threadlist_gender_1' => 'Nam',
    'threadlist_gender_2' => 'Nữ',
    'threadlist_orderby_weekstart' => 'Bắt đầu trong tuần',
    'threadlist_orderby_monthstart' => 'Bắt đầu trong tháng',
    'threadlist_orderby_weekexp' => 'Hạn chế trong tuần',
    'threadlist_orderby_monthexp' => 'Hạn chế trong tháng',
    'threadlist_highlight' => 'Đánh dấu những từ được tìm thấy',
);
