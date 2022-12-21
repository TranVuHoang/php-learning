## 7 Mảng nâng cao trong php

7.1 Cấu trúc mảng trong PHP

- syntax:
  - `$arrayName = (key1 => value1, key2 => value2,..., keyN => valueN);`
  - viết tắt:
    `$arrayName = (value1, value2, ... valueN);`
- Mảng là 1 biến đặc biệt có thể lưu trữ nhiều giá trị trong cùng 1 thời điểm.
- Mảng giúp chúng ta lưu trữ dữ, xử lý và xuất dữ liệu.
- vd:
  - `$error = array();`
  - `$listUser = array("A", "B", "C");`
- Cấu trúc mảng:
  - Mảng gồm có 2 phần tử: key và value
  - `key`:
    - key dùng để phần biệt các phần tử
    - key có thể là số nguyên hoặc là 1 chuỗi
    - key dùng để sau này ta có thể thêm sửa xóa phần tử trong mảng
  - `value`: - giá trị của phần tử mảng  
    -> Mỗi cặp key và value là 1 phần tử của mảng
- Mảng rỗng
  - Dùng làm mảng khởi tạo
  - `$error = array();`
- Tạo mảng với key mặc định
  - key sẽ được tạo tự động từ 0,1,2,...
  - vd:
- Tạo mảng với key xác định
  - key được định nghĩa và mang đặc trưng(ý nghĩa) của nó
  - vd:
    $info = array(
    "id" => 1,
    "fullName" => "Tran Vu Hoang",
    "email" => "tranvuhoangjr@gmail.com"
    );

# 7.2 Tạo mảng trong php

- Khởi tạo giá trị cho mảng
  - Cách 1:
    - Khởi tạo ngay khi ta tạo mảng
    - $info = array(
      "id" => 1,
      "fullName" => "Tran Vu Hoang",
      "email" => "tranvuhoangjr@gmail.com"
      );
- Khởi tạo giá trị riêng lẻ các phần tử
  - Để tạo (value) giá trị cho mảng chúng ta sử dụng key của nó
  -

# 7.4 Lấy thông tin của phần tử mảng

- Lấy giá trị mảng:
  - Để truy xuất phần tử của mảng, căn cứ vào key(khóa) của mảng
  - echo `$info["fullName"];` // lấy value có key là fullName
- practice:
  - khởi tạo mảng sau:
    - xuất ra value của mảng vs key là fullName.
    - đổ dữ liệu lên html sau:

# 7.5 Cập nhật thông tin mảng PHP

- data(dữ liệu) của mảng liên tục thay đổi
- cập nhật cho phần tử nào của mảng -> quyết định bởi key của mảng
- vd: `$info["fullName"] = " Trần Vũ Hoàng";`

# 7.6 Mảng đa chiều(2 chiều trở lên)

- khi 1 phần tử của mảng có value là 1 mảng khác => mảng đa chiều
- Mảng đa chiều dùng để lưu chữ dữ liệu có cấu trúc nhiều tầng
- Các thao tác trên mảng đa chiều tương tự với mảng 1 chiều
  - thêm, sửa(cập nhật), giống như mảng 1 chiều

# 7.7 Xóa mảng

- Sử dụng hàm unset() để xóa mảng
  - 1. Xóa toàn bộ mảng
    - `unset($arrayName);`
  - 2. Xóa phần tử của mảng
    - `unset($arrayName["key"]);`

# 7.8 Duyệt mảng

- Tại sao cần duyệt mảng:
  - Giúp ghé thăm các phần tử của mảng
  - Xử lý các yêu cầu liên quan trực tiếp đến các phần tử mảng(xuất dữ liệu, tính toán).
- Cấu trúc duyệt mảng:
  - `Foreach` là cấu trúc duyệt mảng
  - Trong mỗi bước duyệt chúng ta ghé thăm mỗi phần tử của mảng
  - key và value là thông tin của mỗi phần tử mảng được cung cấp trong vòng lặp
  - Note: nếu không dùng đến key thì không cần đưa $key vào vòng lặp
  - syntax:
    - `foreach($arrayName as $key => $value) {}`
    - `$key`: là key của phần tử đang được duyệt
    - `$value`: là giá trị của phần tử đang được duyệt
- Duyệt mảng 1 chiều
  - $list_prime = array(1,2,3,4);
  - foreach($list_prime as $value) {
    echo $value;
    }
# 7.9 Nhúng mảng PHP vào HTML
- Xuất dữ liệu từ mảng PHP lên HTML
- Xuất dữ liệu mảng danh sách các số nguyên tố từ 2-10 lên html
- Xuất dữ liệu mảng 1 chiều 
- 
