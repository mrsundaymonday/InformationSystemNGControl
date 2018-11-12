<link rel="stylesheet" href="<?php echo base_url();?>assets/offline/jquery-ui.css">
<link href="<?php echo base_url();?>assets/offline/jquery.dataTables.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/offline/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/offline/jquery-ui.js"></script>         


<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>     

     Bootstrap CSS 
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"></h4>

                            <!-- <button style="float: right !important;" type="button" class="btn btn-primary btn-md" data-toggle="modal" onclick="add_gmc()">ADD MODEL</button> -->
                            <!-- Trigger the modal with a button -->
<!-- <button style="float: right; margin-right: 10px;" class="btn btn-primary btn-md" data-toggle="modal" onclick="add_gmc();">Add Model</button>
    <button style="float: right; margin-right: 10px;" class="btn btn-danger btn-md" data-toggle="modal" onclick="add_gmc();">Delete</button> -->

    <button class="btn btn-success" onclick="add_masalahng()"><i class="ti-plus"></i> Add Masalah NG</button>
    <button class="btn btn-default" onclick="reload_table()"><i class="ti-refresh"></i> Reload</button>
    <button class="btn btn-danger" onclick="bulk_delete()"><i class="ti-trash"></i> Bulk Delete</button>
    <br />

</div>
<div class="content table-responsive table-full-width">
   <!--    <input type="checkbox" name="checkbox" id="mycheckbox" style="margin-left: 10px;"> Select All -->

   <table class="table table-hover" id="table">

    <thead>
        <th><input type="checkbox" id="check-all"></th>
        <th>Kode laporan</th>
        <th>Part Number</th>
        <th>Model</th>
        <th>Nama</th>
        <th>Posisi</th>
        <th>Qty</th>
    <!--    <th>Output</th>
        <th>Area Detected</th>
        <th>Root Cause</th>
        <th>Problem</th>
        <th>status</th>
        <th>Date</th>
        <th>By</th>  -->
        <th>Action</th>
    </thead>

    <tbody>

    </tbody>

</table>

</div>
</div>
</div>
</div><!-- end row -->


<!-- Modal -->
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">gmc Form</h3>
            </div> -->
            <div class="modal-body form">
                <!-- <form action="#" id="form" class="form-horizontal"> -->                    
                  <?php echo form_open_multipart('#', array('id' =>'form','class'=>'form-horizontal'));?>
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                       <div class="row">
                        <div class="col-lg-6">
                            <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="item_part">Part Number</label>
                            <input type="text" name="item_part" id="item_part" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nama_model">Model</label>
                            <input type="text" name="nama_model" id="nama_model" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nama_ng">Name NG</label>
                            <select id="nama_ng" name="nama_ng" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="SCRATCH">SCRATCH</option>
                                <option value="DENTED">DENTED</option>
                                <option value="BUBBLE">BUBBLE</option>
                                <option value="TORN">TORN</option>
                                <option value="AIRLEAK">AIRLEAK</option>
                                <option value="NO PART">NO PART</option>
                                <option value="OTHER">OTHER</option>
                            </select>                                
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="posisi_ng">Posisi NG</label>
                            <select id="posisi_ng" name="posisi_ng" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="TOP">TOP</option>
                                <option value="SIDE">SIDE</option>
                                <option value="BAFFLE">BAFFLE</option>
                                <option value="BACK">BACK</option>
                                <option value="BOTTOM">BOTTOM</option>
                                <option value="WOOFER">WOOFER</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="qty_ng">Quantity NG</label>
                            <input type="number" name="qty_ng" id="qty_ng" class="form-control validate">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Output">Output</label>
                            <input type="number" name="output" id="output" class="form-control validate">
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="area_detec">Area Detected</label>
                            <select id="area_detec" name="area_detec" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="pqc">PQC</option>
                                <option value="avmt">AVMT</option>
                                <option value="sound">SOUND</option>
                                <option value="oqc">OQC</option>
                            </select>
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="root_cause">Root Cause</label>
                            <select id="root_cause" name="root_cause" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="ww">WW</option>
                                <option value="painting">PAINTING</option>
                                <option value="warehouse">WAREHOUSE</option>
                                <option value="spu">SPU</option>
                                <option value="pcb">PCB</option>
                                <option value="sub assy">Sub Assy</option>
                            </select>
                        </div>   
                        </div>
                        <div class="col-lg-6">
                            <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="detail_problem">Detail Problem</label>
                            <textarea rows="3" class="form-control validate" id="detail_problem" name="detail_problem" onkeyup="this.value=this.value.toUpperCase()"></textarea>
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="status">Status</label>
                            <select id="status" name="status" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="R">REPAIR</option>
                                <option value="SC">SCRAP</option>
                            </select>
                        </div>
                        <style type="text/css">
                            input[type="file"] {
                                display: none;
                            }
                            .custom-file-upload {
                                border: 1px solid #ccc;
                                display: inline-block;
                                padding: 6px 12px;
                                cursor: pointer;
                            }
                        </style>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right">Upload Foto Before</label><br>
                            <label data-error="wrong" data-success="right" for="foto_before" class="custom-file-upload btn btn-info ">Click here
                                <input type="file" name="foto_before" id="foto_before" class="form-control validate">
                            </label>
                            
                            
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->





