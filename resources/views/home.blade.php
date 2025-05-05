<x-message-banner/>
<h1>Home Page</h1>

<!-- if you want current page with url generation. It is used to see in which url the view is working as there could be many routename for same view -->
 {{URL::current()}}

<br>
 <!-- other way to write it -->
  {{url()->current()}}

 <h2>
    {{URL::full()}}
    <!-- it gives you full url even if something is added in url after -->
<br>
<!-- other way -->
 {{url()->full()}}
 </h2>

 <!-- to get previous url for a viewport -->
 {{URL::previous()}}
<style>
    .success{
        background:lightgreen;
        color: green;
        border-radius: 3px;
        padding: 3px 10px;
    }
</style>
