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
    'get_passwd_subject' => 'Trợ giúp lấy mật khẩu',
    'get_passwd_message' => '
<p>Xin chào {username},
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
Regards,<br />
</p>
<p>{bbname}.
{siteurl}</p>',
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
Regards<br />

{bbname}<br />
{siteurl}</p>',
    'email_register_subject' => 'Email đăng ký tài khoản',
    'email_register_message' => '<br />
<p>这封信是由 {bbname} 发送的。</p>

<p>您收到这封邮件，是由于在 {bbname} 获取了新用户注册地址使用
了这个邮箱地址。如果您并没有访问过 {bbname}，或没有进行上述操作，请忽
略这封邮件。您不需要退订或进行其他进一步的操作。</p>
<br />
----------------------------------------------------------------------<br />
<strong>新用户注册说明</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>如果您是 {bbname} 的新用户，或在修改您的注册 Email 时使用了本地址，我们需
要对您的地址有效性进行验证以避免垃圾邮件或地址被滥用。</p>

<p>您只需点击下面的链接即可进行用户注册，以下链接有效期为3天。过期可以重新请求发送一封新的邮件验证：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(如果上面不是链接形式，请将该地址手工粘贴到浏览器地址栏再访问)</p>

<p>感谢您的访问，祝您使用愉快！</p>


<p>
此致<br />

{bbname} 管理团队.<br />
{siteurl}</p>',
    'add_member_subject' => 'Bạn được thêm làm thành viên',
    'add_member_message' => '
{newusername} ，
这封信是由 {bbname} 发送的。<br />
<br />
我是 {adminusername} ，{bbname} 的管理者之一。您收到这封邮件，是由于您<br />
刚刚被添加成为 {bbname} 的会员，当前 Email 即是我们为您注册的邮箱地址。<br />
<br />
----------------------------------------------------------------------<br />
重要！<br />
----------------------------------------------------------------------<br />
<br />
如果您对 {bbname} 不感兴趣或无意成为会员，请忽略这封邮件。<br />
<br />
----------------------------------------------------------------------<br />
帐号信息<br />
----------------------------------------------------------------------<br />
<br />
网站名称：{bbname}<br />
网站地址：{siteurl}<br />
<br />
用户名：{newusername}<br />
密码：{newpassword}<br />
<br />
从现在起您可以使用您的帐号登录 {bbname}，祝您使用愉快！<br />
<br />
<br />
<br />
此致<br />
<br />
{bbname} 管理团队.<br />
{siteurl}',
    'birthday_subject' => 'Chúc mừng sinh nhật',
    'birthday_message' => '<br />
{username}，<br />
这封信是由 {bbname} 发送的。<br />
<br />
您收到这封邮件，是由于这个邮箱地址在 {bbname} 被登记为用户邮箱，<br />
并且按照您填写的信息，今天是您的生日。很高兴能在此时为您献上一份<br />
生日祝福，我谨代表{bbname}管理团队，衷心祝福您生日快乐。<br />
<br />
如果您并非 {bbname} 的会员，或今天并非您的生日，可能是有人误用了您的邮<br />
件地址，或错误的填写了生日信息。本邮件不会多次重复发送，请忽略这封邮件。<br />
<br />
<br />
此致<br />
<br />
{bbname} 管理团队.<br />
{siteurl}',
    'email_to_friend_subject' =>
        '{$_G[member][username]} giới thiệu bạn bài: $thread[subject]',
    'email_to_friend_message' => '<br />
这封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 发送的。<br />
<br />
您收到这封邮件，是由于在 {$_G[member][username]} 通过 {$_G[setting][bbname]} 的“推荐给朋友”<br />
功能推荐了如下的内容给您。如果您对此不感兴趣，请忽略这封邮件。您不需要退订或进行其他进一步的操作。<br />
<br />
----------------------------------------------------------------------<br />
信件原文开始<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
信件原文结束<br />
----------------------------------------------------------------------<br />
<br />
请注意这封信仅仅是由用户使用 “推荐给朋友”发送的，不是网站官方邮件，<br />
网站管理团队不会对这类邮件负责。<br />
<br />
欢迎您访问 {$_G[setting][bbname]}<br />
$_G[siteurl]',
    'email_to_invite_subject' =>
        'Bạn của bạn: {$_G[member][username]} gửi một mã mời tham gia {$_G[setting][bbname]} đến bạn',
    'email_to_invite_message' => '<br />
$sendtoname,<br />
这封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 发送的。<br />
<br />
您收到这封邮件，是由于 {$_G[member][username]} 通过 {bbname} 的“发送邀请码给朋友”<br />
功能推荐了如下的内容给您。如果您对此不感兴趣，请忽略这封邮件。您不需要退订或进行其他进<br />
一步的操作。<br />
<br />
----------------------------------------------------------------------<br />
信件原文开始<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
信件原文结束<br />
----------------------------------------------------------------------<br />
<br />
请注意这封信仅仅是由用户使用 “发送邀请码给朋友”发送的，不是网站官方邮件，<br />
网站管理团队不会对这类邮件负责。<br />
<br />
欢迎您访问 {$_G[setting][bbname]}<br />
$_G[siteurl]',
    'moderate_member_subject' => 'Thông báo kết quả kiểm duyệt',
    'moderate_member_message' => '<br />
<p>{username},
这封信是由 {bbname} 发送的。</p>

<p>您收到这封邮件，是由于这个邮箱地址在 {bbname} 被新用户注册时所
使用，且管理员设置了对新用户需要进行人工审核，本邮件将通知您提交
申请的审核结果。</p>
<br />
----------------------------------------------------------------------<br />
<strong>注册信息与审核结果</strong><br />
----------------------------------------------------------------------<br />
<br />
用户名: {username}<br />
注册时间: {regdate}<br />
提交时间: {submitdate}<br />
提交次数: {submittimes}<br />
注册原因: {message}<br />
<br />
审核结果: {modresult}<br />
审核时间: {moddate}<br />
审核管理员: {adminusername}<br />
管理员留言: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>审核结果说明</strong><br />
----------------------------------------------------------------------<br />

<p>通过: 您的注册已通过审核，您已成为 {bbname} 的正式用户。</p>

<p>否决: 您的注册信息不完整，或未满足我们对新用户的某些要求，您可以
	  根据管理员留言，<a href="home.php?mod=spacecp&ac=profile" target="_blank">完善您的注册信息</a>，然后再次提交。</p>

<p>删除：您的注册由于与我们的要求偏差较大，或本站的新注册人数已
	  超过预期，申请已被否决。您的帐号已从数据库中删除，将无法
	  再使用其登录或提交再次审核，请您谅解。</p>

<br />
<br />
此致<br />
<br />
{bbname} 管理团队.<br />
{siteurl}',
    'adv_expiration_subject' =>
        'Quảng cáo của bạn sẽ hết hạn ngày {day}, vui lòng kiểm tra lại',
    'adv_expiration_message' =>
        '您站点的以下广告将于 {day} 天后到期，请及时处理：<br /><br />{advs}',
    'invite_payment_email_message' => '
欢迎您光临{bbname}（{siteurl}），您的订单{orderid}已经支付完成，订单已确认有效。<br />
<br />----------------------------------------------------------------------<br />
以下是您获得的邀请码
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
重要！
<br />----------------------------------------------------------------------<br />',
);
