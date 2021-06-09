<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="NoyAcg,NoyTeam,同人本,本子,R18漫畫">
    <meta name="description" content="NoyAcg是一個公益免費的本子平台，現已開放測試!">
    <link rel="preconnect" href="//fonts.gstatic.com">
    <link rel="preconnect" href="//cdn.jsdelivr.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noyteam/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noyteam/css/site-main.css">
    <link href="https://cdn.jsdelivr.net/npm/noyteam/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo.webp" />
    <style type="text/css" media="screen">
        .line_m{text-decoration:line-through}
        img{max-width:100%;}
        @media screen and (min-width: 575px) {
            .modal-dialog-faq{
                max-width: 80%;
            }
            .modal-dialog-download{
                max-width: 60%;
            }
        }
    </style>
    <title>NoyAcg</title>
</head>

<body style="font-family: 'Noto Sans TC', sans-serif;">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="assets/images/noy.png" style="height: 36px;" id="logo" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#hero">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="//t.me/NoyAcg">TG群組</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roger">了解一下？</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">公告板</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">下載</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <section id="hero">
        <div class="container">
            <div class="heading-wrapper">
                <h1>你好，歡迎來到NoyAcg！</h1>
                <p>NoyAcg是一個專屬於紳士們的站點(/≧▽≦)/</p>
                <a href="#faq" class="secondary-btn">公告板</a>
                <a href="#footer" class="primary-btn">點我下載</a>
            </div>
        </div>
    </section>


   <section id="roger">
        <div class="container">
            <div class="heading-wrapper">
                <h2>了解一下？</h2>
                <p>目前NoyTeam仍在創建初期，歡迎加入我們！<br></p>
            </div>
            <div id="accordion" class="topmargin-lg">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="icon ion-md-add-circle"></i> 關於我們
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            NoyAcg是一個公益免費的本子平台，我們希望能更方便的分享/閱讀自己喜歡的本子
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <i class="icon ion-md-add-circle"></i> 使用中遇到了問題？
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            可以透過多種方式聯繫我們反饋問題:
                            <ul>
                                <li>Email: <a href="mailto:woodpackeraisser@protonmail.com">woodpackeraisser@protonmail.com</a></li>
                                <li>Telegram: <a href="https://t.me/noyacg" target="_blank">@noyacg</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <i class="icon ion-md-add-circle"></i> 我想申請上載本子！
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            面向用戶的上載交互頁面仍在開發中，請耐心等待！
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="faq">
        <div class="container">
            <div class="heading-wrapper">
                <h2>公告板</h2>
                <p>About NoyAcg</p>
            </div>
            <div class="row topmargin-lg">
                <?php
                    $config = fread(fopen("config.json","r"),filesize("config.json"));
    
                    $provinces = json_decode($config, true);
                    foreach($provinces as $province){
                        $image = $province['image'];
                        $title = $province['title'];
                        $info = $province['info'];
                        $page = $province['page'];

                        echo <<<EOT
                        <div class="col-md-4">
                            <div class="blog-post">
                                <a href="#" data-toggle="modal" data-target="#faq$page" data-target=".bs-example-modal-sm">
                                    <img src="$image" class="img-fluid">
                                </a>
                                <div class="blog-post-info">
                                    <h5>$title</h5>
                                    <p>$info</p>
                                    <a href="#" data-toggle="modal" data-target="#faq$page" data-target=".bs-example-modal-sm">OPEN</a>
                                </div>
                            </div>
                        </div>
EOT;
                    }
                ?>
            </div>
        </div>
    </section>


    <?php
        $config = fread(fopen("config.json","r"),filesize("config.json"));

        $provinces = json_decode($config, true);
        foreach($provinces as $province){
            $page = $province['page'];
            $pageinfo = fread(fopen("page/".$page.".html","r"),filesize("page/".$page.".html"));
            echo <<<EOT
            <div class="modal fade show" id="faq$page" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-faq">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </div>
                        <div class="modal-body">
                            $pageinfo
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        </div>
                    </div>
                </div>
            </div>
EOT;
        }
    ?>

    <div class="modal fade show" id="download" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-download">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body" id="download-info">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                    <a id="download-url" href="" target="_blank"><button id="download-button" type="button" class="btn btn-default" data-dismiss="modal"></button></a>
                </div>
            </div>
        </div>
    </div>

    <section id="footer">
        <div class="container">
            <div class="heading-wrapper">
                <h3>下載測試版APP</h3>
				<p>歡迎反饋！</p>
                <a href="#" data-toggle="modal" data-target="#download" onclick="dl('Android')" data-target=".bs-example-modal-sm" class="primary-btn">Android</a>
                <a href="#" data-toggle="modal" data-target="#download" onclick="dl('iOS')" data-target=".bs-example-modal-sm" class="primary-btn">iOS (内部測試中)</a>
                <a href="#" data-toggle="modal" data-target="#download" onclick="dl('WebSite')" data-target=".bs-example-modal-sm" class="primary-btn">WebSite (開發中)</a>
            </div>
            <div class="row topmargin-lg">
                <div class="col-md-4">
                    <small id="timeinfo"></small>
                </div>
                <div class="col-md-4">
                    <a href="#"><i class="icon ion-logo-twitter"></i></a>
                    <a href="https://github.com/noyteam"><i class="icon ion-logo-github"></i></a>

                </div>
                <div class="col-md-4">
                    <small>Powered by <a href="//noy.asia/" target="_blank">NoyTeam</a></small>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/noyteam/js/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/noyteam/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/noyteam/js/bootstrap.min.js"></script>
    <script>
        var android_url
        window.onload = function(){
            android_url = JSON.parse(get("https://api.noy.asia/update"))['url'];
        }
        function get(url){
            var jsonInfo
            var xhr=new XMLHttpRequest();
            xhr.open('GET',url,false);
            xhr.onreadystatechange=function(){
                if(xhr.readyState==4){
                    if(xhr.status==200 || xhr.status==304){
                        jsonInfo = xhr.responseText;
                    }
                }
            }
            xhr.send();
            return jsonInfo;
        }
        function dl(system){
            if (system == "Android"){
                document.getElementById("download-url").href = android_url;
                document.getElementById('download-button').innerHTML = "前往下載";
                document.getElementById("download-info").innerHTML = `<h5>下載前須知</h5>
                <ul>
                    <li>我們使用邀請制，請找到你身邊使用NoyAcg的朋友索要邀請碼</li>
                    <li>當然也可以加群索要公用邀請碼/群友的邀請碼</li>
                    <li>NoyAcg 仍在測試，現階段可能存在很多BUG和沒有實現的功能</li>
                </ul>`;
            }else if (system == "iOS"){
                document.getElementById("download-url").href = "#";
                document.getElementById('download-button').innerHTML = "完成";
                document.getElementById("download-info").innerHTML = `<h5>内部測試中</h5>
                <ul>
                    <li>因爲部分BUG，以及證書和分發問題，暫未開放</li>
                </ul>`;
            }else if (system == "WebSite"){
                document.getElementById("download-url").href = "http://noy-webapp.vercel.app/";
                document.getElementById('download-button').innerHTML = "搶先測試";
                document.getElementById("download-info").innerHTML = `<h5>開發中</h5>
                <ul>
                    <li>目前僅有半成品，僅供測試</li>
                </ul>`;
            }
        }
    </script>
	<script>
		document.getElementById("timeinfo").innerHTML="© NoyTeam 2019-"+new Date().getFullYear()
	</script>
</body>
</html>