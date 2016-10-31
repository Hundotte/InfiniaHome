
<!-- Default Ruby on Rails 404 -->
<!DOCTYPE html>
<html>
<head>
    <title>User unconfirmed < InfiniaPress</title>
    <style>
        body {
            background-color: #EFEFEF;
            color: #2E2F30;
            text-align: center;
            font-family: arial, sans-serif;
        }

        div.dialog {
            width: 25em;
            margin: 4em auto 0 auto;
            border: 1px solid #CCC;
            border-right-color: #999;
            border-left-color: #999;
            border-bottom-color: #BBB;
            border-top: #B00100 solid 4px;
            border-top-left-radius: 9px;
            border-top-right-radius: 9px;
            background-color: white;
            padding: 7px 4em 0 4em;
        }

        h1 {
            font-size: 100%;
            color: #730E15;
            line-height: 1.5em;
        }

        body > p {
            width: 33em;
            margin: 0 auto 1em;
            padding: 1em 0;
            background-color: #F7F7F7;
            border: 1px solid #CCC;
            border-right-color: #999;
            border-bottom-color: #999;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-top-color: #DADADA;
            color: #666;
            box-shadow:0 3px 8px rgba(50, 50, 50, 0.17);
        }
    </style>
</head>

<body>

<div class="dialog">
    <h1>Your account is pending confirmation</h1>
    <p>Please check your email to receive the confirmation link</p>
</div>
<p>If you think you are seeing this in mistake, please email
  <a href="mailto:<?php echo $conf['dev-email']; ?>"><?php echo $conf['dev-email']; ?></a>
</p>

</body>
</html>