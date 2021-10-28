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

   <div style="position:relative; top: 60px; right: -150px;">
       <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

       @csrf
           <div>
               <label>Title</label>
               <input style="color:black" type="text" name="title" value="{{$data->title}}" required>
           </div>

           <div>
               <label>Price</label>
               <input style="color:black" type="text" name="price" value="{{$data->price}}" required>
           </div>

           <div>
               <label>Old Image</label>
               <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">

           <div>
               <label>New Image</label>
               <input type="file" name="image" placeholder="upload image" required>
           </div>

           <div>
               <label>Description</label>
               <input style="color:black" type="text" name="description"  value="{{$data->description}}" required>
           </div>
           <div>
               <input style="color:black" type="submit" value="save">
           </div>
       </form>

       <div>

  </div>



   
   @include('admin.admincss')
   @include('admin.adminscript')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>



 





