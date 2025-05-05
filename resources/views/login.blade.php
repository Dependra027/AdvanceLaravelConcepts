<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h1>Login</h1>

    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder="enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter the password">
        <br>
        <br>
        <button>login</button>
    </form>
</div>
