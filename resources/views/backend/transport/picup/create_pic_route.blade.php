@extends('backend.layouts.app')

@section('title', __('Picup Route create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Add Picup Point')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-12 col-lg-12 col-sm-12">
                   <h4> Add Route Picup Point</h4>
                   <form action="{{route('admin.picup.store')}}" method="POST">
                    @csrf

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Route </label><small class="req"> *</small>
                                        <select class="form-control" name="route_id">
                                            <option value="">Select </option>
                                            @foreach($routes as $route)
                                            <option value="{{$route->id}}">{{$route->name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                   
                                </div>

                               
                            </div>

                          <div class="row">
                            <div class="col-md-12">
                                
                                 <table  class="table table-hover small-text" id="tb">
                                        <tr class="tr-header">
                                        <th>Pickup Point</th>
                                        <th>Distance</th>
                                        <th>Pickup Time *</th>
                                        <th>Monthly Fees *</th>
                                        <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"> add</span></a></th>
                                        <tr>
                                           <td><select name="pickup_id[]" class="form-control">
                                          <option value="" selected>Select Designation</option>
                                            <option value="President">President</option>
                                            
                                           
                                        </select></td>
                                        <td><input type="text" name="distance[]" class="form-control" required></td>
                                       
                                        <td><input type="text" name="time[]" class="form-control" required></td>
                                        <td><input type="text" name="fee[]" class="form-control" required></td>
                                        <td><a href='javascript:void(0);'  class='remove '><span class='fa fa-remove ' style="color:red"></span></a></td>
                                        </tr>
                                        </table>
                                
                            </div>
                              
                          </div>  

                          

                           
                            


                       <button type="submit"  class="btn btn-info"/>save</button>

                   </form>
               </div> 
               


           </div>
        </x-slot>
    </x-backend.card>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
      <!--   <script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
 -->



  <script  id="document-template" type="text/x-handlebars-template">
    <tr class="delete_add_more_item" id="delete_add_more_item">
      
      <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">
      <td>
        <input type="hidden" name="category_id[]" value="@{{category_id}}">
        @{{category_name}}
      </td>
      <td>
         <input type="hidden" name="product_id[]" value="@{{product_id}}">
        @{{product_name}}
      </td>
      <td>
        <input type="number" name="buying_qty[]" min="1" class="form-control buying_qty" value="1">
      </td>
     
      <td>
         <input type="text" name="description[]"  class="form-control">
      </td>
     
      <td>
        <i class="fa fa-window-close removeeventmore"></i>
      </td>
      

      
    </tr>
    

  </script>

    <script type="text/javascript">
    
    $(document).ready(function(){
       $(document).on('click','.addeventmore',function(){

         
         //var supplier_name=$('#supplier_name').find('option:selected').text();
         var category_id=$('#category_id').val();
         var category_name=$('#category_id').find('option:selected').text();
         var product_id=$('#product_id').val(); 

         var product_name=$('#product_id').find('option:selected').text();

         //if(date==''){
             //$.notify("Date is Required",{globalPosition:'top right',className:'error'});
             //return false;
         //}

         var source=$('#document-template').html();
         var template= Handlebars.compile(source);
         var data={
                 
               
                 category_id:category_id,
                 category_name:category_name,
                 product_id:product_id,
                 product_name:product_name


         };
         var html=template(data);
         $('#addRow').append(html);



       });
       $(document).on('click','.removeeventmore',function(event){

         $(this).closest('.delete_add_more_item').remove();
         totalAmountPrice();
       });
       $(document).on('keyup click','.unit_price,.buying_qty',function(){

          var unit_price=$(this).closest("tr").find("input.unit_price").val();
          var qty=$(this).closest("tr").find("input.buying_qty").val();

          var total=unit_price*qty;
          $(this).closest("tr").find("input.buying_price").val(total);
          totalAmountPrice();

       });

       function totalAmountPrice(){

         var sum =0;

         $(".buying_price").each(function(){
            var value=$(this).val();
            if(!isNaN(value) && value.length!=0){

              sum+=parseFloat(value);
            }


         });
         $('#estimated_amount').val(sum);
       };


    });
  </script>
 
<!-- <script>
    $(document).on('click', '.addrow', function () {
        var container = $(this).closest(".panel-body").find('.append_row');
        var nxt_row = $(this).closest(".panel-body").find('.nxt_row').val();
        var new_class_dropdown = $('#class_dropdown').html().replace("class_id", "class_id_" + nxt_row);
        var new_section_dropdown = $('#section_dropdown').html().replace("section_id", "section_id_" + nxt_row);
        var $newDiv = $('<tr>').addClass('row').append(
                $('<input>', {type: 'hidden', name: 'row_count[]', val: parseInt(nxt_row)})).append(
                $('<div>').addClass('col-sm-5 col-lg-5 col-md-4').append($('<div>').addClass('form-group').append($('<label>').html('<?php //echo "class"; ?>')).append(new_class_dropdown))
                ).append(
                $('<div>').addClass('col-sm-5 col-lg-5 col-md-4').append($('<div>').addClass('form-group').append($('<label>').html('<?php //echo"section"; ?>')).append(new_section_dropdown))
                ).append(
                $('<div>').addClass('col-sm-2 col-lg-2 col-md-4').append($('<div>').addClass('form-group').append($('<label>',{ css: {'opacity': 0}}).html('Action')).append(
                    
                   
                      
                  
                    $('<button>').html('<?php echo "remove"; ?>').addClass('btn btn-sm btn-danger rmv_row')
                    
                  
                    )));

        $(this).closest(".panel-body").find('.nxt_row').val(parseInt(nxt_row) + 1);
        $newDiv.appendTo(container);

    });

</script> -->

<script type="text/javascript">
  
  $(function(){

    $(document).on('click','#category_id',function(){

         var category_id=$(this).val();

         $.ajax({

              url:"{{route('admin.get-picupoint')}}",
              type:"GET",
              data:{category_id:category_id},
              success:function(data){
                var html='<option value="">select </option>';
                $.each(data,function(key,v){
                 html+='<option value="'+v.id+'">'+v.name+'</option>'
                });
                $('#category_id').html(html);
              }

         });
    });

  });
</script>

 <script type="text/javascript">
            
                $(function(){
                    $('#addMore').on('click', function() {
                              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                              data.find("input").val('');
                     });
                     $(document).on('click', '.remove', function() {
                         var trIndex = $(this).closest("tr").index();
                            if(trIndex>1) {
                             $(this).closest("tr").remove();
                           } else {
                             alert("Sorry!! Can't remove first row!");
                           }
                      });
                });      


         </script>
    
@endsection
