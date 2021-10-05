<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 31607 2012-09-13 08:38:40Z monkey $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'hour' => 'giờ',
    'before' => ' trước',
    'minute' => 'phút',
    'second' => 'giây',
    'now' => 'vừa mới',
    'dot' => '.',
    'poll' => 'Bình chọn',
    'blog' => 'Blog',
    'friend_group_default' => 'Mặc định',
    'friend_group_1' => 'Trên mạng',
    'friend_group_2' => 'Bạn thân',
    'friend_group_3' => 'Bạn của bạn',
    'friend_group_4' => 'Gia đình',
    'friend_group_5' => 'Đồng nghiệp',
    'friend_group_6' => 'Bạn cùng lớp',
    'friend_group_7' => 'Không rõ',
    'friend_group' => 'Tự đặt',
    'wall' => 'Tường',
    'pic_comment' => 'Bình luận hình ảnh',
    'blog_comment' => 'Bình luận Blog',
    'clickblog' => 'Vị trí Blog',
    'clickpic' => 'Vị trí hình ảnh',
    'clickthread' => 'Vị trí tiêu đề',
    'share_comment' => 'Bình luận chia sẻ',
    'share_notice' => 'Chia sẻ',
    'doing_comment' => 'Hồ sơ trả lời',
    'friend_notice' => 'Bạn bè',
    'poll_comment' => 'Phiếu bình chọn',
    'poll_invite' => 'Mời bỏ phiếu',
    'default_albumname' => 'Album mặc định',
    'credit' => 'Điểm',
    'credit_unit' => ' điểm',
    'man' => 'Nam',
    'woman' => 'Nữ',
    'gender_0' => 'Bí mật',
    'gender_1' => 'Nam',
    'gender_2' => 'Nữ',
    'year' => 'Năm',
    'month' => 'Tháng',
    'day' => 'Ngày',
    'unmarried' => 'Độc thân',
    'married' => 'Đã có gia đình',
    'hidden_username' => 'Ẩn danh',
    'gender' => 'Giới tính',
    'age' => 'Tuổi',
    'comment' => 'Bình luận',
    'reply' => 'Trả kời',
    'from' => 'Từ',
    'anonymity' => 'Giấu tên',
    'viewmore' => 'Xem chi tiết',
    'constellation_1' => 'Bảo bình',
    'constellation_2' => 'Song ngư',
    'constellation_3' => 'Bạch dương',
    'constellation_4' => 'Kim ngưu',
    'constellation_5' => 'Song Tử',
    'constellation_6' => 'Cự giải',
    'constellation_7' => 'Sư tử',
    'constellation_8' => 'Xử nữ',
    'constellation_9' => 'Thiên bình',
    'constellation_10' => 'Thần nông',
    'constellation_11' => 'Nhân mã',
    'constellation_12' => 'Ma kết',
    'zodiac_1' => 'Tý',
    'zodiac_2' => 'Sửu',
    'zodiac_3' => 'Dần',
    'zodiac_4' => 'Mão',
    'zodiac_5' => 'Thìn',
    'zodiac_6' => 'Tỵ',
    'zodiac_7' => 'Ngọ',
    'zodiac_8' => 'Mùi',
    'zodiac_9' => 'Thân',
    'zodiac_10' => 'Dậu',
    'zodiac_11' => 'Tuất',
    'zodiac_12' => 'Hợi',
    'credits' => 'Điểm',
    'usergroup' => 'Nhóm',
    'friends' => 'Bạn bè',
    'blogs' => 'Blog',
    'threads' => 'Chủ đề',
    'albums' => 'Album',
    'sharings' => 'Chia sẻ',
    'space_views' => 'Có <strong class="xi1">{views}</strong> lượt xem',
    'views' => 'Lượt xem',
    'block1' => 'Block1',
    'block2' => 'Block 2',
    'block3' => 'Block 3',
    'block4' => 'Block4',
    'block5' => 'Block 5',
    'blockdata' => array(
        'personalinfo' => 'Cá nhân',
        'profile' => 'Avatar',
        'doing' => 'Status',
        'feed' => 'Tin tức',
        'blog' => 'Blog',
        'stickblog' => 'Sticky log',
        'album' => 'Album',
        'friend' => 'Bạn bè',
        'visitor' => 'Khách thăm',
        'wall' => 'Tường',
        'share' => 'Chia sẻ',
        'thread' => 'Chủ đề',
        'group' => $_G[setting][navs][3][navname],
        'music' => ' Âm nhạc',
        'statistic' => 'Thống kê',
        'myapp' => 'Ứng dụng',
        'block1' => 'Block1',
        'block2' => 'Block 2',
        'block3' => 'Block 3',
        'block4' => 'Block4',
        'block5' => 'Block 5',
    ),
    'block_title' =>
        '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
    'blog_li' =>
        '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
    'blog_li_img' =>
        '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
    'blog_li_ext' =>
        '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum}) lần đọc</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum}) bình luận</a></dd>',
    'album_li' =>
        '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, cập nhật {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, cập nhập {date}">{albumname}</a></p><span>Số ảnh: {picnum}</span></li>',
    'doing_li' => '<li>{message}</li><br />{date} {from} trả lời ({replynum})',
    'visitor_anonymity' =>
        '<div class="avatar48"><img src="image/magic/hidden.gif" alt="Ẩn danh"></div><p>Ẩn danh</p>',
    'visitor_list' =>
        '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',
    'wall_form' =>
        '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							' .
        ($_G['uid']
            ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />'
            : ($_G['connectguest']
                ? '<div class="pt hm">Bạn cần <a href="member.php?mod=connect" class="xi2">hoàn thiện thông tin</a> hoặc <a href="member.php?mod=connect&ac=bind" class="xi2">kết nối tài khoản đã có</a>. Bạn có thể trả lời sau.</div>'
                : '<div class="pt hm">Bạn cần đăng nhập trước khi điền tin nhắn <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">đăng nhập</a> | <a href="member.php?mod=' .
                    $_G['setting']['regname'] .
                    '" class="xi2">' .
                    $_G['setting']['reglinkname'] .
                    '</a></div>')) .
        '
							<p class="ptn"><button ' .
        ($_G['uid']
            ? 'type="submit"'
            : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"') .
        ' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>Nhắn tin</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>' .
        ($_G['uid']
            ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>'
            : '') .
        '
					</div>',
    'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
    'wall_more' =>
        '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">Xem tất cả</a></span><dt></dl>',
    'wall_edit' =>
        '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">Sửa</a> ',
    'wall_del' =>
        '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">Xóa</a> ',
    'wall_reply' =>
        '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">Trả lời</a>',
    'group_li' =>
        '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
    'poll_li' =>
        '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">Đăng lúc: {dateline}</div></div>',
    'music_no_content' => 'Không có gì trong hộp nhạc',
    'block_profile_diy' => 'Trang trí trang cá nhân',
    'block_profile_wall' => 'Tường',
    'block_profile_avatar' => 'Avatar',
    'block_profile_update' => 'Cập nhật',
    'block_profile_follow' => 'Xem người hâm mộ',
    'block_profile_wall_to_me' => 'Gửi lời nhắn',
    'block_profile_friend_add' => 'Kết bạn',
    'block_profile_friend_ignore' => 'Hủy bạn bè',
    'block_profile_poke' => 'Trêu chọc',
    'block_profile_sendmessage' => 'Gửi tin',
    'block_doing_reply' => 'Trả lời',
    'block_doing_no_content' => 'Hiện chưa có ghi chép mới nào',
    'block_doing_no_content_publish' =>
        ', <a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">Đăng tâm trạng</a>',
    'block_blog_no_content' => 'Không có blog',
    'block_blog_no_content_publish' =>
        ', <a href ="home.php?mod=spacecp&ac=blog">Viết blog</a>',
    'block_album_no_content' => 'Không có album',
    'block_album_no_content_publish' =>
        ', <a href ="home.php?mod=spacecp&ac=upload">Đăng ảnh</a>',
    'block_feed_no_content' => 'Chưa có tin tức',
    'block_thread_no_content' => 'Chưa có chủ đề',
    'block_thread_no_content_publish' =>
        ', <a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">Đăng 1 chủ đề</a>',
    'block_friend_no_content' => 'Không có bạn bè',
    'block_friend_no_content_publish' =>
        ', <a href ="home.php?mod=spacecp&ac=search">Tìm bạn</a> hoặc <a href ="home.php?mod=spacecp&ac=invite">Mời bạn bè</a>',
    'block_visitor_no_content' => 'Chưa ai ghé thăm gần đây',
    'block_visitor_no_content_publish' =>
        ', <a href ="home.php?mod=space&do=friend&view=online&type=member">Ai đang Online</a>',
    'block_share_no_content' => 'Chưa có chia sẻ',
    'block_wall_no_content' => 'Tường trống trơn',
    'block_group_no_content' => 'Chưa tham gia Nhóm',
    'block_group_no_content_publish' =>
        ', <a href ="forum.php?mod=group&action=create">Tạo Nhóm</a> hoặc <a href ="group.php?mod=index">Tham gia Nhóm</a>',
    'block_group_no_content_join' =>
        ', <a href ="group.php?mod=index">Tham gia Nhóm</a>',
    'block_myapp_no_content' => 'Chưa dùng Ứng dụng',
    'block_myapp_no_content_publish' =>
        ', <a href ="userapp.php?mod=manage&my_suffix=/app/list">Dùng Apps</a>',
    'block_view_noperm' => 'Không được phép xem',
    'block_view_profileinfo_noperm' => 'Thông tin không xem được',
    'click_play' => 'Nhấn vào để chơi',
    'click_view' => 'Nhấn vào để xem',
    'feed_view_only' => 'Chỉ xem tin tức',
    'export_pm' => 'Xuất tin nhắn',
    'pm_export_header' =>
        'Hộp tin nhắn Discuz! X! (Không hỗ trợ nhập tin nhắn này vào diễn đàn)',
    'pm_export_touser' => 'Thông báo: {touser}',
    'pm_export_subject' => 'Chủ đề nhóm: {subject}',
    'all' => 'Tất cả',
    'manage_post' => 'Quản lí bài viết',
    'manage_album' => 'Quản lí album',
    'manage_blog' => 'Quản lí blog',
    'manage_comment' => 'Quản lí bình luận',
    'manage_doing' => 'Quản lí Status',
    'manage_feed' => 'Quản lí tin tức',
    'manage_group_prune' => 'Bài viết Nhóm',
    'manage_group_threads' => 'Chủ đề Nhóm',
    'manage_share' => 'Quản lí Chia sẻ',
    'manage_pic' => 'Quản lí Ảnh',
    'sb_blog' => 'Blog {who}',
    'sb_album' => 'Album {who}',
    'sb_space' => 'Không gian {who}',
    'sb_feed' => 'Tin tức {who}',
    'sb_doing' => 'Status {who}',
    'sb_sharing' => 'Chia sẻ {who}',
    'sb_friend' => 'Bạn bè {who}',
    'sb_wall' => 'Tường {who}',
    'sb_profile' => 'Hồ sơ {who}',
    'sb_thread' => 'Chủ đề {who}',
    'doing_you_can' => 'Bạn đang nghĩ gì, hãy chia sẻ cho bạn bè biết nhé...',
    'block_profile_all' =>
        '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">Xem tất cả thông tin</a></p>',
    'block_profile_edit' =>
        '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">Chỉnh sửa Hồ sơ</a></span>',
    'sb_follow' => '{who} hâm mộ',
    'viewthread_userinfo_hour' => 'Giờ',
    'viewthread_userinfo_uid' => 'UID',
    'viewthread_userinfo_posts' => 'Bài viết',
    'viewthread_userinfo_threads' => 'Chủ đề',
    'viewthread_userinfo_doings' => 'Status',
    'viewthread_userinfo_blogs' => 'Blog',
    'viewthread_userinfo_albums' => 'Album',
    'viewthread_userinfo_sharings' => 'Chia sẻ',
    'viewthread_userinfo_friends' => 'Bạn',
    'viewthread_userinfo_digest' => 'Bài hay',
    'viewthread_userinfo_digestposts' => 'Tinh tế',
    'viewthread_userinfo_credits' => 'Điểm',
    'viewthread_userinfo_readperm' => 'Quyền đọc',
    'viewthread_userinfo_regtime' => 'Đăng ký',
    'viewthread_userinfo_lastdate' => 'Đăng nhập lần cuối',
    'viewthread_userinfo_oltime' => 'Online',
    'viewthread_userinfo_sellercredit' => 'Người bán tín dụng',
    'viewthread_userinfo_buyercredit' => 'Người mua tín dụng',
    'viewthread_userinfo_follower' => 'Số người theo dõi',
    'viewthread_userinfo_following' => 'Đang theo dõi',
    'viewthread_userinfo_feeds' => 'Feeds',
    'viewthread_userinfo_privacy' => 'Riêng tư',
    'follow_view_follow' => 'Tôi theo dõi',
    'follow_view_special' => 'Chú ý đến',
    'follow_view_other' => 'Loại khác',
    'follow_view_feed' => '{who} cập nhật',
    'follow_view_thread' => '{who} chủ đề',
    'follow_view_reply' => '{who} trả lời',
    'follow_view_profile' => '{who} cá nhân',
    'follow_view_type_feed' => 'Cập nhật',
    'follow_view_type_thread' => 'Chủ đề',
    'follow_view_type_reply' => 'Trả lời',
    'follow_view_type_profile' => 'Cá nhân',
    'follow_view_type_follower' => 'Danh sách',
    'follow_view_type_following' => 'Đang theo dõi',
    'follow_view_my_follower' => 'Tôi đang theo',
    'follow_view_my_following' => 'Tôi đang nghe',
    'follow_view_do_follower' => 'Khán giả của tôi',
    'follow_view_do_following' => 'Theo mọi người',
    'follow_view_fulltext' => '... Xem rõ',
    'follow_retract' => 'Từ bỏ',
    'follow_click_play' => 'Nhấn để xem',
    'follow_cancle_follow' => 'Bỏ theo',
    'follow_follow_ta' => 'Nghe TA',
);
