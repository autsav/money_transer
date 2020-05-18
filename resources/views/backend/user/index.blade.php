@extends('backend.layouts.app')

@section('content')
 <div class="content-wrapper">
        <div class="page-header">
    <h1 class="page-title">Users</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Users</a></li>
    </ol>
    <div class="page-header-actions">
        
    <a href="javascript:void(0)" id="create-User-button" class="btn btn-sm btn-primary btn-outline btn-round"  title="create">
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
            <table style="width: 100% !important" class="table table-hover dataTable table-striped" id="user-datatable">
                <thead>
                    <th>SN</th>
                    <th>@lang('user.customer_id')</th>
                    <th>@lang('user.first_name')</th>
                    <th>@lang('user.middle_name')</th>
                    <th>@lang('user.last_name')</th>
                    <th>@lang('user.email')</th>
                    <th>@lang('user.gender')</th>
                    <th>@lang('user.mobile')</th>
                    <th>@lang('user.phone')</th>
<!--                     <th>@lang('user.address')</th>
-->                <!--  <th>@lang('user.building_no')</th>
                    <th>@lang('user.street')</th>
                    <th>@lang('user.city_or_town')</th>
                    <th>@lang('user.region')</th>
                    <th>@lang('user.postcode')</th>
                    <th>@lang('user.country')</th> -->
                    <th>@lang('user.status')</th>
                    <th>@lang('user.action')</th>
                    </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div id="User-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add/Edit User</h4>
      </div>
      <div class="modal-body">
        <form name="form-users" onsubmit="return save()" id="form-users" method="POST">
          {{ csrf_field() }}
              <input type = "hidden" name = "id" id = "id"/>
                
        <div class='form-group'>
        <label for='customer_id'>@lang('user.customer_id')<span style="color: red">*</span></label>
        <input id='customer_id' type='text' class='form-control' name='customer_id'>
        </div>
          <div class='form-group'>
        <label for=''>@lang('user.first_name')<span style="color: red">*</span></label>
        <input id='first_name' type='text' class='form-control' name='first_name'>
        </div>
          <div class='form-group'>
        <label for=''>@lang('user.middle_name')<span style="color: red">*</span></label>
        <input id='middle_name' type='text' class='form-control' name='middle_name'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.last_name')<span style="color: red">*</span></label>
        <input id='last_name' type='text' class='form-control' name='last_name'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.email')<span style="color: red">*</span></label>
        <input id='email' type='text' class='form-control' name='email'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.gender')<span style="color: red">*</span></label>
        <input id='gender' type='text' class='form-control' name='gender'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.mobile')<span style="color: red">*</span></label>
        <input id='mobile' type='text' class='form-control' name='mobile'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.phone')<span style="color: red">*</span></label>
        <input id='' type='text' class='form-control' name=''>
        </div>
      <!--       <div class='form-group'>
        <label for=''>@lang('user.address')<span style="color: red">*</span></label>
        <input id='phone' type='text' class='form-control' name='phone'>
        </div> -->
            <div class='form-group'>
        <label for=''>@lang('user.building_no')<span style="color: red">*</span></label>
        <input id='building_no' type='text' class='form-control' name='building_no'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.street')<span style="color: red">*</span></label>
        <input id='street' type='text' class='form-control' name='street'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.city_or_town')<span style="color: red">*</span></label>
        <input id='city_or_town' type='text' class='form-control' name='city_or_town'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.region')<span style="color: red">*</span></label>
        <input id='region' type='text' class='form-control' name='region>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.postcode')<span style="color: red">*</span></label>
        <input id='postcode' type='text' class='form-control' name='postcode'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.country')<span style="color: red">*</span></label>
        <input id='country' type='text' class='form-control' name='country'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.status')<span style="color: red">*</span></label>
        <input id='status' type='text' class='form-control' name='status'>
        </div>
            <div class='form-group'>
        <label for=''>@lang('user.action')<span style="color: red">*</span></label>
        <input id='action' type='text' class='form-control' name='action'>
        </div>
        <div class="modal-footer">
            <button type="submit" name="Submit" value="Submit" class="btn bg-green waves-effect" >Save</button>     
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         </div>
          
      
        </form>   
      </div>
      
    
    </div>

    </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $("#form-users").validate(
            { // initialize the plugin
              

            rules: {

            mood: {
                required: true
            }
        },
        messages:{
            mood: {
                required: "please enter Mood"
            }
           
        },
        submitHandler: function() {
          save();
        }
        });

    
     
  });
</script>
<script language="javascript" type="text/javascript">

    $(document).on('click','#create-User-button', function () { 
    $('#User-modal').modal('show');
    });


  var dataTable; 
  $(function(){
    dataTable = $('#user-datatable').DataTable({
      dom: 'Bfrtip',
      // scrollX: true,
      "serverSide": true,
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ],
       'ajax' : { url: "{{ route('users.json') }}",type: 'POST',data: {'_token': '{{ csrf_token() }}' }  },
        columns: [
          { data: function (data, type, row, meta) {
            console.log(data);
                return meta.row + meta.settings._iDisplayStart + 1;
              },name: "sn", searchable: false },
          
          { data: "customer_id",name: "customer_id"},
          { data: "first_name",name: "first_name"},
          { data: "middle_name",name: "middle_name"},
          { data: "last_name",name: "last_name"},
          { data: "email",name: "email"},
          { data: "gender",name: "gender"},
          { data: "mobile",name: "mobile"},
          { data: "phone",name: "phone"},
          { data: "status",name: "status"}, 
          { data: function(data,b,c,table) { 
            var buttons = '';

            buttons += "<a href='javascript:void(0)' data-toggle='modal' data-target='#User-modal' class='btn btn-sm btn-success btn-outline'  title='Edit' onclick='edit("+table.row+")'><i class='icon wb-pencil' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp"; 

             buttons += "<a href='"+"/dashboard/users"+"/delete/"+data.id+"' class='btn bg-red waves-effect'  >Delete</a>";

            return buttons;
          }, name:'action',searchable: false},  
        ],
      });
  });


  function edit(index)
  {
    var row = dataTable.row(index).data();
    var validator = $('#form-users').validate();
    validator.resetForm();
    $(".error").removeClass("error");
    $('#id').val(row.id);
    $("#form-users").find('input:checkbox').prop('checked',false);
    $("#form-users").find('input:text,select,textarea').val(function(i,v){

      /*if(row.gender == 'M')
      {
        $('input:radio[name=gender][id=radio_1]').prop('checked',true);
      }else{
        $('input:radio[name=gender][id=radio_2]').prop('checked',true);
      }*/
      return row[this.name];
    });
    // $('select').selectpicker('render');

    $("#form-users").find('input:checkbox').prop('checked',function(){
      // if($.inArray(this.value,row.array) >= 0)
      // { 
        return true; 
      // }

    }); 
  }

  function removemood(index)
  {
    if(confirm('Are you sure you to want to delete?')){
      $.post("delete", {id:[index]}, function(){
        dataTable.ajax.reload( null, false );
      });
    }
  }

  function save()
  {
    $.ajax({
      url: "/dashboard/users/store",
      data: $('#form-users').serialize(),
      dataType: 'json',
      success: function(result){
        if(result.success)
        {
          $('#User-modal').modal('hide');
          $('#form-users')[0].reset();
          dataTable.ajax.reload( null, false );
        }
      },
      type: 'POST'
    });
    return false;
  }
  

  
</script>       
@endsection