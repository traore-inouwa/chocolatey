<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

  </head>
  <body>


    
    @include('admin.header')
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <div class="card-body">
             <a href="{{route('personnels.add')}}" class="btn btn-info" title="Add new staff">Add new staff</a>

              <br\>
              <br\>
              <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Firstname</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>fifine</td>
                            <td>ama</td>
                            <td>222332</td>
                            <td>ama@gmail.com</td>


                            <td>
                                <a href="" title="View staff"><button class="btn btn-info"> <i class="fa-fa-eye" aria-hidden="true"></i> View </button></a>
                                <a href="" title="Edit staff"><button class="btn btn-warning">  <i class="fa-fa-pencil-square-o" aria-hidden="true"></i> Edit </button></a>
                                <a href="" title="Delete staff"><button class="btn btn-danger">  <i class="fa-fa-pencil-square-o" aria-hidden="true"></i> Delete </button></a>
                            </td>
                        </tr>
                    </tbody>

                </table>

              </div>
           </div>
          


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>