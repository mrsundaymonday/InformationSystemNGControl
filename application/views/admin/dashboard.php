

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-alert"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>NG / DAY</p>
                                        <?php foreach ($totalmasalah as $key) {
                                            echo $key->totalng;
                                        };?>

                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> press (F5) to update
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-magnet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>MODEL</p>
                                            <?=$totalng;?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> press (F5) to update
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-harddrives"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>POSITION</p>
                                            <?=$totalng;?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> press (F5) to update
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>STATUS</p>
                                            <?=$totaluser;?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> press (F5) to update
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 


                <!-- new row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                             <p style="float: left;">Select Per User</p>
                                                    <select class="form-control" name="selectuser" id="selectuser" onchange="search();">
                                                        <option value=""></option>
                                                        <?php foreach ($user_createmasalahng as $value) {;?>
                                                            <option value="<?=$value->created_by;?>"><?=$value->created_by;?></option>
                                                        <?php };?>
                                                    </select>                                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                <script type="text/javascript">
                        function search(){
                            var param = $('#selectuser').val();
                           // alert('testing: '+data);
                              $.ajax({
                                    url : "<?php echo site_url('masalahng/peruser_ng')?>/" + param,
                                    type: "GET",
                                    dataType: "JSON",
                                    success: function(data)
                                    {
                                       $('#ngresult').html(data.totalng);
                                        $('#namauser').html(param);
                                    },
                                    error: function (jqXHR, textStatus, errorThrown)
                                    {
                                        alert('Error get data from ajax');
                                    }
                                });
                        }   

                </script>
                      <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                  
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                             <p id="namauser" style="float: left;">Total This User</p>
                                             <p id="ngresult"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

             
<?php  
    
 /*   $dataPoints = array(
    array("y" => 1, "label" => "Sunday"),
    array("y" => 4, "label" => "Saturday")
);*/
     $dataPoints = array();  
        foreach($grafik as $row){
            array_push($dataPoints, array("y"=> $row->masalah, "label"=> $row->tanggal));
        }
        //var_dump($dataPoints);
    ?>

 <script>
   window.onload = function () {
 
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "NG Graphic/DAY"
            },
            data: [{
                //type: "column",
                type: "pie", //change type to bar, line, area, pie, etc  
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
         
        }
    </script>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NG Problem graph</h4>
                                <p class="category">Deskripsi</p>
                            </div>
                            <div class="content">
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


<script src="<?php echo base_url();?>assets/offline/canvasjs.min.js"></script>