</div>
</div>



<!-- Bootstrap modal 2 -->
<div class="modal fade" id="modal_detail" role="document">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">gmc Form</h3>
            </div> -->
             <div class="modal-body form">
                <form action="#" id="myform" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-6">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="item_part2">Part Number</label>
                            <input type="text" name="item_part2" id="item_part2" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nama_model">Model</label>
                            <input type="text" name="nama_model" id="nama_model" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="nama_ng">Name NG</label>
                            <select id="nama_ng" name="nama_ng" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="SCRATCH">SCRATCH</option>
                                <option value="DENTED">DENTED</option>
                                <option value="BUBBLE">BUBBLE</option>
                                <option value="TORN">TORN</option>
                                <option value="AIRLEAK">AIRLEAK</option>
                                <option value="NO PART">NO PART</option>
                                <option value="OTHER">OTHER</option>
                            </select>                                
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="posisi_ng">Posisi NG</label>
                            <select id="posisi_ng" name="posisi_ng" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="TOP">TOP</option>
                                <option value="SIDE">SIDE</option>
                                <option value="BAFFLE">BAFFLE</option>
                                <option value="BACK">BACK</option>
                                <option value="BOTTOM">BOTTOM</option>
                                <option value="WOOFER">WOOFER</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div> 
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="qty_ng">Quantity NG</label>
                            <input type="number" name="qty_ng" id="qty_ng" class="form-control validate">
                        </div>

                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Output">Output</label>
                            <input type="number" name="output" id="output" class="form-control validate">
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="area_detec">Area Detected</label>
                            <select id="area_detec" name="area_detec" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="pqc">PQC</option>
                                <option value="avmt">AVMT</option>
                                <option value="sound">SOUND</option>
                                <option value="oqc">OQC</option>
                            </select>
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="root_cause">Root Cause</label>
                            <select id="root_cause" name="root_cause" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="ww">WW</option>
                                <option value="painting">PAINTING</option>
                                <option value="warehouse">WAREHOUSE</option>
                                <option value="spu">SPU</option>
                                <option value="pcb">PCB</option>
                                <option value="sub assy">Sub Assy</option>
                            </select>
                        </div>   

                    </div><!-- end grid 1 -->
                    <style type="text/css">
                        .detailtable td{
                            padding: 5px;
                        }
                    </style>

                    <div class="col-lg-6">
                                              
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="detail_problem">Detail Problem</label>
                            <textarea rows="3" class="form-control validate" id="detail_problem" name="detail_problem" onkeyup="this.value=this.value.toUpperCase()"></textarea>
                        </div>                        
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="status">Status</label>
                              <input type="text" name="status" id="status" class="form-control validate">
                        </div>  
                        <div class="md-form mb-5">                         
                            <table class="detailtable table-responsive">
                                <tr>
                                    <th>Foto Before</th>
                                    <th>Foto During</th>
                                    <th>Foto After</th>
                                </tr>
                                <tr>
                                    <td>

                                        <img id="img_foto_before" class="img-responsive" width="200px" height="200px" />
                                    </td>

                                    <td> <img class="img-responsive" src="<?=base_url();?>assets/admin/img/default-image.jpg" height="200px" width="200px"/></td>
                                    <td> <img class="img-responsive" src="<?=base_url();?>assets/admin/img/default-image.jpg" height="200px" width="200px"/></td>
                                </tr>
                            </table>
                        </div>  
                         <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="status">Created Date</label>
                              <input type="text" name="created_date" id="created_date" class="form-control validate">
                        </div>
                         <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="status">Created By</label>
                              <input type="text" name="created_by" id="created_by" class="form-control validate">
                        </div>                        
                                
                    </div>
                </div>

                </form>
            </div>
           <!--  <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<style type="text/css">
