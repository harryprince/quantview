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

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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

    <div id="wrapper">

    <?php include("../include/nav.html"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">冰柜数据</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="tree"></div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


<script src="../bower_components/bootstrap-treeview/dist/bootstrap-treeview.min.js"></script>

<script>
    var nodeColor = "#0D297A";
    var subData =[
              {
                text: "胜利路东街京客隆超市",
                color: nodeColor,
                href: "refrigerator_details.php"
              },
              {
                text: "平安里小区小卖部",
                color: nodeColor,
                href: "refrigerator_details.php"
              },
              {
                text: "第二中学小卖部",
                color: nodeColor,
                href: "refrigerator_details.php"
              },
              {
                text: "广安街43号便民超市",
                color: nodeColor,
                href: "refrigerator_details.php"
              }                            
            ];
    var data = [
      {
        text: "北京",
        nodes: [
          {
            text: "朝阳区",
            nodes: subData
          },
          {
            text: "东城区",
            nodes: subData
          },
          {
            text: "西城区",
            nodes: subData
          },
          {
            text: "海淀区",
            nodes: subData
          },
          {
            text: "丰台区",
            nodes: subData
          },
          {
            text: "石景山区",
            nodes: subData
          }                                        
        ]
      },
      {
        text: "上海"
      },
      {
        text: "天津"
      },
      {
        text: "广州"
      },
      {
        text: "四川"
      }
    ];
    function getTree() {
      // Some logic to retrieve, or generate tree structure
      return data;
    }

    $( document ).ready(function() {
        $('#tree').treeview({
            data: getTree(),
            enableLinks: true
        });
    });



</script>

</body>

</html>
