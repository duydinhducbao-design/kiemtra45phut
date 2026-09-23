<?php
$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "quanlyhocsinh";
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Ket noi database that bai: " . mysqli_connect_error());
}
function hienThiDanhSach($conn) {
    echo "===== DANH SACH HOC SINH =====\n";
    $sql = "SELECT id, name, age, grade FROM hocsinh";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        while ($hocSinh = mysqli_fetch_assoc($result)) {
            echo "ID: "   . $hocSinh["id"]    . " | ";
            echo "Ten: "  . $hocSinh["name"]  . " | ";
            echo "Tuoi: " . $hocSinh["age"]   . " | ";
            echo "Diem: " . $hocSinh["grade"] . "\n";
        }
    } else {
        echo "Khong co hoc sinh nao trong database.\n";
    }
    echo "===============================\n";
}
function timHocSinhDiemCaoNhat($conn) {
    $sql = "SELECT id, name, age, grade FROM hocsinh ORDER BY grade DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}
hienThiDanhSach($conn);
$hocSinhGioiNhat = timHocSinhDiemCaoNhat($conn);
echo "\n>> Hoc sinh co diem cao nhat la:\n";
echo "ID: "   . $hocSinhGioiNhat["id"]    . "\n";
echo "Ten: "  . $hocSinhGioiNhat["name"]  . "\n";
echo "Tuoi: " . $hocSinhGioiNhat["age"]   . "\n";
echo "Diem: " . $hocSinhGioiNhat["grade"] . "\n";
mysqli_close($conn);
 
?>
 