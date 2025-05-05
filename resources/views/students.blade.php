<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->

    <!-- making view for students model -->
     <h1>students data</h1>

     <!-- {{
        print_r($data);
     }}
-->

<table border="1">
    <tr>
        <td>name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>
    @foreach($data as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->batch}}</td>
    </tr>
    @endforeach
</table>
</div>
