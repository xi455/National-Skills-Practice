<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="head.css">
    <link rel="stylesheet" href="content.css">
    <link rel="stylesheet" href="contestant.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="message_root.css">
</head>

<body>

    <?php
    include('./link.php');
    ?>

    <div class="header">
        <div class="head">
            <div class="title">
                <span>
                    <a href="#">玩家留言</a>
                    <a href="#">玩家參賽</a>
                    <a href="#">網站管理</a>
                </span>
            </div>

            <h1>
                Welcome to <br>
                Shanghai Battle !!
            </h1>

            <img src="123.jpg" alt="">
        </div>
    </div>

    <ul class="content">
        <div class="m_box">
            <div class="msg">玩家留言板區塊</div>

            <div class="M_content">
                <div class="M_area">

                    <div class="Messages">
                        <div class="Message_name">玩家A</div>
                        <div class="Message">上線玩過感覺很棒，反饋很好</div>
                        <div class="Message_time">發表於2022/1/1 12:00:00</div>
                        <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                    </div>

                    <div class="Messages">
                        <div class="Message_name">玩家A</div>
                        <div class="Message">上線玩過感覺很棒，反饋很好</div>
                        <div class="Message_time">發表於2022/1/1 12:00:00</div>
                        <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                    </div>

                    <div class="Messages">
                        <div class="Message_name">玩家A</div>
                        <div class="Message">上線玩過感覺很棒，反饋很好</div>
                        <div class="Message_time">發表於2022/1/1 12:00:00</div>
                        <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                    </div>

                </div>

            </div>
        </div>
        <div class="p_box">
            <div class="post">最新消息與賽制公告區塊</div>
        </div>
    </ul>

    <ul class="contestant">
        <form action="#" method="post" class="form_contestant">
            <h1 class="title_contestant">報名資料</h1>

            <div>
                <h3>姓名</h3>
                <input type="text" name="name" placeholder="請輸入姓名">
            </div>

            <div>
                <h3>E-mail</h3>
                <input type="text" name="email" placeholder="請輸入E-mail">
            </div>

            <div>
                <h3>電話</h3>
                <input type="text" name="phone" placeholder="請輸入電話">
            </div>

            <span>
                <h3>上傳頭像</h3>
                <input type="submit" value="參賽">
                <input type="reset" value="重設">
            </span>

        </form>
    </ul>

    <ul class="login">
        <?php
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == '管理員') {
        ?>
                <div class="manage">
                    <div class="Message_manage">留言管理</div>
                    <div class="Contestant_manage">賽制管理</div>
                </div>

                <div class="Manage_content">
                    <div class="Message_area" id="area">

                        <div class="Messages">
                            <div class="Message_name">玩家A</div>
                            <div class="Message">上線玩過感覺很棒，反饋很好</div>
                            <div class="Message_time">發表於2022/1/1 12:00:00</div>
                            <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                        </div>

                        <div class="Message_modify">
                            <input type="button" value="修改">
                            <input type="button" value="刪除">
                        </div>

                        <div class="Messages">
                            <div class="Message_name">玩家A</div>
                            <div class="Message">上線玩過感覺很棒，反饋很好</div>
                            <div class="Message_time">發表於2022/1/1 12:00:00</div>
                            <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                        </div>

                        <div class="Message_modify">
                            <input type="button" value="修改">
                            <input type="button" value="刪除">
                        </div>

                        <div class="Messages">
                            <div class="Message_name">玩家A</div>
                            <div class="Message">上線玩過感覺很棒，反饋很好</div>
                            <div class="Message_time">發表於2022/1/1 12:00:00</div>
                            <div class="Message_E_call">e-mail:aaa@bbb.ccc.com 電話:0988-233-333</div>
                        </div>

                        <div class="Message_modify">
                            <input type="button" value="修改">
                            <input type="button" value="刪除">
                        </div>

                    </div>

                    <div class="Contestant_area" id="area">賽制區</div>
                </div>

            <?php
            }
        } else {
            ?>
            <form action="./loginprocess.php" method="post" class="form_login">
                <h1 class="title_login">網站管理--登入</h1>

                <div>
                    <h3>帳號</h3>
                    <input type="text" name="user" placeholder="請輸入帳號">
                </div>

                <div>
                    <h3>密碼</h3>
                    <input type="text" name="password" placeholder="請輸入密碼">
                </div>

                <div>
                    <h3>驗證碼</h3>
                    <input type="text" name="captcha" placeholder="請輸入驗證碼">
                    <input type="button" class="but" onclick="again()" value="刷新">
                </div>

                <h4 class="captcha"></h4>
                <input type="hidden" name="captcha_ans" class="capt_ans">

                <span>
                    <input type="submit" value="登入">
                    <input type="reset" value="重設">
                </span>
            </form>
        <?php
        }

        ?>
    </ul>

    <script>
        const a_title = document.querySelectorAll('a')
        const ul_title = document.querySelectorAll('ul')
        const capt = document.querySelector('.captcha')
        const capt_ans = document.querySelector('.capt_ans')
        const manage = document.querySelectorAll('.manage>div')
        const manage_area = document.querySelectorAll('#area')


        document.body.addEventListener('keydown', function(e) {
            if (e.keyCode == '27') {
                logout_boo = confirm('是否登出')
                if (logout_boo) {
                    location.href = 'logout.php'
                }
            }
        })

        for (let i = 0; i <= a_title.length - 1; i++) {
            ul_title[i].style.display = 'none'
            a_title[i].style.color = 'white'

            a_title[i].addEventListener('click', function() {
                for (let j = 0; j < a_title.length; j++) {
                    ul_title[j].style.display = 'none'
                    a_title[j].style.color = 'white'
                }
                ul_title[i].style.display = 'flex'
                a_title[i].style.color = 'green'
            })
        };

        a_title[2].click()



        for (let i = 0; i <= manage.length - 1; i++) {
            manage_area[i].style.display = 'none'
            manage[i].style.background = 'none'

            console.log(manage_area[i])

            manage[i].addEventListener('click', function() {
                for (let j = 0; j < manage.length; j++) {
                    manage_area[j].style.display = 'none'
                    manage[j].style.background = 'none'
                }
                manage_area[i].style.display = 'block'
                manage[i].style.background = 'green'
            })
        };

        <?php
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == '管理員') {
        ?>
                manage[0].click()
            <?php
            }
        } else {
            ?>
            again()
        <?php
        }
        ?>


        function again() {
            const code_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

            capt.innerHTML = ''
            const again_list = []

            for (let i = 0; i <= 3; i++) {
                let cont = code_array[parseInt(Math.random() * code_array.length)]
                again_list.push(cont)

                let image = document.createElement('img')
                image.src = './captcha.php?img=' + cont

                capt.append(image)
            }

            capt_ans.setAttribute('value', again_list.join(''))

        }
    </script>
</body>

</html>