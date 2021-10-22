<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
      
     <div class="container-scroller">
          <x-app-layout>
                          
    </x-app-layout>
    @include('admin.navbar')
    <!-- container-scroller -->
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($user as $users)
         <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      @if ($users->usertype === '0')
          <td><a href="{{route('delete', $users->id)}}" class='btn btn-danger'>Delete</a></td>
      @else
          <td><a href="" class='btn btn-success'>Manage</a></td>
      @endif
      
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>