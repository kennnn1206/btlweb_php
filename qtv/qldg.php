<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style_qtv/style.css"> 
    <link rel="stylesheet" href="../style_qtv/reset.css"> 
    <link rel="stylesheet" href="../style_qtv/style-dg.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <script src="https://kit.fontawesome.com/533aad8d01.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="sidebar">
            <nav class="menu">
                <ul>
                    <li style="border-top: 1px solid rgba(255, 255, 255, 0.1);"><a href="qtv.php"><i class="fas fa-chart-line"></i> Thống kê</a></li>
                    <li><a href="#" style="display: flex; align-items: center; gap: 4%;"><i class="fas fa-edit"></i> Bài viết</a></li>
                    <li><a href="qlsv.php" style="display: flex; align-items: center; gap: 6%;"><i class="fas fa-user-graduate"></i> Sinh viên</a></li>
                    <li><a href="qlsv.php"><i class="fas fa-chalkboard-teacher"></i> Giảng viên</a></li>
                    <li><a href="qlkh.php" style="display: flex; align-items: center; gap: 8%;"><i class="fas fa-book"></i> Khóa học</a></li>
                    <li><a href="qldg.php" style="display: flex; align-items: center; gap: 6%;"><i class="fas fa-star"></i> Đánh giá</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <header class="container" style="position: relative;">
                <div class="logo-search">
                    <div class="logo">
                        <img src="../img/logo.png" alt="Fast Learn Logo"> 
                    </div>
                    <div class="search-bar">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="img-info">
                    <div class="img-bar">
                            <img class="mess" src="../img/mess.png" alt="Fast Learn Logo">
                            <button class="btn-mail" ><img class="mail" src="../img/mail.png" alt="Fast Learn Logo"></button>
                            <div class="email-container">
                                <h1>Email</h1>
                                <div class="email-list">
                                    <div class="email-item">
                                        <div class="email-avatar">
                                            <img src="../img/avt.jpg" alt="Avatar">
                                        </div>
                                        <div class="email-details">
                                            <p class="email-title">Cuộc họp về nội dung mới</p>
                                            <p class="email-meta">Quốc Tuấn, 3 phút trước</p>
                                        </div>
                                    </div>
                                    <div class="email-item">
                                        <div class="email-avatar">
                                            <img src="../img/avt.jpg" alt="Avatar">
                                        </div>
                                        <div class="email-details">
                                            <p class="email-title">Cuộc họp về nội dung mới</p>
                                            <p class="email-meta">Quốc Tuấn, 3 ngày trước</p>
                                        </div>
                                    </div>
                                    <div class="email-item">
                                        <div class="email-avatar">
                                            <img src="../img/avt.jpg" alt="Avatar">
                                        </div>
                                        <div class="email-details">
                                            <p class="email-title">Cuộc họp về nội dung mới</p>
                                            <p class="email-meta">Quốc Tuấn, 1 tuần trước</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="view-all">Xem tất cả Email</a>
                            </div>
                            <button class="img-bell"><img class="bell" src="../img/bell.png" alt="Fast Learn Logo"></button>
                            <div class="notification-container">
                                <h1>Thông báo</h1>
                                <hr>
                                <div class="notification">
                                    <div class="icon green">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p class="message">Bạn đã nhận được thông báo qua email</p>
                                        <p class="date">Ngày 02/09/2024</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="notification">
                                    <div class="icon red">
                                        <i class="fa-regular fa-circle-user"></i>
                                    </div>
                                    <div class="content">
                                        <p class="message">Tài khoản đã được đổi mật khẩu</p>
                                        <p class="date">Ngày 28/08/2024</p>
                                    </div>
                                </div>
                                <a href="#" class="view-all">Tất cả thông báo</a>
                            </div>       
                    </div>
                    <button class="btn-info">
                        <div class="user-info">
                            <img class="person" src="../img/person.png" alt="User Avatar">
                            <span>Nguyễn Tuấn Anh</span>
                        </div>
                    </button>
                    <div class="profile-card">
                        <div class="profile-header">
                            <img src="../img/avt.jpg" alt="User Image" class="profile-img">
                            <div class="profile-info">
                                <h2>Nguyễn Tuấn Anh</h2>
                                <p>ntanh@gmail.com</p>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <div class="menu-item">
                                <i class="fa-solid fa-user"></i>
                                <p>Tài khoản</p>
                            </div>
                            <div class="menu-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Cài đặt</p>
                            </div>
                            <div class="menu-item logout">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p>Đăng xuất</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="evaluate-container">
                <p class="evaluate-text" style="text-align: left;
    margin-left: 20px;
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 25px;
    color: #000;">Quản lý đánh giá</p>
                <hr>
                <p class="evaluate-text-ds" style="text-align: left;
    margin-left: 20px;
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 22px;">Danh sách</p>
               
                <div class="table-container">
                    <table >
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Sinh viên</th>
                                <th>Khóa học</th>
                                <th>Đánh giá</th>
                                <th>Tình trạng</th>
                                <th>Ngày thực hiện</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn A</td>
                                <td>Lập trình Web</td>
                                <td>Quá tuyệt vời</td>
                                <td>5 sao</td>
                                <td>25/09/2024</td>
                                <td>Giảng viên dạy rất hay, tài liệu và kiến thức rất đầy đủ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
        <script>
        function getfocus() {
            document.getElementById("notification-container").focus();
            }

        </script>
</body>
</html>

