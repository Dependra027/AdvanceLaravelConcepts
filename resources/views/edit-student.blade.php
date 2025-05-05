<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
     <h1>Edit Student</h1>

     <!-- create a form for populate that is edit student -->
     <form action="/edit-student/{{$data->id}}" method="post">
        @csrf

        <!-- to update the edit data into db we need to make a hidden put method -->
         <input type="hidden" name="_method" value="put" />

         <!-- edit form -->
        <input type="text" name="name" value="{{$data->name}}" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" value="{{$data->email}}" placeholder="enter email">
        <br>
        <br>
        <input type="number" name="phone" value="{{$data->phone}}" placeholder="enter phone">
        <br>
        <br>
        <button>Update</button>
        <a href="/add">Cancel</a>
     </form>
    </div>
