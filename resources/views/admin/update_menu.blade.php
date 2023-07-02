<!DOCTYPE html>
<html lang="en">
  <head>
   <base href="/public">
    @include('admin.head')
  </head>
  <body>
  @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
     
     <div  class="container"  style="padding-top:100px;" >
 
         <form action="{{url('/editmenu',$data->id)}}" method="post" enctype="multipart/form-data">
         
           @csrf
           

             <div  > <label> Name of Cake </label>
                 <input type="text" name="name"style="color:black;" value="{{$data->name}}" require ></div>

                 <div > <label> Price of Cake </label>
                 <input type="text" name="price"style="color:black;"  value="{{$data->price}}" require></div>


                 <div > <label>Old Image </label>
                 <img hight=150px; width=150px; src="menuimage/{{$data->image}}" > </div>
 
                 <div > <label>New Image </label>
                 <input type="file" name="image" style="width:200px;" ></div>
 
                 <div style="padding:15px;"> 
                 <input type="submit" value="Updated Menu" class="btn btn-info" ></div>
                 
 
         </form>         
     </div>
   
     </div> 
   @include('admin.script')
    
  </body>
</html>