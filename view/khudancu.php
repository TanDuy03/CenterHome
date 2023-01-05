<?php $page_at = ' ';$page_name = 'Khu dân cư CenterHome RiverSide'; include("header.php"); ?>
<article style="background-color: #ffffff; height:200px;"></article>
    <!--  -->
    <div class="wrapper_dancu">
        <div class="dancu_header">
            <ul>
                <li class=""><a href="">Trang chủ&nbsp; / Dự án /&nbsp;</a></li> 
                <li class=""><a href="" style="color: #777777;"> Khu dân cư cao cấp Centerhome Riverside</a></li>
            </ul>
        </div>
        <div class="main__dancu">
            <div class="parent-title">
                <span>Khu dân cư cao cấp CenterHome River</span>
            </div>
            <div class="image-kdc">
                
            </div>
            <div class="menu__dancu" id="nav_duan">
                <div class="menu-item">
                    <li><a href="#tquan" class="active_duan">TỔNG QUAN KDC</a></li>
                </div>

                <div class="menu-item">
                    <li><a href="#mbang">MẶT BẰNG TỔNG THỂ</a></li>
                </div>

                <div class="menu-item">
                    <li><a href="#vitri">VỊ TRÍ KDC</a></li>
                </div>

                <div class="menu-item">
                    <li><a href="#tienich">TIỆN ÍCH KDC</a></li>
                </div>

                <div class="menu-item">
                    <li><a href="#thuvien">THƯ VIỆN</a></li>
                </div>

                <div class="menu-item">
                    <li><a href="#csach">CHÍNH SÁCH ƯU ĐÃI</a></li>
                </div>             
                               
            </div>
            <script>
                let section = document.querySelectorAll("section_duan");
                let menu = document.querySelectorAll("menu-item li a");
                window.onscroll = () => {
                section.forEach((i) => {
                    let top = window.scrollY;
                    let offset = i.offsetTop - 150;
                    let height = i.offsetHeight;
                    let id = i.getAttribute("id");

                    if (top >= offset && top < offset + height) {
                    menu.forEach((link) => {
                        link.classList.remove("active");
                        document
                        .querySelector("menu-item li a[href*=" + id + "]")
                        .classList.add("active");
                    });
                    }
                });
                };

                function reveal() {
                var reveals = document.querySelectorAll(".reveal");

                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add("active");
                    } else {
                        reveals[i].classList.remove("active");
                    }
                }
                }

                window.addEventListener("scroll", reveal);
                reveal();

            </script>
        </div>
    </div>
    <div id="tquan" class="section_duan">
        <div class="container reveal">
            <span>TỔNG QUAN KDC</span>
            <div class="section_info">
                <p class="content_info">Khu dân cư cao cấp Centerhome Riverside sở hữu vị trí vàng, tọa lạc tại đường số 11, 
                    P. Trường Thọ, Quận Thủ Đức, TP. Hồ Chí Minh, nằm trong quy hoạch khu đô thị sáng 
                    tạo phía Đông thành phố và Trung tâm khu đô thị Tp. Thủ Đức. Dự án sở hữu 3 mặt giáp 
                    sông Sài Gòn tựa như ốc đảo xanh, giữa lòng thành phố. Xây dựng tự do là một lợi thế 
                    của KDC. Tuy nhiên với thiết kế có sẵn của Đơn vị phát triển và xây dựng theo phong 
                    cách phương Tây, Centerhome Riverside mang đến một không gian sống xanh, trong lành 
                    và tiện nghi đẳng cấp… xứng đáng là kiệt tác nghệ thuật kiến trúc, kiến tạo cuộc sống 
                    phồn vinh, hưng thịnh.
                </p>
            </div>
            <div class="image__section">
                <img src="image/centerhomeriver.jpg" alt="" class="">
            </div>
        </div>
    </div>

    <div id="mbang" class="section_duan">
        <div class="container reveal">
            <span>MẶT BẰNG TỔNG THỂ</span>
            <div class="section_info">
            </div>
            <div class="image__section">
                <img src="image/mb.jpg" alt="" class="">
            </div>
        </div>
    </div>

    <div id="vitri" class="section_duan">
        <div class="container reveal">
            <span>VỊ TRÍ KDC</span>
            <div class="section_info">
            </div>
            <div class="image__section">
                <img src="image/bando.jpg" alt="" class="">
            </div>
        </div>
    </div>

    <div id="tienich" class="section_duan">
        <div class="container reveal">
            <span>TIỆN ÍCH KDC</span>
            <div class="section_info">
            </div>
            <div class="image__section">
                <img src="image/tien ich du an-01.jpg" alt="" class="">
            </div>
        </div>
    </div>

    <div id="thuvien" class="section_duan">
        <div class="container reveal">
            <span>THƯ VIỆN</span>
            <div class="section_info_grid">
                <div class="img_item_info">
                    <img src="image/kdc1.jpg" alt="" class="zomeimg">
                </div>
                <div class="img_item_info">
                    <img src="image/kdc2.jpg" alt="" class="zomeimg">
                </div>
                <div class="img_item_info">
                    <img src="image/kdc3.jpg" alt="" class="zomeimg">
                </div>
                <div class="img_item_info">
                    <img src="image/kdc4.jpg" alt="" class="zomeimg">
                </div>
                <div class="img_item_info">
                    <img src="image/kdc5.jpg" alt="" class="zomeimg">
                </div>
                <div class="img_item_info">
                    <img src="image/kdc6.jpeg" alt="" class="zomeimg">
                </div>
            </div>
        </div>
    </div>

    <div id="csach" class="section_duan">
        <div class="container reveal">
            <span>CHÍNH SÁCH ƯU ĐÃI</span>
            <div class="section_info">
            </div>
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="" placeholder="Họ tên">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="" placeholder="Điện thoại">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="" placeholder="Địa chỉ liên hệ">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nội dung"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi thông tin</button>
            </form>
        </div>
    </div>
    <div class="scrollToTop">
        <button type="" id="btnScroll" onclick="noneTop()">
            <i class="fa-solid fa-chevron-up"></i>
        </button>
        <script>
            let btnScrollTop = document.getElementById("btnScroll");
            window.onscroll = function() {scrollTop()};

            function scrollTop() {
                
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    btnScrollTop.style.display = "block";
                } else {
                    btnScrollTop.style.display = "none";
                }

            }

            function noneTop() {

                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

            }

        </script>
    </div>
    