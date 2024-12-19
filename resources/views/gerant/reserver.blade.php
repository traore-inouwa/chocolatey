<!DOCTYPE html>
<html>
  <head> 
    @include('gerant.css')

    <style>

        table
        {
            border:1px solid skyblue;
            margin: auto;
            width: 1000px;
            margin-top: 100px;

        }

        th 
        {
          background-color: skyblue;
          padding: 20px;
          text-align: center;
          color: white;
          font-size: 18px;
        }

        td
        {
           padding: 10px;
           text-align: center;
           color: white;
           font-weight: bold;
        }
    </style>
  </head>
  <body>


    
    @include('gerant.header')
    @include('gerant.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<br>
<h1>Voir les réservations</h1>




            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
           
          
            @endif
            
            <table>

                <tr>

                    <th>#</th>
                    <th>Phone Number</th>
                    <th>No. of Guest</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>


                @foreach ($book as $book)

                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->phone}}</td>
                    <td>{{$book->guest}}</td>
                    <td>{{$book->date}}</td>
                    <td>{{$book->time}}</td>

                    <td>
                      <a href="/update_reserver_book/{{$book->id}}" class="btn btn-info">Update</a>
                      <a href="/delete_reserver_book/{{$book->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach

                @foreach ($reservations as $reservation)
                    
                <tr>
                  <td>{{$reservation->id}}</td>
                  <td>{{$reservation->phone}}</td>
                  <td>{{$reservation->guest}}</td>
                  <td>{{$reservation->date}}</td>
                  <td>{{$reservation->time}}</td>

                  <td>
                    <a href="/update_reservation/{{$reservation->id}}" class="btn btn-info">Update</a>
                    <a href="/delete_reservation/{{$reservation->id}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>

                @endforeach
               
            </table>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('gerant.js')
  </body>
</html>