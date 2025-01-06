<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        label
        {
            display: inline-block;
            width: 200px;
            color: white;
        }
        .div_deg
        {
            padding: 10px;
        }


    </style>

  </head>
  <body>


    
    @include('admin.header')
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Ajouter nourriture</h1>
            <br>
            <br>

         <form action="{{url('upload_food')}}"method="post" enctype="multipart/form-data">
            @csrf

            <div class="div_deg">
                <label for="">Food title</label>
                <input type="text" name="title" required>

            </div>

            <div class="div_deg">
                <label for="">Food details</label>
                <textarea name="details" cols="30" rows="10" required>

                </textarea>

            </div>

            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price"  required>

            </div>

            <div class="div_deg">
                <label for="">Image</label>
                <input type="file" name="img"  required>

            </div>

            <div class="div_deg">
                
                <input type="submit" value="Add food" class="btn btn-danger">

            </div>

         </form>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>