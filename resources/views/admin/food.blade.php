<x-app-layout>

<a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
  </head>
  <body>

  <div class="container-scroller">

  @include("admin.navbar")
  <div style="position: relative; top:60px; right:-150px;" >
     <form action="{{'/uploadfood'}}" method="post" enctype="multipart/form-data">
       @csrf
       <div>
       <label>Title</label>
       <input style="color:black" type="text" name="title" placeholder="Write a Title" required>
       </div>

       <div>
       <label>Price</label>
       <input style="color:black" type="num" name="Price" placeholder="price" required>
       </div>

       <div>
       <label>image</label>
       <input type="file" name="image" required>
       </div>

       <div>
       <label>Description</label>
       <input style="color:black" type="text" name="Description" placeholder="Descrption" required>
       </div>

       <div>
         <input style="color:black" type="submit" value="Save" id="">
       </div>
     </form>
   </div>
  
<div style="position:relative; top:60px; right: -150;">
<div>
       <table bgcolor="black">

       <tr>
         <th style="padding: 30px;">Food Name</th>
         <th style="padding: 30px;">Price</th>
         <th style="padding: 30px;">Description</th>
         <th style="padding: 30px;">Image</th>
         <th style="padding: 30px;">Action</th>
         <th style="padding: 30px;">Action</th>
       </tr>

      
       @foreach ($data as $data)

       <tr align="center">
         <td>{{$data->title}}</td>
         <td>{{$data->price}}</td>
         <td>{{$data->description}}</td>
         <td><img src="/foodimage/{{$data->image}}" style="height: 100px; width:100px"></td>
         <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
         <td><a href="{{url('/updateview', $data->id)}}">Update</a>
         
       </tr>

       @endforeach

       </table>

       </div>


       
   </div>

  </div>

   @include('admin.admincss')
   @include('admin.adminscript')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>



 





