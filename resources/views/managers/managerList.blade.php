<p>manager listttt</p>
<?php
  foreach ($users  as $user){
      echo '<li>'.$user->name.'</li><li>'.$user->email.'</li><br><li>'.$user->state.'</li><br>'; 
    
    }
?> 
