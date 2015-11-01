<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QuantView</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<style>
.store-data {
    font-weight: bold;
}
.real-time-photo {

}
.real-time-photo img {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}
#data-contents {
    padding-left: 20px;
}
.item-detail {
    margin-right: 30px;
    font-size: 20px;
    color: #9A9A9A;
}
</style>


    <div id="wrapper">

    <?php include("../include/nav.html"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">冰箱监控：广安街43号便民超市</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="medium">
                        冰箱状态：
                        <span id="data-status" class="store-data">未知</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="medium">
                        温度：
                        <span id="data-temp" class="store-data">未知</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="medium">
                        容量：
                        <span id="data-slots" class="store-data">未知</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="medium">
                        占有量：
                        <span id="data-occupied" class="store-data">未知</span>
                    </div>                    
                </div>                 
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="medium">
                        存货内容：
                    </div>
                    <div id="data-contents"></div> 
                </div>
            </div>
            <div class="real-time-photo">
                <img id="data-photo" />
            </div>   
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>
        function updateStoreData(data) {
            // console.log(data);
            if (data.total) {
                $('#data-slots').text(data.total);
                $('#data-occupied').text(data.used);
                $('#data-temp').text(data.temp);
                if (data.online) {
                    $('#data-status').text('在线');
                    $('#data-status').removeClass( "online offline" ).addClass( "online" );
                }
                else {
                    $('#data-status').text('离线');
                    $('#data-status').removeClass( "online offline" ).addClass( "offline" );                    
                }
                if (data.url) {
                    $('#data-photo').attr('src', data.url);
                }
                if (data.data) {
                    $('#data-contents').empty();
                    var item = data.data;
                    for (var k in item) {
                        $('#data-contents').append( "<span class='item-detail'><strong>" + k + "</strong>: " + item[k] + "</span>" );
                    }
                }
            }
        }

    $( document ).ready(function() {


        (function worker() {
          $.ajax({
            url: 'http://112.126.76.163:8082',  
            success: function(result) {
              updateStoreData(result);
              // console.log(data);
            },
            complete: function() {
              setTimeout(worker, 5000);
            }
          });
        })();

    });


    </script>
</body>

</html>
