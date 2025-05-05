<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
     <h1>Student list</h1>
     <!-- {{print_r($student)}} -->

     <!-- Search form -->
      <form action="search" method="get">
        <input type="text" name="search" value="{{@$search}}" placeholder="Search.." />
        <button>Seacrh</button>
      </form>


     <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Created At</td>
            <td>Operation</td>

        </tr>
        @foreach($student as $std)
        <tr>
            <td>{{$std->name}}</td>
            <td>{{$std->email}}</td>
            <td>{{$std->phone}}</td>
            <td>{{$std->created_at}}</td>
            <!-- add delete option to each field -->
             <td>
            <a href="{{'delete/'.$std->id}}">Delete</a>

            <!-- edit option, ake its route aswell -->
             <a href="{{'edit/'.$std->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
     </table>

     <!-- pagination links -->
     {{$student->links()}}
</div>

<style>
    /* pagination styling */
    .w-5.h-5{
        width: 20px;
    }
</style>
