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

    <button class="btn btn-success" onclick="add_masalahww()"><i class="glyphicon glyphicon-plus"></i> Add Masalah NG</button>
    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
    <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>
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
        <th>Posisi</th>
        <th>Qty</th>
        <th>Input</th>
        <th>Area Detected</th>
        <th>Root Cause</th>
        <th>Problem</th>
        <th>status</th>
        <th>Date</th>
        <th>By</th>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    ...
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">gmc Form</h3>
            </div> -->
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                     <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="item_part">Part Number</label>
                            <input type="text" name="item_part" id="item_part" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
                        </div>
<!-- 
                            <div class="form-group">
                                <label data-error="wrong" data-success="right" for="kode_gmc">GMC ID</label>
                                <input type="text" name="kode_gmc" id="kode_gmc" disabled="disabled" class="form-control validate">
                            </div>

                            <div class="form-group">
                                <label data-error="wrong" data-success="right" for="nama_part">Part Name</label>
                                <input type="text" name="nama_part" id="nama_part" disabled="disabled" class="form-control validate">
                            </div> -->
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="nama_model">Model</label>
                                <input type="text" name="nama_model" id="nama_model" class="form-control validate" onkeyup="this.value=this.value.toUpperCase()">                                
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
                                    <option value="BODY">BODY</option>
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
                                    <option value="SL">SOFT LAMINATOR</option>
                                    <option value="FL">FLAT LAMINATOR</option>
                                    <option value="HVC">HVC</option>
                                    <option value="NCR">NCR</option>
                                    <option value="NCB">NCB</option>
                                    <option value="PIN R">PIN R</option>
                                    <option value="DET">DET</option>
                                    <option value="CA">Cab ASSY</option>
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

                            
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="detail_problem">Detail Problem</label>
                                <textarea rows="3" class="form-control validate" id="detail_problem" name="detail_problem" onkeyup="this.value=this.value.toUpperCase()"></textarea>
                            </div>

                            
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="status">Status</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="">Choose..</option>
                                    <option value="SS">SCRAP SETTING</option>
                                    <option value="SC">SCRAP</option>
                                </select>
                            </div>
                            


                      <!--   <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-unique" type="submit">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div> -->

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

<style type="text/css">
#table_filter{ margin-right: 50px !important; }

.modal-backdrop { z-index: -1 !important; } /*untuk popup modal agar tidak blur*/
#table_wrapper{ padding: 5px; }
.card { font-size: 12px !important; color: #6b4804 !important; } 
</style>




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
            "url": "<?php echo site_url('masalahww/ajax_list')?>",
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



function add_masalahww()
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

function edit_value(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('masalahww/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.kode_laporan);
            $('[name="item_part"]').val(data.item_part);
          //  $('[name="nama_ng"]').val(data.nama_ng);
            $('[name="posisi_ng"]').val(data.posisi_ng);
            $('[name="qty_ng"]').val(data.qty_ng);
            $('[name="output"]').val(data.output);
          //  $('[name="std_price"]').val(data.std_price);
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
        url = "<?php echo site_url('masalahww/ajax_add')?>";
    } else {
        url = "<?php echo site_url('masalahww/ajax_update')?>";
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
            url : "<?php echo site_url('masalahww/ajax_delete')?>/"+id,
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
                url: "<?php echo site_url('masalahww/ajax_bulk_delete')?>",
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