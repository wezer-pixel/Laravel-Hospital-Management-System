

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }

    </style>
    @include('admin.css')

    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

       <div class="container" align="center" style="padding-top: 100px">

        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x
            </button>
            {{session()->get('message')}}
        </div>

        @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div style="padding: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color:black" name="name" placeholder="Enter name" style="color:black" required>
            </div>

            <div style="padding: 15px">
                <label>Phone Number</label>
                <input type="number" style="color:black" name="number" placeholder="Enter Number" style="color:black" required>
            </div>

            <div style="padding: 15px">
                <label>Specialty</label>
                <select name="specialty" style="color: black; width: 200px" required>

                    <option >--Select--</option>
                    <option value="neurology">Neurology</option>
                    <option value="cardiology">Cardiology</option>
                    <option value="pediatrics">Pediatrics</option>
                    <option value="neurosurgery">Neurosurgery</option>

                </select>
            </div>

            <div style="padding: 15px">
                <label>Room Number</label>
                <input type="text" style="color:black" name="room" placeholder="Enter Room Number" style="color:black" required>
            </div>

            <div style="padding: 15px">
                <label>Location</label>
                <input type="text" style="color:black" name="location" placeholder="Enter Doctor Location" style="color:black" required>
            </div>

            <div style="padding: 15px">
                <label>Doctor Image</label>
                <input type="file" name="file" required>

            </div>

            <div style="padding: 15px">

                <input type="submit" class="btn btn-success">

            </div>


        </form>


       </div>

        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
