<?php

return [
    'token' => [
        'token_none' => 'Không có mã truy cập',
        'token_expired' => 'Mã truy cập hết hạn',
        'token_incorrect' => 'Mã truy cập không chính xác',
    ],
    'auth' => [
        'auth_invalid' => 'Tên tài khoản hoặc mật khẩu không đúng',
        'user_not_login' => 'Người dùng chưa đăng nhập',
        'login_success' => 'Đăng nhập thành công',
        'logout_success' => 'Đăng xuất thành công',
        'email_invalid' => 'Email không tồn tại hoặc chưa được kích hoạt vui lòng kiểm tra email của bạn',
        'user_not_exist' => 'Người dùng không tồn tại',
        'send_code_forgot_success' => 'Mã khôi phục tài khoản đã được gửi tới email của bạn',
        'send_code_forgot_error' => 'Không thể gửi mã khôi phục đến email của bạn, vui lòng kiểm tra lại',
        'user_info_invalid' => 'Thông tin người dùng không chính xác',
        'user_blocked' => 'Tài khoản đăng nhập đã bị khóa',
        'logout_fail' => 'Đăng xuất thất bại',
        'social_not_exist' => 'Mã xác thực hoặc mã mạng xã hội không đúng',
        'social_invalid' => 'Mã xác thực không tồn tại',
        'social_exist' => 'Tài khoản của bạn đã tồn tại',
        'login_invalid' => 'Yêu cầu của bạn không hợp lệ.',
        'facility_invalid' => 'Khu vui chơi của bạn không hợp lệ.',
        'agency_invalid' => 'Tài khoản của bạn chưa thuộc đại lý.',
        'agency_facility_invalid' => 'Đại lý của bạn không có quyền với khu vui chơi này.',
    ],
    'register' => [
        'username_exist' => 'Tài khoản đã tồn tại',
        'username_rule' => 'Tên đăng nhập phải từ 6 đến 24 kí tự, bắt đấu bắng một kí tự số hoặc chữ, và được phép sử dụng dấu gạch nối hoặc gạch dưới',
        'email_exist' => 'Email đã tồn tại',
        'email_rule' => 'Nhập vào email hợp lệ',
        'password_rule' => 'Mật khẩu phải từ 8 đến 24 kí tự, có ít nhất một chữ số và một ký tự chữ cái và không được chứa ký tự đặc biệt',
        'data_invalid' => 'Dữ liệu nhập vào không hợp lệ',
        'social_type_rule' => 'Loại mạng xã hội phải là 0 hoặc 1',
        'social_id_rule' => 'Mã mạng xã hội không hợp lệ',
        'social_id_exist' => 'Mã mạng xã hội đã tồn tại',
        'register_success' => 'Đăng ký thành công. Vui lòng kích hoạt email để bắt đầu sử dụng tài khoản.',
        'register_fail' => 'Đăng ký thất bại',
        'activated_emai_successful' => 'Email của bạn đã kích hoạt thành công.',
        'activated_phone_successful' => 'Số điện thoại của bạn đã kích hoạt thành công.',
        'code_expires' => 'Mã kích hoạt của bạn đã hết hạn.',
        'invalid_active_code' => 'Mã kích hoạt không hợp lệ',
        'phone_fail' => 'Định dạng số điện thoại không hợp lệ',
        'register_and_send_mail_success' => 'Đăng ký thành công một email đã được gửi tới email của bạn, vui lòng kiểm tra email để kích lấy mã kích hoạt',
        'register_sucess_send_mail_failure' => 'Đăng ký thành công Không thể gửi mã kích hoạt tới email của bạn vui lòng kiểm tra email hoặc đăng nhập vào tài khoản chọn tính năng Resendemail để nhận mã kích hoạt',
    ],
    'common' => [
        'header_missing' => 'Thiếu tiêu đề của tập tin',
        'param_missing' => 'Thiếu tham số',
        'locale_not_exist' => 'Vùng miền không hợp lệ',
        'server_error' => 'Xảy ra lỗi ở máy chủ',
        'resource_not_found' => 'Không tìm thấy dữ liệu',
        'request_successs' => 'Lấy danh sách thành công',
        'access_denied' => 'Không có quyền truy cập',
        'access_denied_edit' => 'Không có quyền chỉnh sửa dữ liệu',
        'show_success' => 'Lấy thông tin thành công',
        'show_fail' => 'Lấy thông tin thất bại',
        'update_success' => 'Cập nhật thành công',
        'update_fail' => 'Cập nhật thất bại',
        'invalid_data' => 'Dữ liệu không hợp lệ',
        'create_success' => 'Tạo dữ liệu thành công',
        'delete_sucess' => 'Xóa dữ liệu thành công',
        'upload_image_fail' => 'Upload hình ảnh thất bại',
    ],
    'product' => [
        'location_not_exist' => 'Máy chủ không hợp lệ',
        'category_not_exist' => 'Giá trị loại vé không hợp lệ',
        'price_must_numeric' => 'Giá của sản phẩm phải là số',
        'product_status_not_exist' => 'Giá trị tình trạng sản phẩm không hợp lệ',
        'add_product_success' => 'Thêm thông tin sản phẩm thành công',
        'photo_not_valid' => 'Hình tải lên không hợp lệ',
        'product_not_exist' => 'Sản phẩm không tồn tại',
        'add_photo_success' => 'Thêm hình ảnh thành công',
        'remove_photo_success' => 'Xóa hình ảnh thành công',
        'product_photos_limit' => 'Vượt quá giới hạn số lượng hình cho một sản phẩm',
        'photo_not_exist' => 'Hình ảnh không tồn tại',
        'update_product_success' => 'Cập nhật sản phẩm thành công',
        'remove_product_success' => 'Xóa sản phẩm thành công',
        'user_did_not_like' => 'User chưa chọn yêu thích sản phẩm',
        'comment_invalid' => 'Bình luận không được để trống và có nhiều nhất 1000 ký tự',
        'comment_does_not_exist' => 'Bình luận không tồn tại',
        'remove_comment_success' => 'Xóa bình luận thành công',
        'unlike_success' => 'Bỏ yêu thích sản phẩm thành công',
        'like_success' => 'Chọn yêu thích sản phẩm thành công',
        'comment_success' => 'Bình luận sản phẩm thành công',
        'update_sell_status_success' => 'Cập nhật trạng thái cho sản phẩm thành công',
        'price_search' => 'Giá',
        'key_search' => 'price',
        'create_success' => 'Tạo mới sản phẩm thành công',
        'show_success' => 'Hiển thị thông tin sản phẩm thành công',
        'show_success_none_record' => 'Không tìm thấy danh sách sản phẩm',
        'show_success_records' => 'Danh sách sản phẩm',
    ],
    'user' => [
        'user_does_not_exist' => 'Người dùng không tồn tại',
        'get_user_success' => 'Lấy thông tin người dùng thành công',
        'update_success' => 'cập nhật thông tin thành công',
        'update_password_success' => 'Cập nhật mật khẩu thành công',
        'update_email_success' => 'Cập nhật email thành công',
        'phone_invalid' => 'Số điện thoại không hợp lệ',
        'birthday_invalid' => 'Ngày tháng năm sinh phải định dạng như sau d/m/Y, ví dụ 01/01/1990',
        'update_fail_or_permission_denied' => 'Người dùng không tồn tại hoặc bạn không có quyền cập nhật tài khoản này',
        'gender_invalid' => 'Giới tính không hợp lệ',
        'activecode_valid' => 'Mã kích hoạt hợp lệ',
        'old_password_invalid' => 'Mật khẩu không đúng',
        'password_invalid' => 'Mật khẩu không đúng',
        'update_sendmail_success' => 'Cập nhật thông tin thành công, vui lòng kiểm tra email để kích hoạt email của bạn',
        'device_token_too_long' => 'Token của thiết bị quá dài',
        'sms_messenger' => 'Mã kích hoạt số điện thoại của bạn:',
        'show_fail' => 'Người dùng không tồn tại',
        'show_success' => 'Lấy thông tin người dùng thành công',
        'show_success_none_record' => 'Không có kết quả trả về',
        'show_success_records' => 'Dữ liệu trả về',
        'delete_fail' => 'Người dùng không tồn tại',
        'delete_success' => 'Xóa người dùng thất bại',
        'create_fail' => 'Thêm mới người dùng thất bại',
        'create_success' => 'Thêm mới người dùng thành công',
        'update_fail' => 'Cập nhật thông tin người dùng thất bại',
        'update_success' => 'Cập nhật thông tin người dùng thành công',
        'active_success' => 'Kích hoạt tài khoản thành công',
        'active_fail' => 'Kích hoạt tài khoản thất bại',
        'block_success' => 'Khóa tài khoản thành công',
        'block_fail' => 'Khóa tài khoản thất bại',
        'unblock_success' => 'Kích hoạt tài khoản thành công',
        'unblock_fail' => 'Kích hoạt tài khoản thất bại',
        'forgot_success' => 'Vui lòng kiểm tra email để thực hiện đổi mật khẩu',
        'forgot_fail' => 'Hiện tại bạn không thể dùng chức năng này',
        'reset_success' => 'Mật khẩu mới cập nhật thành công',
        'reset_fail' => 'Mật khẩu mới cập nhật thất bại',
        'forgot_password_not_exit' => 'Email chưa được kích hoạt',
        'not_active' => 'Tài khoản của bạn chưa được kích hoạt',
        'fullname_invalid' => 'Tên đầy đủ phải có ít nhất 3 ký tự hoặc chứa ít nhất 1 dấu cách',
    ],
    'notification' => [
        'like_product' => ':user đã chọn thích sản phẩm :title',
        'comment_product' => ':user đã bình luận sản phẩm :title',
        'update_product' => 'Sản phẩm :title đã được cập nhật',
    ],
    'permission' => [
        'permission_denied' => 'Bạn không có quyền cho hành động này',
        'full_permission' => 'Bạn đã có quyền xem thông tin',
    ],
    'category' => [
        'name_null' => 'Bạn chưa nhập tên danh mục',
        'key_null' => 'Bạn chưa nhập khóa mục',
        'remove_category_success' => 'Xóa danh mục thành công',
        'update_category_success' => 'Sửa danh mục thành công',
        'category_have_child_category' => 'Danh mục này có chứa danh mục con',
        'category_have_product' => 'Danh mục này có chứa sản phẩm bạn chỉ có thể thay đổi tên',
        'public_parrent_first' => 'Danh mục cha chưa được bật',
        'key_avalible' => 'đã tồn tại key cùng danh mục này',
        'update_name_success' => 'Cập nhật tên danh mục thành công',
        'category_have_categoryDetail' => 'Danh mục cha đã có thuộc tính',
    ],
    'resources' => [
        'remove_success' => 'Xóa thành công',
        'resources_not_exit' => 'không tìm thấy tài nguyên',
        'add_success' => 'Thêm thành công',
        'delete_sucessfull' => 'Xóa thành công',
        'c' => 'Cập nhật thành công',
        'permission_resource' => 'Bạn đã  có quyền xem thông tin này',
    ],
    'info' => [
        'info_is_null' => 'Thông tin không được rỗng',
        'format_incorect' => 'Định dạng dữ liệu không hợp lệ',
    ],
    'email_template' => [
        'for_got_pwd' => 'remind_pwd_vn',
    ],
    'facility' => [
        'create_success' => 'Thêm mới địa điểm thành công',
        'create_fail' => 'Thêm mới địa điểm thất bại',
        'show_success' => 'Tìm thấy thông tin địa điểm',
        'show_fail' => 'Địa điểm không tồn tại',
        'delete_success' => 'Xóa địa điểm thành công',
        'delete_fail' => 'Địa điểm không tồn tại',
        'update_success' => 'Cập nhật địa điểm thành công',
        'update_fail' => 'Cập nhật địa điểm thất bại',
        'facility_not_found' => 'Không tìm thấy địa điểm',
    ],
    'order' => [
        'shopcart_invalid_quantity' => 'Sản phẩm này không đủ số lượng hoặc đã được bán hết.',
        'show_success' => 'Tìm thấy thông tin đơn hàng',
        'show_fail' => 'Đơn hàng không tồn tại',
        'create_success' => 'Tạo đơn hàng thành công',
        'add_success' => 'Thêm vé thành công',
        'edit_success' => 'Sửa vé thành công',
        'remove_success' => 'Xóa đơn hàng thành công',
        'shopcart_invalid' => 'Đơn hàng không hợp lệ',
        'shopcart_expried' => 'Đơn hàng hết hạn',
        'header_excel' => 'STT,Tổng tiền,Địa điểm,Trạng thái,Ngày tạo',
        'file_name_excel' => 'Order_',
        'waitting' => 'Đơn hàng của bạn đang chờ xử lý',
        'woking' => 'Đơn hàng của bạn đang được xử lý',
        'sucess' => 'Đơn hàng của bạn đã được xử lý',
        'field' => 'Đơn hàng của bạn xử lý bị thất bại',
        'cancel' => 'Đơn hàng của bạn đã bị hủy',
        'status_0' => 'Thanh toán thành công',
        'status_1' => 'Thanh toán thất bại',
        'status__1' => 'Chưa thanh toán',
        'order_reprint_ticket' => 'Đang thực hiện in lại vé',
    ],
    'email_setting' => [
        'title' => 'Hỗ trợ Sun Group',
        'subject_active' => 'Kích hoạt tài khoản',
        'subject_register' => 'Đăng ký tài khoản',
        'subject_remind' => 'Quên mật khẩu',
        'subject_change_email' => 'Thay đổi email',
        'subject_create_user' => 'Thông tin tài khoản',
        'subject_order_info' => 'Thông tin mua hàng',
        'system_error' => 'Lỗi xảy ở hệ thống',
    ],
    'transaction' => [
        'show_success' => 'Thông tin giao dịch',
        'show_fail' => 'Không tồn tại giao dịch',
        'file_name_excel' => 'Transaction_',
        'header_excel' => 'No,Tổng tiền,Số giao dịch,Mã trả về,Ngày tạo,Mã đơn hàng',
    ],
    'promotion' => [
        'show_success' => 'Thông tin quảng cáo',
        'show_fail' => 'Không tồn tại quảng cáo',
        'delete_success' => 'Xóa thành công',
        'delete_fail' => 'Xóa thất bại',
    ],
    'invoice' => [
        'err_1' => 'Tài khoản đăng nhập sai hoặc không có quyền truy cập',
        'err_3' => 'Dữ liệu xml đầu vào không đúng quy định',
        'err_5' => 'Không phát hành được hóa đơn',
        'err_6' => 'Chuỗi fkey không chính xác, hóa đơn không tồn tại',
        'err_7' => 'Tên tài khoản không phù hợp, không tìm thấy công ty tương ứng cho người dùng',
        'err_10' => 'Số lô hóa đơn vượt quá giới hạn cho phép',
        'err_20' => 'Pattern và serial không phù hợp.',
        'XSLT_Complier' => 'Xuất hóa đơn thất bại. Bạn vui lòng thử lại sau',
    ],
    'payment_account' => [
        'account_not_found' => 'Không tìm thấy tài khoản nhận thanh toán',
        'create_success' => 'Thêm mới tài khoản thanh toán thành công',
        'create_fail' => 'Thêm mới tài khoản thánh toán thất bại',
        'show_success' => 'Tìm thấy thông tin tài khoản thanh toán',
        'show_fail' => 'Thông tin tài khoản không tồn tại',
        'delete_success' => 'Đã xóa thông tin tài khoản thanh toán thành công',
        'delete_fail' => 'Thông tin tài khoản không tồn tại',
        'update_success' => 'Cập nhật thông tin tài khoản thanh toán thành công',
        'update_fail' => 'Cập nhật thông tin tài khoản thanh toán thất bại',
    ],
    'payment_type' => [
        'payment_type_exist' => 'Loại thanh toán này đã tồn tại',
        'payment_type_not_found' => 'Loại thanh toán không tìm thấy',
    ],
    'payment_paypal' => [
        'pay_not_found' => 'Thông tin thanh toán không tìm thấy',
    ],
    'menu' => [
        'show_success' => 'Hiển thị danh sách menu',
        'create_success' => 'Tạo mới menu thành công',
        'create_fail' => 'Tạo mới menu thất bại',
        'update_success' => 'Cập nhật menu thành công',
        'update_fail' => 'Cập nhật menu thất bại',
        'show_success' => 'Tìm thấy thông tin menu',
        'show_fail' => 'Thông tin menu không tồn tại',
        'delete_success' => 'Đã xóa menu thành công',
        'delete_fail' => 'Menu không tồn tại',
        'facility_menu_exist' => 'Menu cho địa điểm này đã tồn tại',
        'menu_child_invalid' => 'Menu con phải có địa điểm',
    ],
    'sales' => [
        'verified' => 'Mã khuyến mãi hợp lệ.',
        'failed' => 'Mã khuyến mãi không hợp lệ.',
    ],
    'payment_momo' => [
        'url_pay_fail' => 'URL thanh toán lỗi',
    ],
    'agency' => [
        'create_success' => 'Thêm mới đại lý thành công',
        'create_fail' => 'Thêm mới đại lý thất bại',
        'show_success' => 'Tìm thấy thông tin đại lý',
        'show_fail' => 'Đại lý không tồn tại',
        'delete_success' => 'Xóa đại lý thành công',
        'delete_fail' => 'Đại lý không tồn tại',
        'update_success' => 'Cập nhật đại lý thành công',
        'update_fail' => 'Cập nhật đại lý thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách đại lý',
        'show_success_records' => 'Danh sách đại lý',
    ],
    'tag' => [
        'create_success' => 'Thêm mới tag thành công',
        'create_fail' => 'Thêm mới tag thất bại',
        'show_success' => 'Tìm thấy thông tin tag',
        'show_fail' => 'Tag không tồn tại',
        'delete_success' => 'Xóa tag thành công',
        'delete_fail' => 'Tag không tồn tại',
        'update_success' => 'Cập nhật tag thành công',
        'update_fail' => 'Cập nhật tag thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách tag',
        'show_success_records' => 'Danh sách tag',
        'tag_not_in_facility' => 'Tag không thuộc khu vui chơi đang chọn.',
    ],
    'account_agency' => [
        'create_success' => 'Thêm mới người dùng vào đại lý thành công',
        'create_fail' => 'Thêm mới người dùng vào đại lý thất bại',
        'show_success' => 'Tìm thấy thông tin người dùng của đại lý',
        'show_fail' => 'Người dùng của đại lý không tồn tại',
        'delete_success' => 'Xóa người dùng của đại lý thành công',
        'delete_fail' => 'Người dùng của đại lý không tồn tại',
        'update_success' => 'Cập nhật người dùng vào đại lý thành công',
        'update_fail' => 'Cập nhật người dùng vào đại lý thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách người dùng của đại lý',
        'show_success_records' => 'Danh sách người dùng của đại lý',
        'user_is_exist' => 'Người dùng của đại lý đã tồn tại',
        'create_facility_success' => 'Thêm mới khu vui chơi vào đại lý thành công',
    ],
    'import' => [
        'import_success' => 'Thêm mới thành công',
        'import_fail' => 'Thêm mới thất bại',
    ],
    'payment' => [
        'create_success' => 'Thêm mới phương thức thanh toán thành công',
        'create_fail' => 'Thêm mới phương thức thanh toán thất bại',
        'show_success' => 'Tìm thấy thông tin phương thức thanh toán',
        'show_fail' => 'Phương thức thanh toán không tồn tại',
        'delete_success' => 'Xóa phương thức thanh toán thành công',
        'delete_fail' => 'phương thức thanh toán không tồn tại',
        'update_success' => 'Cập nhật phương thức thanh toán thành công',
        'update_fail' => 'Cập nhật phương thức thanh toán thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách phương thức thanh toán',
        'show_success_records' => 'Danh sách phương thức thanh toán',
        'payment_is_exist' => 'Phương thức thanh toán của đại lý đã tồn tại',
    ],
    'account_facility' => [
        'create_success' => 'Thêm mới tài khoản người dùng vào khu vui chơi thành công',
        'create_fail' => 'Thêm mới tài khoản người dùng vào khu vui chơi thất bại',
        'show_success' => 'Tìm thấy thông tin tài khoản người dùng của khu vui chơi',
        'show_fail' => 'Tài khoản người dùng của khu vui chơi không tồn tại',
        'show_success_none_record' => 'Không tìm thấy danh sách tài khoản người dùng của khu vui chơi',
        'show_success_records' => 'Danh sách tài khoản người dùng của khu vui chơi',
        'facility_does_not_duplication' => 'Danh sách khu vui chơi không được trùng',
    ],
    'policy' => [
        'create_success' => 'Thêm mới chính sách thành công',
        'create_fail' => 'Thêm mới chính sách thất bại',
        'show_success' => 'Tìm thấy thông tin chính sách',
        'show_fail' => 'Thông tin chính sách không tồn tại',
        'delete_success' => 'Xóa chính sách thành công',
        'delete_fail' => 'Xóa chính sách thất bại',
        'update_success' => 'Cập nhật chính sách thành công',
        'update_fail' => 'Cập nhật chính sách thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách chính sách',
        'show_success_records' => 'Danh sách chính sách',
    ],
    'policy_product' => [
        'create_success' => 'Thêm mới chính sách vào vé thành công',
        'create_fail' => 'Thêm mới chính sách vào vé thất bại',
        'show_success' => 'Tìm thấy thông tin chính sách của vé',
        'show_fail' => 'Chính sách của vé không tồn tại',
        'delete_success' => 'Xóa chính sách vào vé thành công',
        'delete_fail' => 'Xóa chính sách vào vé thất bại',
        'update_success' => 'Cập nhật chính sách vào vé thành công',
        'update_fail' => 'Cập nhật chính sách vào vé thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách chính sách áp dụng vào vé',
        'show_success_records' => 'Danh sách chính sách áp dụng vào vé',
        'product_does_not_duplication' => 'Danh sách sản phẩm không được trùng',
        'create_facility_success' => 'Thêm mới khu vui chơi vào đại lý thành công',
        'invalid_product' => 'Giá trị của vé không phù hợp',
        'invalid_policy' => 'Giá trị của chính sách không phù hợp',
    ],
    'booking_policy' => [
        'create_success' => 'Thêm mới chính sách vào khu vui chơi thành công',
        'create_fail' => 'Thêm mới chính sách vào khu vui chơi thất bại',
        'show_success' => 'Tìm thấy thông tin chính sách',
        'show_fail' => 'Thông tin chính sách không tồn tại',
        'delete_success' => 'Xóa chính sách của khu vui chơi thành công',
        'delete_fail' => 'Xóa chính sách của khu vui chơi thất bại',
        'update_success' => 'Cập nhật chính sách của khu vui chơi thành công',
        'update_fail' => 'Cập nhật chính sách của khu vui chơi thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách chính sách',
        'show_success_records' => 'Danh sách chính sách',
        'invalid_facility' => 'Giá trị khu vui chơi của chính sách không phù hợp với khu vui chơi đang chọn.',
        'invalid_type_category' => 'Giá trị category của chính sách không phù hợp',
    ],
    'role' => [
        'create_success' => 'Thêm mới nhóm quyền thành công',
        'create_fail' => 'Thêm mới nhóm quyền thất bại',
        'show_success' => 'Tìm thấy thông tin nhóm quyền',
        'show_fail' => 'Thông tin nhóm quyền không tồn tại',
        'delete_success' => 'Xóa nhóm quyền thành công',
        'delete_fail' => 'Xóa nhóm quyền thất bại',
        'update_success' => 'Cập nhật nhóm quyền thành công',
        'update_fail' => 'Cập nhật nhóm quyền thất bại',
        'show_success_none_record' => 'Không tìm thấy danh sách nhóm quyền',
        'show_success_records' => 'Danh sách nhóm quyền',
    ],
    'facility_admin' => [
        'create_success' => 'Thêm mới tài khoản admin vào khu vui chơi thành công',
        'create_fail' => 'Thêm mới tài khoản admin vào khu vui chơi thất bại',
        'show_success' => 'Tìm thấy thông tin tài khoản admin của khu vui chơi',
        'show_fail' => 'Tài khoản admin của khu vui chơi không tồn tại',
        'show_success_none_record' => 'Không tìm thấy danh sách tài khoản admin của khu vui chơi',
        'show_success_records' => 'Danh sách tài khoản admin của khu vui chơi',
        'account_does_not_duplication' => 'Danh sách admin không được trùng',
    ],
    'role_right' => [
        'create_success' => 'Thêm mới danh sách chức năng thành công',
        'create_fail' => 'Thêm mới danh sách chức năng thất bại',
        'show_success' => 'Tìm thấy thông tin danh sách chức năng',
        'show_fail' => 'Danh sách chức năng không tồn tại',
        'show_success_none_record' => 'Không tìm thấy danh sách chức năng',
        'show_success_records' => 'Danh sách chức năng',
        'role_does_not_duplication' => 'Danh sách chức năng chơi không được trùng',
    ],
];
