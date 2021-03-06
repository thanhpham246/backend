<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ro-RO">
<head profile="http://gmpg.org/xfn/11">
    <title>Traffic Custom Error Pages</title>
    <base href="{{asset('')}}">
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Language" content="ro"/>
    <meta name="robots" content="all,index,follow"/>
    <meta name="keywords" content="mogoolab, templates, 404 error page"/>
    <meta name="description" content="Traffic HTML Error Pages v 1.0 . Developed by MogooLab - www.mogoolab.com"/>
    <meta name="publisher" content="mogoolab.com" />
    <meta name="author" content="mogoolab.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <link href='http://fonts.googleapis.com/css?family=Istok+Web|Chivo|Lekton' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="source/assets/dest/js/impromptu/css.css" />
    <link rel="stylesheet" type="text/css" media="all" href="source/assets/dest/css/style404.css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="source/assets/dest/js/impromptu/jquery-impromptu.js"></script>
    <script type="text/javascript" src="source/assets/dest/js/jquery-global.js"></script>

    <!--[if IE]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>


<div class="wrapper">

    <div class="mainWrapper">

        <div id="logo"><a href="{{route('trang-chu')}}" style="display: block; height: 80px" title="Traffic 404 Custom Error Page">Home</a></div>

        <div class="mainHolder">
            <div class="message">Oooops....we can’t find that page. <a href="{{route('trang-chu')}}" class="alert alert-success">Home</a></div>
            <!-- end .message -->
            <div class="errorNumber">404</div>
            <!-- end .errorNumber -->
            <!-- Search Form -->

            <!-- end .search -->

            <div class="trafficLight">404 Error</div>

        </div>
        <!-- end .mainHolder -->
        <!-- end footer -->
    </div>
    <!-- end .mainWrapper -->

</div>
<!-- end .wrapper -->


</body>
</html>