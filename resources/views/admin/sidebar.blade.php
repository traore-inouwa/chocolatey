<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Admin</h1>
         
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
      
    
       
             
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Staff </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('ajouter')}}">Add Personnels</a></li>
                  <li><a href="{{url('personnels')}}">View personnels</a></li>
                 
                </ul>
              </li>

             
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_food')}}">Add Food</a></li>
                  <li><a href="{{url('view_food')}}">View Food</a></li>
                 
                </ul>
              </li>


              
              <li>
                <a href="{{url('orders')}}"> <i class="icon-logout"></i>  historique  Commandes</blockquote>
              </a>

              </li>

              

              

              </li>

      </ul>
      
   
    </nav>
    <!-- Sidebar Navigation end-->