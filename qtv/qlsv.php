<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style_qtv/style.css"> 
    <link rel="stylesheet" href="../style_qtv/reset.css">
    <link rel="stylesheet" href="../style_qtv/style-qlsv.css"> 
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
                <div class="over-container">
                    <div class="form-container">
                        <h1>Thông tin sinh viên</h1>
                        <form>
                            <div class="form-group">
                                <label for="name">Họ và Tên:</label>
                                <input type="text" id="name" name="name">
                            </div>
                
                            <div class="form-group">
                                <label for="email">Địa chỉ Email:</label>
                                <input type="email" id="email" name="email">
                            </div>
                
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                
                            <div class="form-group">
                                <label for="address">Quê quán:</label>
                                <input type="text" id="address" name="address">
                            </div>
                
                            <div class="form-group">
                                <label>Giới tính:</label>
                                <div class="gender">
                                    <input type="radio" id="male" name="gender" value="Nam">
                                    <label for="male">Nam</label>
                                    <input type="radio" id="female" name="gender" value="Nữ">
                                    <label for="female">Nữ</label>
                                </div>
                            </div>
                            <div class="btn-new">
                                <button type="submit" class="submit-btn">Thêm mới</button>
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </div>
                        </form>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" class="input-field" placeholder="Tìm kiếm theo tên, email & số điện thoại">
                
                        <select class="dropdown">
                            <option value="">Lọc theo giới tính</option>
                            <option value="nam">Nam</option>
                            <option value="nu">Nữ</option>
                        </select>
                
                        <div class="btn-group">
                            <button class="btn">Tìm kiếm<i class="fas fa-search"></i></button>
                            <button class="btn">Tải xuống<i class="fa-solid fa-download"></i></button>
                        </div>
                
                        <div class="toggle-section">
                            <label>Gửi thông báo sau khi thêm mới
                                <div class="toggle" onclick="toggleSwitch(this)"></div>
                            </label>
                            <label>Gửi thông báo sau khi cập nhật
                                <div class="toggle" onclick="toggleSwitch(this)"></div>
                            </label>
                            <label>Gửi thông báo sau khi xóa bỏ
                                <div class="toggle" onclick="toggleSwitch(this)"></div>
                            </label>
                            <label>Chạy đoạn giới thiệu mở đầu
                                <div class="toggle" onclick="toggleSwitch(this)"></div>
                            </label>
                        </div>
                    </div>
                
                </div>
                <div class="course-list">
                    <div class="course-list-title">
                        <h1>Danh sách sinh viên</h1>
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
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Quê quán</th>
                                    <th>Giới tính</th>
                                    <th>Tài khoản</th>
                                    <th>Mật khẩu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>a2004@gmail.com</td>
                                    <td>0382752959</td>
                                    <td>Hà Nội</td>
                                    <td>Nam</td>
                                    <td>VanA_123</td>
                                    <td>A@123456</td>
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

