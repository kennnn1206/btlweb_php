<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style_qtv/style.css"> 
    <link rel="stylesheet" href="../style_qtv/reset.css"> 
    <link rel="stylesheet" href="../style_qtv/styles-article.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <script src="https://kit.fontawesome.com/533aad8d01.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="sidebar">
            <nav class="menu">
                <ul>
                    <li style="border-top: 1px solid rgba(255, 255, 255, 0.1);"><a href="qtv.php"><i class="fas fa-chart-line"></i> Thống kê</a></li>
                    <li><a href="qlbv.php" style="display: flex; align-items: center; gap: 4%;"><i class="fas fa-edit"></i> Bài viết</a></li>
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
                    <div class="profile-card" style="display: none;">
                        <div class="profile-header">
                            <img src="../img/avt.jpg" alt="User Image" class="profile-img">
                            <div class="profile-info">
                                <h2>Nguyễn Tuấn Anh</h2>
                                <p>ntanh@gmail.com</p>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <div class="menu-item account-item">
                                <i class="fa-solid fa-user"></i>
                                <a href="tk.php" class="account">Tài khoản</a>
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
                <div class="article-management-container">
                    <div class="article-title">Bài viết</div>
                    <div class="article-search-bar">
                        <button class="new-article-btn" id="newPost">Bài viết mới</button>
                        <div class="new-article-form-container" id="newArticleContainer" style="display: none;">
                            <div class="article-form-wrapper">
                                <div class="exit-btn">
                                    <a href="qlbv.php"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                                <h1>Thêm bài đăng mới</h1>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="article-form-group">
                                        <label for="post-content">Nội dung bài đăng</label>
                                        <textarea id="post-content" name="content" rows="4" placeholder="Nhập câu trả lời"></textarea>
                                    </div>
                        
                                    <div class="article-form-group">
                                        <label for="post-image">Tải hình ảnh (nếu có)</label>
                                        <input type="file" id="post-image" name="image">
                                    </div>
                        
                                    <div class="article-form-actions">
                                        <button type="submit" class="btn-submit">Đăng</button>
                                        <button type="button" class="btn-cancel">Hủy</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <input type="text" placeholder="Tìm bài viết">
                            <button class="search-button">Tìm bài viết</button>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nội dung</th>
                                <th>Tác giả</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chào tất cả mọi người!</td>
                                <td>admin</td>
                                <td>Đã xuất bản <br> 06/09/2024 lúc 15:30</td>
                                <td>
                                    <button class="edit"><i class="fa-solid fa-pen-to-square"></i>Sửa</button>
                                    <button class="delete"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                                </td>
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

            document.querySelector('.account-item').addEventListener('click', function() {
                window.location.href = 'tk.php';
            });

            const newCourseBtn = document.getElementById('newPost');
            const newCourseContainer = document.getElementById('newArticleContainer');
            // Thêm sự kiện click vào nút "Bài viết mới"
            newCourseBtn.addEventListener('click', function() {
                // Kiểm tra nếu form đang ẩn (display: none), thì hiển thị (display: block)
                if (newCourseContainer.style.display === 'none') {
                    newCourseContainer.style.display = 'inline-block';
                } else {
                    newCourseContainer.style.display = 'none';
                }
            });

            var dropdown = document.getElementsByClassName("btn-info");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("profile-menu");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    } else {
                    dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
</body>
</html>

