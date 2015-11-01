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
                    <h1 class="page-header">销售数据</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            最新销售数据
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>时间</th>
                                            <th>店铺序号</th>
                                            <th>店铺名称</th>
                                            <th>商品名称</th>
                                            <th>销售数量</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>2015-11-1 11:03</td>
                                            <td>235212</td>
                                            <td>北京朝阳区大望路京客隆</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">4</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2015-11-1 11:01</td>
                                            <td>2319</td>
                                            <td>北京西城区胜利里3号小卖部</td>
                                            <td class="center">梦龙</td>
                                            <td class="center">1</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>2015-11-1 11:00</td>
                                            <td>102412</td>
                                            <td>北京海淀区海淀大街34号便利店</td>
                                            <td class="center">和路雪</td>
                                            <td class="center">2</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>2015-11-1 10:55</td>
                                            <td>456</td>
                                            <td>北京海淀区黄庄京客隆</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">1</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>2015-11-1 10.53</td>
                                            <td>2775216</td>
                                            <td>北京朝阳区大望路万达广场2号便利店</td>
                                            <td class="center">和路雪</td>
                                            <td class="center">4</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>2015-11-1 10.52</td>
                                            <td>702</td>
                                            <td>北京东城区成府路78号便利店</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">1</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:51</td>
                                            <td>53200</td>
                                            <td>北京通州广发路90号小卖部</td>
                                            <td class="center">梦龙</td>
                                            <td class="center">4</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:50</td>
                                            <td>32347</td>
                                            <td>北京朝阳区大望路京客隆</td>
                                            <td class="center">梦龙</td>
                                            <td class="center">1</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:46</td>
                                            <td>235287</td>
                                            <td>北京海淀区黄庄京客隆</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">1</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:45</td>
                                            <td>11368</td>
                                            <td>北京朝阳区大望路京客隆</td>
                                            <td class="center">和路雪</td>
                                            <td class="center">4</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:43</td>
                                            <td>97533</td>
                                            <td>北京朝阳区大望路万达广场2号便利店</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">2</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:42</td>
                                            <td>2368</td>
                                            <td>北京西城区大力街321号便利店</td>
                                            <td class="center">可爱多</td>
                                            <td class="center">2</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2015-11-1 10:41</td>
                                            <td>9821</td>
                                            <td>北京朝阳区前进里3号便利店</td>
                                            <td class="center">和路雪</td>
                                            <td class="center">7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

</body>

</html>
