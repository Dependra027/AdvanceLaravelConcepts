<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
     <h1>Add details for sending email</h1>
     <form action="send-mail" method="post">
        <!-- take name same as in MailController -->
         @csrf
         <input type="text" name="to" placeholder="Enter the email Address">
         <br>
         <br>
         <input type="text" name="subject" placeholder="Enter the email Subject">
         <br>
         <br>
         <textarea type="text" name="message" placeholder="Enter the message"></textarea>
         <br>
         <br>
         <button>Send</button>

         <!-- now this data has to be get into the MailController -->

     </form>
</div>
