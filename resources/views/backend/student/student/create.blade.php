@extends('backend.layouts.app')

@section('title', __('Students Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Student Create')
        </x-slot>

        

        <x-slot name="body">
      <!--   <div  class="row"> -->
               
                  
                   <form action="{{route('admin.disable-reason.store')}}" method="POST">
                    @csrf
                    <div  class="row">
                     <div class="col-md-3">
                         <div  class="form-group">
                           <label>Admission No *</label>
                           <input type="text" name="admission_no" class="form-control"/>
   
                         </div>
                      </div>

                       <div class="col-md-3">
                         <div  class="form-group">
                           <label>Roll No *</label>
                           <input type="text" name="roll_no" class="form-control"/>
   
                         </div>
                      </div>  
                       <div class="col-md-3">
                         <div  class="form-group">
                           <label>Class  *</label>
                           
                           <select name="class_id" class="form-control" id="class_id">
                              <option value="">Select</option>
                              @foreach($classess as $class)
                               <option value="{{$class->id}}">{{$class->class}}</option>
                              @endforeach
                             
                           </select>
   
                         </div>
                      </div>
                      <div class="col-md-3">
                         <div  class="form-group">
                           <label>Section  *</label>
                           
                           <select name="class_id" class="form-control" id="section_id">
                              <option value="">Select</option>
                              @foreach($classess as $class)
                               <option value="{{$class->id}}">{{$class->class}}</option>
                              @endforeach
                             
                           </select>
   
                         </div>
                      </div>

                      </div>  
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
                
              


           <!-- </div> -->
        </x-slot>
    </x-backend.card>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <script>

      $(document).ready(function(){
         $('select[name="class_id"]').on('change',function(){

           var class_id = $(this).val();
           alert(class_id);


         }) 


      });
      
      
    </script>
@endsection
