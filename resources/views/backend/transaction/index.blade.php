@extends('backend.layouts.app')

@section('content')
 <div class="content-wrapper">
        <div class="page-header">
    <h1 class="page-title">Transactions</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
    </ol>
    <div class="page-header-actions">
        
    <a href="javascript:void(0)" id="create-Transaction-button" class="btn btn-sm btn-primary btn-outline btn-round"  title="create">
      <i class="icon wb-plus" aria-hidden="true"></i>
          <span class="hidden-sm-down">Create</span>
    </a>

    </div>
</div>
<div class="panel">
  <header class="panel-heading">
  </header>
    <div class="panel-body">
        <div class="table-responsive">
            <table style="width: 100% !important" class="table table-hover dataTable table-striped" id="transaction-datatable">
                <thead>
                    <th>@lang('transaction.sn')</th>
                    <th>@lang('transaction.sender_id')</th>
                    <th>@lang('transaction.receiver_id')</th>
                    <th>@lang('transaction.payment_date')</th>
                    <th>@lang('transaction.estimated_delivery_date')</th>
                    <th>@lang('transaction.action')</th>
                   
                    </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div id="Transaction-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('transaction.add_or_edit_trans')</h4>
      </div>
      <div class="modal-body">
        <form id="form-transactions">
              <input type = "hidden" name = "id" id = "id"/>
                
          <div class='form-group'>
        <label for=''>@lang('transaction.sender_id')<span style="color: red">*</span></label>
        <input id='sender_id' type='text' class='form-control' name='sender_id'>
        </div>
          <div class='form-group'>
        <label for=''>@lang('transaction.receiver_id')<span style="color: red">*</span></label>
        <input id='receiver_id' type='text' class='form-control' name='receiver_id'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('transaction.payment_date')<span style="color: red">*</span></label>
        <input id='payment_date' type='text' class='form-control' name='payment_date'>
        </div>
        <div class='form-group'>
        <label for=''>@lang('transaction.estimated_delivery_date')<span style="color: red">*</span></label>
        <input id='email' type='estimated_delivery_date' class='form-control' name='estimated_delivery_date'>
        </div>
      
                            {{ csrf_field() }}

             </form>  
           
        <div class="modal-footer">
            <button type="submit"  value="Submit" onClick="save()" class="btn bg-green waves-effect" >Save</button>     
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         </div>
          
      
    
      </div>
      
    
    </div>

    </div>
</div>
</div>s
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $("#form-transactions").validate(
            { // initialize the plugin
              

            rules: {

            name: {
                required: true
            }
        },
        messages:{
            name: {
                required: "please enter Name"
            }
           
        },
        submitHandler: function() {
          save();
        }
        });

    
     
  });
</script>
<script language="javascript" type="text/javascript">

  $(document).on('click','#create-Transaction-button', function () { 
    $('#Transaction-modal').modal('show');
    });

  var dataTable; 
  $(function(){
    dataTable = $('#transaction-datatable').DataTable({
      dom: 'Bfrtip',
      // scrollX: true,
      "serverSide": true,
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      'ajax' : { url: "{{ route('transactions.json') }}",type: 'POST',data: {'_token': '{{ csrf_token() }}' }  },
        columns: [
          { data: function (data, type, row, meta) {
           
                return meta.row + meta.settings._iDisplayStart + 1;
              },name: "sn", searchable: false },
          { data: "sender_id",name: "sender_id"},
          { data: "receiver_id",name: "receiver_id"},
          { data: "payment_date",name: "payment_date"},
          { data: "estimated_delivery_date",name: "estimated_delivery_date"},
          { data: function(data,b,c,table) { 
            var buttons = '';
              
              if(data.id == 1001 || data.id == 1002){
              }else{

            buttons += "<a href='javascript:void(0)' data-toggle='modal' data-target='#Transaction-modal' class='btn bg-green waves-effect'  title='Edit' onclick='edit("+table.row+")'>Edit</a>&nbsp;&nbsp"; 

            buttons += "<a href='"+"/dashboard/transactions"+"/delete/"+data.id+"' class='btn bg-red waves-effect'  >Delete</a>";
          } 

            return buttons;
          }, name:'action',searchable: false},  
        ],
      });
  });


  function edit(index)
  {
    var row = dataTable.row(index).data();
    var validator = $('#form-transactions').validate();
    validator.resetForm();
    $(".error").removeClass("error");
    $('#id').val(row.id);
    $("#form-transactions").find('input:checkbox').prop('checked',false);
    $("#form-transactions").find('input:text,select,textarea').val(function(i,v){

      /*if(row.gender == 'M')
      {
        $('input:radio[name=gender][id=radio_1]').prop('checked',true);
      }else{
        $('input:radio[name=gender][id=radio_2]').prop('checked',true);
      }*/
      return row[this.name];
    });
    // $('select').selectpicker('render');

    $("#form-transactions").find('input:checkbox').prop('checked',function(){
      // if($.inArray(this.value,row.array) >= 0)
      // { 
        return true; 
      // }

    }); 
  }



  function save()
  {
    $.ajax({
      url: "/dashboard/transactions/store",
      data: $('#form-transactions').serialize(),
      dataType: 'json',
      success: function(result){
        if(result.success)
        {
          $('#Transaction-modal').modal('hide');
          $('#form-transactions')[0].reset();
          dataTable.ajax.reload( null, false );
        }
      },
      type: 'POST'
    });
    return false;
  }
  

  
</script>       
@endsection