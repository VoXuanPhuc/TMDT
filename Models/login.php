<?php require_once("model.php");
class login extends model
{
    var $conn;
    function __construct()
    {
        $ob_login = new connection();
        $this->conn = $ob_login->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * FROM `nguoidung` WHERE TaiKhoan = '" . $data['taikhoan'] . "' AND matkhau = '" . $data['matkhau'] . "' AND trangthai = 1";
        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if ($login['MaQuyen'] == 2) {
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
            } else {
                if ($_SESSION['MaQuyen'] == 3) {
                    $_SESSION['isLogin_NhanVien'] = true;
                    $_SESSION['login'] = $login;
                } else {
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                }
            }
            echo '<script> alert("Logged in successfully");window.location.href=".";</script>';
        } else {
            setcookie('msg1', 'Sign in failed', time() + 5);
            header('Location: account');
        }
    }
    function logout()
    {
        if (isset($_SESSION['isLogin_Admin'])) {
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['isLogin_Nhanvien'])) {
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['isLogin'])) {
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: .');
    }
    function check_account()
    {
        $query =  "SELECT * from NguoiDung";

        require("result.php");

        return $data;
    }
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO NguoiDung($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'You have successfully registered', time() + 2);
                } else {
                    setcookie('msg', 'You are registered unsuccessful', time() + 2);
                }
            } else {
                setcookie('msg', 'Do not duplicate passwords', time() + 2);
            }
        } else {
            setcookie('msg', 'Account name or Email already exists', time() + 2);
        }
        session_reset();
        echo '<script> alert("You have successfully registered");window.location.href="account";</script>';
    }
    function account()
    {

        $id = $_SESSION['login']['MaND'];
        return $this->conn->query("SELECT * from NguoiDung where MaND = $id")->fetch_assoc();
    }
    function update_account($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE NguoiDung SET $v WHERE MaND = " . $_SESSION['login']['MaND'];

        $result = $this->conn->query($query);
        session_reset();
        if ($result == true) {

            setcookie('doimk', 'Account update successful', time() + 2);
            session_reset();
            header('Location: personal');
        } else {
            setcookie('doimk', 'Confirmation password is not correct', time() + 2);
            header('Location: personal');
        }
    }
    function my_pruchase($id)
    {
        return $this->conn->query("SELECT * FROM hoadon WHERE MaND = $id LIMIT 1")->fetch_assoc();
    }
    function chitiethoadon($id)
    {
        $query = "select ct.*, s.TenSP as Ten from chitiethoadon as ct, sanpham as s where ct.MaSP = s.MaSP and ct.MaHD = $id ";

        require("result.php");

        return $data;
    }

    function generateCode($length)
    {
        $chars = "vwxyzABCD02789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }

    function insertDataGG($data)
    {
        $email = $data['email'];
        $name = $data['name'];
        $fisrtname = $data['given_name'];
        $lastname = $data['family_name'];
        $gender = $data['gender'];
        $avatar = 'https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg';

        $query = "SELECT * from nguoidung  WHERE Email = '" . $email . "'";

        $info = $this->conn->query($query)->fetch_assoc();

        if (!$info['MaND']) {
            $sql = "INSERT INTO `nguoidung` (`Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`, `Quan`, `Phuong`, `HinhAnh` ) VALUES
            ('$lastname','$fisrtname', '$gender', '', '$email', '', '$name' , 'e10adc3949ba59abbe56e057f20f883e', 1, 1,'', '', '$avatar');
            ";
            $status = $this->conn->query($sql);

            if ($status) {


                $query = "SELECT * FROM `nguoidung` WHERE Email = '" . $email."';";
                $login = $this->conn->query($query)->fetch_assoc();
                if ($login !== NULL) {
                    if ($login['MaQuyen'] == 2) {
                        $_SESSION['isLogin_Admin'] = true;
                        $_SESSION['login'] = $login;
                    } else {
                        if ($_SESSION['MaQuyen'] == 3) {
                            $_SESSION['isLogin_NhanVien'] = true;
                            $_SESSION['login'] = $login;
                        } else {
                            $_SESSION['isLogin'] = true;
                            $_SESSION['login'] = $login;
                        }
                    }
                    header('Location: ../../meta');
                } else {
                    setcookie('msg1', 'Sign in failed', time() + 5);
                    header('Location: account');
                }
            } else {
                setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
                header('Location: ../../meta/account');
            }
        } else {
            $query = "SELECT * from nguoidung  WHERE Email = '" . $email . "'";
            $login = $this->conn->query($query)->fetch_assoc();

            if ($login !== NULL) {
                if ($login['MaQuyen'] == 2) {
                    $_SESSION['isLogin_Admin'] = true;
                    $_SESSION['login'] = $login;
                } else {
                    if ($_SESSION['MaQuyen'] == 3) {
                        $_SESSION['isLogin_NhanVien'] = true;
                        $_SESSION['login'] = $login;
                    } else {
                        $_SESSION['isLogin'] = true;
                        $_SESSION['login'] = $login;
                    }
                }
            }

            header('Location: ../../meta');

            exit();
        }
    }

    function error()
    {
        header('location: ?act=error');
    }
}
