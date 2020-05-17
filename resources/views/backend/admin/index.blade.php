@extends('layouts.app')

@section('content')
 <div class="content-wrapper">
        <div class="page-header">
    <h1 class="page-title">Admin</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Admins</a></li>
    </ol>
    <div class="page-header-actions">
        
    <a href="javascript:void(0)" id="create-Admin-button" class="btn btn-sm btn-primary btn-outline btn-round"  title="create">
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
            <table style="width: 100% !important" class="table table-hover dataTable table-striped" id="admin-datatable">
                <thead>
                    <th>@lang('admin.sn')</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.lastname')</th>
                    <th>@lang('admin.username')</th>
                    <th>@lang('admin.email')</th>
                    <th>@lang('admin.status')</th>
                    <th>@lang('admin.role')</th>
                    <th>@lang('admin.action')</th>
                   
                    </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div id="Admin-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add/Edit Admins</h4>
      </div>
      <div class="modal-body">
        <form id="form-admins">
              <input type = "hidden" name = "id" id = "id"/>
                
        <div class='form-group'>
        <label for='name'>@lang('admin.name')<span style="color: red">*</span></label>
        <input id='name' type='text' class='form-control' name='name'>
        </div>
          <div class='form-group'>
        <label for=''>@lang('admin.lastname')<span style="color: red">*</span></label>
        <input id='lastname' type='text' class='form-control' name='lastname'>
        </div>
          <div class='form-group'>
        <label for=''>@lang('admin.username')<span style="color: red">*</span></label>
        <input id='username' type='text' class='form-control' name='username'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('admin.password')<span style="color: red">*</span></label>
        <input id='password' type='text' class='form-control' name='password'>
        </div>
        <div class='form-group'>
        <label for=''>@lang('admin.email')<span style="color: red">*</span></label>
        <input id='email' type='email' class='form-control' name='email'>
        </div>
      
         <div class='form-group'>
                  <label for=''>@lang('admin.status')<span style="color: red">*</span></label><br>

            <label class="radio-inline">
              <input type="radio" name="status" class='form-control' id="status" value="1" checked>Active
            </label>&nbsp; &nbsp;
            <label class="radio-inline">
              <input type="radio" name="status" class='form-control' id="status" value="0">Deactive
            </label>

          </div>

         <div class="form-group">
              <label for="confirm_password">@lang('admin.role')<span style="color: red">*</span></label>
                  <select class="form-control" name="roles">
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                  </select>
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
    $("#form-admins").validate(
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

  $(document).on('click','#create-Admin-button', function () { 
    $('#Admin-modal').modal('show');
    });

  var dataTable; 
  $(function(){
    dataTable = $('#admin-datatable').DataTable({
      dom: 'Bfrtip',
      // scrollX: true,
      "serverSide": true,
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      'ajax' : { url: "{{ route('admins.json') }}",type: 'POST',data: {'_token': '{{ csrf_token() }}' }  },
        columns: [
          { data: function (data, type, row, meta) {
           
                return meta.row + meta.settings._iDisplayStart + 1;
              },name: "sn", searchable: false },
          { data: "name",name: "name"},
          { data: "lastname",name: "lastname"},
          { data: "username",name: "username"},
          { data: "email",name: "email"},
          { data: "status",render:function (data){
                    if(data == 1){
                        return '<i class="icon wb-check-circle" style="color:green;"></i> ';
                    }
                    else{
                        return'<i class="icon wb-minus-circle" style="color:red;"></i> </span>';
                    }
                } ,searchable:false,orderable:false},
          { data: "roles",name: "roles"},



          { data: function(data,b,c,table) { 
            var buttons = '';
              
              if(data.id == 1001 || data.id == 1002){
              }else{

            buttons += "<a href='javascript:void(0)' data-toggle='modal' data-target='#Admin-modal' class='btn bg-green waves-effect'  title='Edit' onclick='edit("+table.row+")'>Edit</a>&nbsp;&nbsp"; 

            buttons += "<a href='"+"/dashboard/admins"+"/delete/"+data.id+"' class='btn bg-red waves-effect'  >Delete</a>";
          } 

            return buttons;
          }, name:'action',searchable: false},  
        ],
      });
  });


  function edit(index)
  {
    var row = dataTable.row(index).data();
    var validator = $('#form-admins').validate();
    validator.resetForm();
    $(".error").removeClass("error");
    $('#id').val(row.id);
    $("#form-admins").find('input:checkbox').prop('checked',false);
    $("#form-admins").find('input:text,select,textarea').val(function(i,v){

      /*if(row.gender == 'M')
      {
        $('input:radio[name=gender][id=radio_1]').prop('checked',true);
      }else{
        $('input:radio[name=gender][id=radio_2]').prop('checked',true);
      }*/
      return row[this.name];
    });
    // $('select').selectpicker('render');

    $("#form-admins").find('input:checkbox').prop('checked',function(){
      // if($.inArray(this.value,row.array) >= 0)
      // { 
        return true; 
      // }

    }); 
  }



  function save()
  {
    $.ajax({
      url: "/dashboard/admins/store",
      data: $('#form-admins').serialize(),
      dataType: 'json',
      success: function(result){
        if(result.success)
        {
          $('#Admin-modal').modal('hide');
          $('#form-admins')[0].reset();
          dataTable.ajax.reload( null, false );
        }
      },
      type: 'POST'
    });
    return false;
  }
  

  
</script>       
@endsection