<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 35030 2014-10-23 07:43:23Z laoguozhang $
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$lang = array(
    'hello' => 'Chào bạn',
    'moderate_member_invalidate' => 'Thành viên vô hiệu',
    'moderate_member_delete' => 'Xóa',
    'moderate_member_validate' => 'Bởi',
    'get_passwd_subject' => 'Hỗ trợ khôi phục mật khẩu',
    'get_passwd_message' => '
<p>Xin chào {username},<br />
Email này gửi từ {bbname}.</p>

<p>
----------------------------------------------------------------------<br />
<strong>Lưu ý:</strong><br />
----------------------------------------------------------------------</p>

<p>Nếu bạn không yêu cầu lấy lại mật khẩu tại {bbname}, xin vui lòng bỏ qua</p>
<p>
----------------------------------------------------------------------<br />
<strong>Hướng dẫn lấy lại mật khẩu</strong><br />
----------------------------------------------------------------------</p>
</p>
Bấm vào link dưới đây để khôi phục mật khẩu<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}</a>
<br />
(Nếu không mở được link trên thì hãy paste nó lên trình duyệt)</p>

<p>Sau đó điền mật khẩu mới để sử dụng cho lần đăng nhập tiếp theo.</p>

<p>IP yêu cầu: {clientip}</p>


<p>
Trân trọng,<br />
</p>
<p>{bbname}</p>',
    'email_verify_subject' => 'Xác minh địa chỉ email',
    'email_verify_message' => '<br />
<p>Xin chào {username},<br />
Email này gửi từ {bbname}.</p>

<p>Bạn nhận được email này từ {bbname} do bạn đăng ký tài khoản hoặc đổi email trên {bbname}. Nếu không phải bạn thao tác, vui lòng bỏ qua.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Hướng dẫn xác mình email</strong><br />
----------------------------------------------------------------------<br />
<br />

<p>Bấm vào link dưới đây để xác minh địa chỉ email<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Nếu không mở được link trên thì hãy paste nó lên trình duyệt)</p>

<p>Cảm ơn bạn đã xác minh email, mong bạn có những giây phút vui vẻ với {bbname}.</p>

<p>
Trân trọng<br />

{bbname}<br />
{siteurl}</p>',
    'email_register_subject' => 'Email đăng ký tài khoản',
    'email_register_message' => '<br />
<p>Email này gửi từ {bbname}.</p>

<p>Email này được dùng để đăng ký thành viên tại {bbname}. Nếu không phải bạn thực hiện thao tác  trên, xin vui lòng bỏ qua.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Xác thực thực email</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>Nếu bạn đăng ký tài khoản trên {bbname}, vui lòng xác thực email.</p>

<p>Bấm vào liên kết dưới đây để hoàn thành việc xác thực email.<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Nếu không mở được link trên thì hãy paste nó lên trình duyệt)</p>

<p>Cảm ơn bạn đã ghé thăm, chúc bạn sử dụng vui vẻ!</p>


<p>
Trân trọng<br />

{bbname}<br />
{siteurl}</p>',
    'add_member_subject' => 'Bạn được thêm làm thành viên',
    'add_member_message' => '
Xin chào {newusername},
<p>Email này gửi từ {bbname}.</p>
<br />
Tôi là {adminusername} từ {bbname}.<br />
Bạn vừa được mời tham gia {bbname} với tải khoản chúng tôi đã tạo sẵn.<br />
<br />
Nếu bạn không có ý định tham gia {bbname}, vui lòng bỏ qua email này.<br />
<br />
----------------------------------------------------------------------<br />
Thông tin tài khoản<br />
----------------------------------------------------------------------<br />
<br />
Diễn đàn: {bbname}<br />
Link: {siteurl}<br />
<br />
Tài khoản: {newusername}<br />
Mật khẩu: {newpassword}<br />
<br />
<br />
<br />
<br />
Trận trọng<br />
<br />
{bbname}<br />
{siteurl}',
    'birthday_subject' => 'Chúc mừng sinh nhật',
    'birthday_message' => '<br />
