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
<h1>Voir les commandes</h1>




            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
           
          
            @endif
            
            <table>

                <tr>

                    <th>#</th>
                    <th>Numéro table</th>
                    <th>Nom du personnel</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Actions</th>
                </tr>

@php
    $ide = 1;
@endphp
                @foreach ($nouvel_comds as $nouvel_comd)

                <tr>
                    <td>{{$ide}}</td>
                    <td>{{$nouvel_comd->num_tab}}</td>
                    <td>{{$nouvel_comd->name_personnel}}</td>
                    <td>{{$nouvel_comd->date}}</td>
                    <td>{{$nouvel_comd->montant}}</td>

                    <td>
                      <a href="/update_comd/{{$nouvel_comd->id}}" class="btn btn-info">Update</a>
                      <a href="/delete_comd/{{$nouvel_comd->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @php
                    $ide +=1;
                @endphp

                @endforeach

                
               
            </table>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('gerant.js')
  </body>
</html>