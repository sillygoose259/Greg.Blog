<?php
        require_once (__DIR__ . "/../model/config.php");
?>


<h1>Create Blog Post</h1>

<form method = "post" action = "<?php echo $path . "controller/create-post.php" ?>">
 <div>
     <label for="title">Title :</label>
     <input type ="text" name = "title"/>
     <!-- Label the title of your entry -->
 </div>
     
 <div>
     <label for="post">Post :</label> 
     <!-- adds a text box where you can enter in text -->
     <textarea name="post"></textarea>
</div>
    <div>
        <button type = "Submit"Submit</button> <!--a button to submit your blogs -->
    </div>
</form>