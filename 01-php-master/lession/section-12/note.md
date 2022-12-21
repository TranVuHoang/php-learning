# Bài 12.3: Lưu trữ kết nối phiên làm việc bằng session
- Phiên là gì?
    - Phiên là 1 chu trình người dùng gửi yêu cầu lên server và được server hồi đáp.
      sau khi server hồi đáp trả lại trang nó sẽ đóng kết nối (mỗi phiên tách biện với nhau, k liên quan đến nhau)
    - Các phiên làm việc của web server không thể kết nối các phiên làm việc với nhau để phục vụ công việc nào đó.
    - Khi đăng nhập thành công sẽ lưu trữ giá trị đã đăng nhập thành công

- Session là gì?
    - Session dùng để theo dõi, kêt nối các phiên làm việc của người dùng với nhau.
    - Thông tin của session được lưu trữ trong mảng hệ thống `$_SESSION`

    - TẠO SESSION:
        <?php
            session_start(); // hàm để khai báo chuẩn bị dùng đến SESSION
            $_SESSION['is_login'] = true; //tạo biến is_login có giá trị = true
        ?>

    - TẠO DỮ LIỆU SESSION
        <?php
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'unitop';
        ?>

    - KIỂM TRA DỮ LIỆU SESSION
        <?php
            ob_start();
            if (!isset($_SESSION['is_login'])) { // kiểm tra xem session nếu chưa tồn tại thì...
                // chuyển hướng khi chưa login
                header("Location: login.php");
            }
        ?>


