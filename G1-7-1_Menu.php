<?php include_once 'GameHeader.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.3/jquery.mmenu.all.css">
<style>
    html, body
    {
        padding: 0;
        margin: 0;
    }
    body
    {
        background-color: #fff;
        font-family: Arial, Helvetica, Verdana;
        font-size: 14px;
        line-height: 22px;
        color: #666;
        position: relative;
        -webkit-text-size-adjust: none;
    }
    body *
    {
        text-shadow: none;
    }
    h1, h2, h3, h4, h5, h6
    {
        line-height: 1;
        font-weight: bold;
        margin: 20px 0 10px 0;
    }
    h1, h2, h3
    {
        font-size: 18px;
    }
    h4, h5, h6
    {
        font-size: 16px;
    }
    p
    {
        margin: 0 0 10px 0;
    }
    a, a:link, a:active, a:visited, a:hover
    {
        color: inherit;
        text-decoration: underline;
    }

    nav:not(.mm-menu)
    {
        display: none;
    }

    .header,
    .content,
    .footer
    {
        text-align: center;
    }
    .header,
    .footer
    {
        background: #4E8393;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        line-height: 40px;


        -moz-box-sizing: border-box;
        box-sizing: border-box;	
        width: 100%;
        height: 40px;
        padding: 0 50px;
    }
    .header.fixed
    {
        position: fixed;
        top: 0;
        left: 0;
    }
    .footer.fixed
    {
        position: fixed;
        bottom: 0;
        left: 0;
    }
    .header a
    {
        background: center center no-repeat transparent;
        background-image: url( data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADhJREFUeNpi/P//PwOtARMDHQBdLGFBYtMq3BiHT3DRPU4YR4NrNAmPJuHRJDyahEeT8Ii3BCDAAF0WBj5Er5idAAAAAElFTkSuQmCC );

        display: block;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        left: 10px;
    }
    .content
    {
        padding: 150px 50px 50px 50px;
    }
</style>

<div class="page">
<div class="header">
	<a href="#menu" data-icon="grid"></a>
        <nav id="menu">
                <ul>
                    <li><a href="#"> A</a></li>
                    <li><a href="#about"> B</a>
                        <ul>
                            <li><a href="#about/history"> B-1</a></li>
                            <li><a href="#about/team"> B-2</a>
                                <ul>
                                    <li><a href="#about/team/management"> B-2-1</a></li>
                                    <li><a href="#about/team/sales"> B-2-2</a></li>
                                    <li><a href="#about/team/development"> B-2-3</a></li>
                                </ul>
                            </li>
                            <li><a href="#about/address"> B-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">C</a></li>
                </ul>
        </nav>
</div>
</div>




<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<img src="img/ACT/ACT_s01.jpg" alt="" srcset="">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.5/jquery.mmenu.all.js"></script>
<script>
    $(function() {
		$('nav#menu').mmenu();
	});
</script>


<?php include_once 'GameFooter.php'; ?>
