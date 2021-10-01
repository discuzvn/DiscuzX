===============================
Chuyển đổi SS7 sang Discuz! X1 các vấn đề cần chú ý
===============================

Câu hỏi: Hình ảnh được chuyển đổi và địa chỉ tệp đính kèm bị sai?
Giải pháp: Các bước như sau:
1. Tìm biểu tượng images / base / attachment.gif dưới mã nguồn SS7 ban đầu và đặt nó vào Disucuz! Trong thư mục static / image / filetype / of X1;
2. Tìm tệp nguồn / module / portal / portal_view.php và thêm mã sau vào sau mã "$ content ['content'] = blog_bbcode ($ content ['content']);":

$ ss_url = 'http: // your_ss_site_url /'; // Vui lòng thay đổi địa chỉ liên kết này thành địa chỉ trang SS của bạn! ! !
$ findarr = array (
$ ss_url.'batch.download.php? aid = ', // Địa chỉ tải xuống tệp đính kèm
$ ss_url.'attachments / ', // Thư mục ảnh đính kèm
$ ss_url.'images / base / attachment.gif '// biểu tượng tải xuống tệp đính kèm
);
$ Replacearr = array (
'porta.php? mod = attachment & id =',
$ _G ['setting'] ['attachmenturl']. '/ Portal /',
STATICURL.'image / filetype / attachment.gif '
);
$ content ['content'] = str_replace ($ findarr, $ Replacearr, $ content ['content']);