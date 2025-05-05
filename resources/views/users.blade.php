<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
     <h1>Users List</h1>
    <!-- to show all data of the table
     {{
        print_r($users);
     }}
-->

<!-- lets make table and show data using foreach loop -->
     <table border="1">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>mail</td>
        </tr>
        
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
     </table>
</div>
