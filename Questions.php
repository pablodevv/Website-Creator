<!doctype html>
<html>
  <head>
    

    <title>Create a Website with One Click!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//static.parastorage.com/services/marketing-main-funnel-intro/1.664.0/app.min.css">
    

    <style>


    
    body{
    
    
    background-color: #20303c;

    
    }


    h2{
    
    color: white;
    
    
    }


    span{ 
    
    color: white;


	}


    p{
    
    color: white;


	}


    h1{
    

    margin-top: -100px;
    

	}







    @media (min-width: 320px) and (max-width: 480px) {
  

        h1{
 


        }




        
        ._3EFay{
      
      margin-left: -340px;

      margin-top: -100px;

      width: 730px;



		}


  }
  





    





    </style>

   
  </head>
  <body>
    
    

    <div id="root">



      <div class="_1bXMx"></a><div class="_2tx1o _1ldMM">




      <main class="_2JeEz"><div class="_3EFay">
      <h1 style="color: #20303c;">&nbsp&nbsp&nbsp&nbspPablo Dev</h1>
      

      <div class="_32uVa _1WQJh" data-hook="recommendation">
      
      <div class="_3F_aY"><div>
      

      <h1 style="color: white;">Pablo Dev</h1>
      
      </div>
      </div>
      
      <a data-hook="link-editor" class="_1F2q2" >
      
      <h2 class="_1Himl">Start Building your Website.</h2>
      

<form action="" method="post">





                                    
                                  <div class="form-group">
                                    <label for="exampleInputEmail1" style="color: white;">Website Title</label>
                                    <input type="name" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
    
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1" style="color: white;">Website Content</label>
                                    <textarea class="form-control" name="content" value="" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputPassword1" style="color: white;">Author Name</label>
                                    <input type="text" name="author" value="" class="form-control" id="exampleInputPassword1">
     
                                  </div>

                                      
                                      <button type="submit" name="submit" class="_37z2r" data-hook="recommendation-link">Finish!</button>



                                      </form>





<?php



if(isset($_POST["submit"])){
include 'db.php';



$sql = "INSERT INTO website (title, content, author)
VALUES ('".$_POST["title"]."','".$_POST["content"]."','".$_POST["author"]."')";

if ($conn->query($sql) === TRUE) {
echo "
    <script type= 'text/javascript'>
        alert('New record created successfully');
    </script>";

    header('Location: Website.php?id='.$conn->insert_id);


} 
else 
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
}

$conn->close();
}
        ?>







      </a>
      </div>
      
      <div class="_3ISIe"><div class="_3foda">
      
      </div>
      </div>
      </div>
      </main>
      </div>
      </div>
    </div>
    
    
  </body>
</html>