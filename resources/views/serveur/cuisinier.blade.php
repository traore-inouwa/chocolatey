<!DOCTYPE html>
<html>
  <head> 
    @include('serveur.css')

    <style>
        table
        {
            border: 1px solid skyblue;
            margin: auto;
            width: 800px;
        }

        th
        {
            background: skyblue;
            color: white;
            padding: 10px;
            margin: 10px;
        }

        td
        {
            color: white;
            padding: 10px;

        }
    </style>

  </head>
  <body>


    
    @include('serveur.header')
    @include('serveur.sidebar')

      <div class="page-content">
        <h1>Toutes les nourritures commandées</h1>
        <div class="page-header">
          <div class="container-fluid">
            

           <br>
           <br>

            <div>
              <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numéro de table</th>
                        <th>Nom du personnel</th>
                        <th>Nourriture</th>
                        <th>Date</th>
                    </tr>

                   
                </thead>
                

                @foreach($serveur_cuiss as $serveur_cuis)
                <tr>
                    <td>{{$serveur_cuis->id}}</td>
                    <td>{{$serveur_cuis->num_tab}}</td>
                    <td>{{$serveur_cuis->name_personnel}}</td>
                    <td>{{$serveur_cuis->nourriture}}</td>
                    <td>{{$serveur_cuis->date}}</td>
                    

                </tr>

                @endforeach
              </table>

            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('serveur.js')
  </body>
</html>