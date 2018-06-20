<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'happy_shop');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aC2.Lq[lA<<k) 5*YvdPOq~ I/;}Sho~#c4=.?+Z< wo~5t9#0XkZ=Ec-UVs5Z4b');
define('SECURE_AUTH_KEY',  '1K_UqMa2wyiV:VV!H(%g@tp-|y]HshaNdrU+`#SJPr!_^u2Ev/RH~xhu0h2rb{jZ');
define('LOGGED_IN_KEY',    'e<oZau:E7y?*+F>7Pw`TI3KR7~pET,zs_PtNpdX^70Q{-SRN!_v:~c@ZQ!*=g$9c');
define('NONCE_KEY',        '`1*E[,5FL8&:G05I}N+/se80n{|6p19$x?9(IH8S(Zs&<U.v_na{P UvKkj:G@_y');
define('AUTH_SALT',        '_<U;nyMy<E{jKsc}!spa)50fCC]j3/ddtgG&v80#*]{8($%(O (g,[{p1rRu=l12');
define('SECURE_AUTH_SALT', 'Q^ezMH~4It};;Dhzo&-6X*rV~o-+U+{x?=ezHo%Ejj.N}Gmg~{+34@Hqp9^%do(/');
define('LOGGED_IN_SALT',   'Ur`8:IbCT.O~m]za&srUDk$vi}Adj,i<*d,8TbkWZ{qG.oJ.Dacm;Gt2Y^7VMUhD');
define('NONCE_SALT',       'AQ5ttVL-Op[(^MN&QD72tA@IH{oV<E|w ki<M6agIbup5SErNQN]MEaE1>r*B(2X');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'happy_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
