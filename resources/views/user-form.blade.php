<div>
    <h1>User form</h1>

    <!-- lets handle error messages validation -->

     @if($errors->any())
     @foreach($errors->all() as $error)
     <div style="color: red;">
        {{$error}}
     </div>
     @endforeach
     @endif



    <!-- controller class as adduser -->
    <form action="adduser" method="POST">
        <!-- in laravel we need @csrf token for form validation other wise it shows 404 not found -->
        @csrf
        <div class="input-wrapper">
        <label for="username">Name: </label>
        <input type="text" name="username" placeholder="enter name" class="username" value={{old('username')}}>
        <!-- we use {{old('name')}} for making the input permanent written even when submitted -->

    </div>
    <div class="input-wrapper">
        <label for="user-email">Usermail: </label>
        <input type="text" name="email" placeholder="enter email" class="user-email">
    </div>
    <div class="input-wrapper">
        <label for="City">City: </label>
        <input type="text" name="city" placeholder="enter City" class="City">
    </div>


     <!-- check boxes -->
    <div>
        <h2>User skill</h2>
        <!-- here we are using [] after skill as if we select all three then it should store them in array. -->
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="NODE" id="node">
        <label for="node">NODE</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>

    </div>

    <div>
        <h5>Gender: </h5>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
    </div>
    <div>
        <input type="range" name="age" min="18" max="100">
    </div>

    <div>
        <button type="submit">Add new User</button>
    </div>
    <style>

        .input-wrapper{
            margin: 10px;
        }
        button{
            border: orange 1px solid;
            height: 35px;
            width: 200px;
            border-radius: 2px;
            color: orange;
            cursor: pointer;
        }
    </style>

    </form>
</div>
<!-- now when we submit it it should go to url, so we need to make controller like UserController -->
