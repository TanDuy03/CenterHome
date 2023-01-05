    <div id="menuIns">
        <ul>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        </ul>
    </div>
    <style>
        #menuIns{
            position: fixed;
            top:50%;
            left:50%;
            width:200px;
            display: none;
            z-index: 999999;
        }
        #menuIns ul{
            padding:0;
            margin: 0;
            list-style: none;
        }
        #menuIns li i{
            margin-right: 15px;
            margin-left: 10px;
        }
        #menuIns li{
            padding:10px;
            background-color: #016f86;
            border-bottom: 1px solid #ffffff;
            color:#fff;
            transition: 0.5s;
            opacity: 0;
            animation: showmenu 0.5s ease-in-out 1 forwards;
        }
        #menuIns li a{
            color:#ffffff;
        }
        #menuIns li:nth-child(2){
            animation-delay: 0.2s;
        }
        #menuIns li:nth-child(3){
            animation-delay: 0.4s;
        }
        #menuIns li:nth-child(4){
            animation-delay: 0.6s;
        }
        #menuIns li:nth-child(5){
            animation-delay: 0.8s;
        }
        #menuIns li:hover{
            background-color: #525F6C;
            transform: translate(0,-10px);
        }
        #menuIns li a:hover{
            text-decoration: none;
        }
        @keyframes showmenu{
            from{
                opacity: 0;
                transform: translate(0,20px);
            }to{
                opacity: 1;
                transform: translate(0,0);
            }
        }
    </style>
    <script>
        let menu = document.getElementById('menuIns');
        document.addEventListener('contextmenu', function(event){
            menu.style.display = 'block';
            menu.style.top = event.y + 'px';
            menu.style.left = event.x + 'px';
            event.preventDefault();
        })
        document.addEventListener('click', function(event){
            menu.style.display = 'none';
        })
    </script>