Xin chào {username},<br />
Email được gửi từ {bbname}.<br />
<br />
Thay mặt toàn thể thành viên {bbname}, xin gửi lời chúc bạn sinh nhật vui vẻ và ấm áp.<br />
<br />
Trận trọng<br />
<br />
{bbname}<br />
{siteurl}',
    'email_to_friend_subject' =>
        '{$_G[member][username]} giới thiệu bạn bài: $thread[subject]',
    'email_to_friend_message' => '<br />
Email gửi từ {$_G[setting][bbname]} bởi bạn {$_G[member][username]}.<br />
<br />
Đây là chức năng đề xuất chia sẻ nội dung đến bạn. Nếu bạn không quan tâm nội dung này, vui lòng bỏ qua.<br />
<br />
$message<br />
<br />
<br />
Lưu ý, email này được chia sẻ bởi bạn của bạn, không phải từ trang web.<br />
<br />
{$_G[setting][bbname]}<br />
$_G[siteurl]',
    'email_to_invite_subject' =>
        'Bạn của bạn: {$_G[member][username]} gửi một mã mời tham gia {$_G[setting][bbname]} đến bạn',
    'email_to_invite_message' => '<br />
Xin chào $sendtoname,<br />
Email gửi từ {$_G[setting][bbname]} bởi bạn {$_G[member][username]}.<br />
<br />
Đây là chức năng đề xuất chia sẻ nội dung đến bạn. Nếu bạn không quan tâm nội dung này, vui lòng bỏ qua.<br />
<br />
$message<br />
<br />
<br />
Lưu ý, email này được chia sẻ bởi bạn của bạn, không phải từ trang web.<br />
<br />
{$_G[setting][bbname]}<br />
$_G[siteurl]',
    'moderate_member_subject' => 'Thông báo kết quả kiểm duyệt',
    'moderate_member_message' => '<br />
<p>Xin chào {username},
Email gửi từ {bbname}</p>

<p>Quản trị viên đã thực hiện đánh giá nội dung của bạn.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Thông tin kiểm duyệt nội dung</strong><br />
----------------------------------------------------------------------<br />
<br />
Tài khoản: {username}<br />
Ngày đăng ký: {regdate}<br />
Thời gian gửi: {submitdate}<br />
Lần gửi: {submittimes}<br />
Lý do: {message}<br />
<br />
Kết quả: {modresult}<br />
Thời gian kiểm duyệt: {moddate}<br />
Người kiểm duyệt: {adminusername}<br />
Lưu ý: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>Kết quả đánh giá</strong><br />
----------------------------------------------------------------------<br />

<p>Đạt: Đăng ký của bạn đã được chấp thuận và bạn đã trở thành người dùng chính thức của {bbname}.</p>

<p>Cần cập nhật: Thông tin đăng ký chưa thành công, vui lòng <a href="home.php?mod=spacecp&ac=profile" target="_blank">hoàn thiện thông tin đăng ký</a> và gửi lại</p>

<p>Từ chối: Thông tin đăng ký bị từ chối</p>

<br />
<br />
Trân trọng,<br />
<br />
{bbname}<br />
{siteurl}',
    'adv_expiration_subject' =>
        'Quảng cáo của bạn sẽ hết hạn ngày {day}, vui lòng kiểm tra lại',
    'adv_expiration_message' =>
        'Quảng cáo sau đây sẽ hết hạn trong {day} ngày:<br /><br />{advs}',
    'invite_payment_email_message' => '
Thông báo từ {bbname}（{siteurl}, {orderid} đã được thanh toán và xác nhận.<br />
<br />----------------------------------------------------------------------<br />
Mã mời của bạn:
<br />----------------------------------------------------------------------<br />

{codetext}',
);
