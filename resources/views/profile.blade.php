<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
     <h1>Profile page</h1>

      <!-- lets show flash message -->
     {{session('message')}}
     
      <!-- lets get session here -->
       <h1>{{session('user')}}</h1>

       <!-- or if we want to use condition to find session is working -->
        @if(session('user'))
        <h1>Welcome, {{session('user')}}</h1>
        @else
        <h1>No user found in session <a href="login">login</a></h1>
        @endif

        <!-- now let delete the sessions -->
         <a href="logout">logout</a>

</div>
