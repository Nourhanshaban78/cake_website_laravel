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
        <form action="{{url('addchef')}}" method="post" enctype="multipart/form-data">
            @csrf

   <div class="mb-3">
  <label  >Name of Chef</label>
  <input type="text" style="color:black"  name="name" placeholder="name of chef">
   </div>

<div class="mb-3">
  <label  >special of Cake</label>
  <input type="text" style="color:black"  name="special" placeholder="speciality">
</div>


<div class="mb-3">
  <label >Image of Chef</label>
  <input name="image" type="file" require>
</div>

<div>
<input type="submit" class="btn btn-success" value="Add Chef">
</div>

</form>
</div>

</div>
    

    
   @include('admin.script')
    
  </body>
</html>