1. Giới thiệu về PHP
PHP (viết tắt của Hypertext Preprocessor) là một ngôn ngữ lập trình kịch bản (scripting language) phía server được sử dụng phổ biến trong phát triển web. Nó được nhúng trực tiếp vào mã HTML để tạo ra các trang web động và tương tác.
2.1 Cú pháp của PHP
Mã PHP luôn đặt trong cặp thẻ:

 `<?php
   // code PHP
 ?>`
 
2.2 Khai báo biến
Biến trong PHP bắt đầu bằng ký hiệu $.
Các kiểu dữ liệu chính trong PHP

`String (chuỗi): "Hello" hoặc 'Hello`

`Integer (số nguyên): 1, -20, 999`

`Float/Double (số thực): 3.14, -0.5`

`Boolean: true / false`

3. Cấu trúc điều khiển
   3.1 Cấu trúc rẽ nhánh (Conditional Statements)
if

`<?php
$age = 18;
if ($age >= 18) {
    echo "Bạn đủ tuổi trưởng thành";
}
?>`

if...else

`<?php
$diem = 7;
if ($diem >= 5) {
    echo "Đậu";
} else {
    echo "Rớt";
}
?>`


switch...case

`<?php
$day = 3;
switch ($day) {
    case 1:
        echo "Thứ Hai";
        break;
    case 2:
        echo "Thứ Ba";
        break;
    case 3:
        echo "Thứ Tư";
        break;
    default:
        echo "Không xác định";
}
?>`

3.2. Cấu trúc lặp (Loops)
for
`<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Số: $i <br>";
}
?>
`
while
`<?php
$i = 1;
while ($i <= 5) {
    echo "Số: $i <br>";
    $i++;
}
?>
`
do...while

`<?php
$i = 1;
do {
    echo "Số: $i <br>";
    $i++;
} while ($i <= 5);
?>`
4. Hàm 
Hàm (function) là một khối lệnh có tên, dùng để thực hiện một nhiệm vụ nhất định.
Cú pháp định nghĩa hàm
`function tenHam($thamso1, $thamso2, ...) {
    // Khối lệnh
    return $giatri; // có thể có hoặc không
}`
`<?php
function xinChao() {
    echo "Xin chào PHP!";
}

xinChao(); // Gọi hàm
?>
`
5. Vai trò của php trong phát triển ứng dụng web
🔹 Vai trò chính của PHP

-Xử lý phía server (Server-side scripting)
-Tạo trang web động (Dynamic website)
-Kết nối và thao tác cơ sở dữ liệu
-Xử lý form và dữ liệu người dùng nhập
-Quản lý session và cookie
-Tích hợp dễ dàng với HTML, CSS, JavaScript
