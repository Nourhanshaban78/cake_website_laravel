<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.head')
  </head>
  <body>
  @include('admin.sidebar')
    
    @include('admin.navbar')
   
    <div class="container-fluid page-body-wrapper">
     
     <div style="padding-top:100px;" align="center">
        <form action="{{url('addmenu')}}" method="post" enctype="multipart/form-data">
            @csrf

   <div class="mb-3">
  <label  >Name of Cake</label>
  <input type="text" style="color:black"  name="name" placeholder="name of food">
   </div>

<div class="mb-3">
  <label  >Price of Cake</label>
  <input type="text" style="color:black"  name="price" placeholder="price">
</div>


<div class="mb-3">
  <label >Image of Cake</label>
  <input name="image" type="file" require>
</div>

<div>
<input type="submit" class="btn btn-success" value="Add Cakes">
</div>

</form>
</div>

</div>

    
   @include('admin.script')
    
  </body>
</html>