<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
     <h1>Upload file</h1>

     <form action="uploading" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button>upload file</button>
     </form>
</div>