#table_filter{ margin-right: 50px !important; }

.modal-backdrop { z-index: -1 !important; } /*untuk popup modal agar tidak blur*/
#table_wrapper{ padding: 5px; }
.card { font-size: 12px !important; color: #6b4804 !important; } 
</style>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#item_part').autocomplete({
                source: "<?php echo site_url('Masalahng/get_autocomplete');?>",     
                select: function (event, ui) {
                    $('[name="item_part"]').val(ui.item.label); 
                   // $('[name="nama_part"]').val(ui.item.description); 
                }
            });

        });
    </script>




<script type="text/javascript">


var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('masalahng/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

            ],

        });

    
    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });


    //check all
    $("#check-all").click(function () {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });

  
});



function add_masalahng()
{
    save_method = 'add';
    //alert('testing');
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal 
    //$('#exampleModal').modal('show'); // show bootstrap modal 
    $('.modal-title').text('Add Masalah NG'); // Set Title to Bootstrap modal title


/* alert('add form');
return false;*/

}

function detail_value(id)
{
    
    $('#myform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax
    var src = "<?=base_url('assets/file_upload/');?>";
    $.ajax({
        url : "<?php echo site_url('masalahng/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            src=src+data.foto_before;
            $('[name="id"]').val(data.kode_laporan);
            $('[name="item_part2"]').val(data.item_part);
            $('[name="nama_model"]').val(data.nama_model);
            $('[name="nama_ng"]').val(data.nama_ng);
            $('[name="posisi_ng"]').val(data.posisi_ng);
            $('[name="qty_ng"]').val(data.qty_ng);
            $('[name="output"]').val(data.output);
            $('[name="area_detec"]').val(data.area_detec);
            $('[name="root_cause"]').val(data.root_cause);
            $('[name="detail_problem"]').val(data.detail_problem);
            $('[name="status"]').val(data.status);
            $('[name="created_date"]').val(data.created_date);
            $('[name="created_by"]').val(data.created_by);
            $('#img_foto_before').attr("src",src);
            $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Detail Masalah NG'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

    //$('#exampleModal').modal('show'); // show bootstrap modal 
    /* alert('add form');
    return false;*/
}



function edit_value(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('masalahng/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.kode_laporan);
            $('[name="item_part"]').val(data.item_part);
            $('[name="nama_model"]').val(data.nama_model);
            $('[name="nama_ng"]').val(data.nama_ng);
            $('[name="posisi_ng"]').val(data.posisi_ng);
            $('[name="qty_ng"]').val(data.qty_ng);
            $('[name="output"]').val(data.output);
            $('[name="area_detec"]').val(data.area_detec);
            $('[name="root_cause"]').val(data.root_cause);
            $('[name="detail_problem"]').val(data.detail_problem);
            $('[name="status"]').val(data.status);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Masalah NG'); // Set title to Bootstrap modal title


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('masalahng/ajax_add')?>";
    } else {
        url = "<?php echo site_url('masalahng/ajax_update')?>";
    }

    // ajax adding data to database
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_value(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('masalahng/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function bulk_delete()
{
    var list_id = [];
    $(".data-check:checked").each(function() {
        list_id.push(this.value);
    });
    if(list_id.length > 0)
    {
        if(confirm('Are you sure delete this '+list_id.length+' data?'))
        {
            $.ajax({
                type: "POST",
                data: {id:list_id},
                url: "<?php echo site_url('masalahng/ajax_bulk_delete')?>",
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        reload_table();
                    }
                    else
                    {
                        alert('Failed.');
                    }

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    else
    {
        alert('no data selected');
    }
}

</script>

