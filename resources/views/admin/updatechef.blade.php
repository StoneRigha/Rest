<x-app-layout>

<a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    
  </head>
  <body>

  <div class="container-scroller">  
  @include('admin.navbar')


  <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  
      <div>
          <label for="">Chef Name</label>
          <input style="color: black;" type="text" type="name" value="{{$data->name}}">
      </div>

      <div>
          <label for="">Speciality</label>
          <input style="color: black;" type="text" type="name" value="{{$data->speciality}}">
      </div>
    

      <div>
          <label for=""> Old Image</label>
          <img height="200" width="200" src="/chefimage/{{$data->image}}" alt="">
      </div>

      <div>
          <label for="">New Image</label>
          <input type="file" name="image" required="">
      </div>

      <div>
          <input style="color: black;" type="submit" value="update" required="">
      </div>
  </form>

  </div>

  
  
   @include('admin.admincss')
   @include('admin.adminscript')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>



 





