
<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
$con = mysqli_connect('localhost','root');
       mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Quiz World</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
            $counter = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            
            $count = count($_POST['quizcheck']);
            
            ?>

        	<td>
            <?php
            echo "Out of 5, You have attempt ".$count." options."; ?>
            </td>
        
          	
            <?php
            
            $selected = $_POST['quizcheck'];
            
            $q= " select * from questions ";
            $query = mysqli_query($con,$q);
            $i = 1;
            $result = 0;
            while($i < count($selected) && $rows = mysqli_fetch_array($query)) {
              // print_r($rows);
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){				
            				$counter++;
            				$result++;
            			}else{      
            				$counter++;
            			}					
            		$i++;		
            	}
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $result.".";
	            }
	            else{
                echo "<b>Please Answer atleast one question.</b>";
                $result = 0;
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

                $name = $_SESSION['username'];
                $finalresult="insert into user(username,totalques,answerscorrect) values('$name','5','$result')" ;
                $queryresult = mysqli_query($con,$finalresult);
            ?>


      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>

       

    <!-- if(isset($_POST['submit'])){
           if(!empty(($_POST['quizcheck']))){
               $count = count($_POST['quizcheck']);

               echo "Out of 5 , you have selected " .$count. " options";
           $result = 0;
           $i = 1;
               $selected = $_POST['quizcheck'];
            print_r($selected);

            $q = "select * from questions";
            $query = mysqli_query($con, $q);

            while($rows = mysqli_fetch_array($query) ){
                $checked = $rows['ans_id'] == $selected[$i];
                if($checked){
                    $result++;
                }
                $i++;
            }

            echo "<br> Your total score is".$result;
            }

       }

       $name = $_SESSION['username'];
       $finalresult="insert into user(username,totalques,answerscorrect) values('$name','5','$result')" ;
       $queryresult = mysqli_query($con,$finalresult);
?> -->


