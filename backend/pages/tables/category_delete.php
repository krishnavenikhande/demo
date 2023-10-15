<?php
				   
					$con=mysqli_connect("localhost","root","","shopping");
					$id=$_GET['sid'];
					$sql="delete from category where id=$id";

					if(mysqli_query($con,$sql))
					{
						echo "Record Delete";
					}
					else
					{
						echo "error".mysqli_error($con);
					}

?>