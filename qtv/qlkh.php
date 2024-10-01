<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style_qtv/style.css"> 
    <link rel="stylesheet" href="../style_qtv/reset.css">
    <link rel="stylesheet" href="../style_qtv/style-qlkh.css"> 
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
                    <li><a href="qlgv.php"><i class="fas fa-chalkboard-teacher"></i> Giảng viên</a></li>
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
                        <input style=" width: 300px; padding: 10px; border: 1px solid #ddd; border-radius: 5px 0 0 5px; outline: none; " type="text" placeholder="Tìm kiếm...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="img-info">
                    <div class="img-bar">
                            <img src="../img/mess.png" alt="Fast Learn Logo">
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
            <div class="overview">
                <h1>Khóa học</h1>
                <button class="new-course-btn">+ Khóa học mới</button>
                <!-- <div class="new-course-container">
                    <div class="formtk-container">
                        <div style="margin-bottom: 20px;">
                            <i class="exit fa-solid fa-xmark"></i>
                        </div>
                        <h2>Thêm khóa học</h2>
                        <form>
                            <label for="course-name">Tên khóa học</label>
                            <input type="text" id="course-name" name="course-name" placeholder="Nhập tên khóa học">

                            <label for="course-description">Mô tả khóa học</label>
                            <input type="text" id="course-description" name="course-description" placeholder="Nhập mô tả khóa học">

                            <label for="category">Ngành</label>
                            <input type="text" id="category" name="category" placeholder="Nhập ngành">

                            <label for="lecturer">Giảng viên</label>
                            <input type="text" id="lecturer" name="lecturer" placeholder="Nhập tên giảng viên">

                            <label for="price">Giá</label>
                            <input type="text" id="price" name="price" placeholder="Nhập giá khóa học">

                            <label for="image">Hình ảnh</label>
                            <input type="file" id="image" name="image">

                            <button type="submit">Thêm</button>
                        </form>
                    </div>
                </div> -->
                <hr>
                <div class="course-list">
                    <div class="course-list-title">
                        <h1>Danh sách khóa học</h1>
                        <div>
                               
                            <button class="edit-btn">
                                <div class="btn-icon">
                                    <i class="fa-regular fa-pen-to-square"></i>Sửa
                                </div>
                            </button>
                            <button class="edit-btn">
                                <div class="btn-icon">
                                    <i class="fa-solid fa-delete-left"></i>Xóa
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="table-container">
                        <table >
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Ngành</th>
                                    <th>Giảng viên</th>
                                    <th>Giá</th>
                                    <th>Lướt mua</th>
                                    <th>Tiêu chí</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>HTML/CSS</td>
                                    <td>Hướng dẫn bạn tạo giao diện trang web đẹp</td>
                                    <td>CNTT</td>
                                    <td>Trần Thị Thu Phương</td>
                                    <td>100</td>
                                    <td>950.000 vnd</td>
                                    <td>5</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <script>
            function toggleSwitch(element) {
                element.classList.toggle('active');
            }
        </script>
</body>
</html>

