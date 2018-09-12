<html>  
<body>  
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
   <form method="post" name="frm" id="frm">  
   <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">Programming Language:</td>  
   </tr>  
   <tr>  
      <td>Ruby</td>  
      <td><input type="checkbox" name="code[]" value="Ruby" ></td>  
   </tr>  
   <tr>  
      <td>Perl</td>  
      <td><input type="checkbox" name="code[]" value="Perl" ></td>  
   </tr>  
   <tr>  
      <td>Python</td>  
      <td><input type="checkbox" name="code[]" value="Python" ></td>  
   </tr>  
   <tr>  
      <td>Php</td>  
      <td><input type="checkbox" name="code[]" value="Php" ></td>  
   </tr>  
   <tr>  
      <td>
          <a class='btn btn-primary' onclick="document.forms['frm'].submit()" >Aceptar</a>
      </td> 
      <td></td> 
   </tr>  
</table>  
</div>  
</form> 


       <?php

           if(isset($_POST['code']))
    {

        $action=implode(',',$_REQUEST['code']);
        header('location:index.php?valores='.$action.'');
    }  

?>

</body>  
</html>  
