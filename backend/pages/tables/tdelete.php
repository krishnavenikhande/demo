<?php
				   
					$con=mysqli_connect("localhost","root","","project");
					$id=$_GET['sid'];
					$sql="delete from teacher where id=$id";

					if(mysqli_query($con,$sql))
					{
						echo "Record Delete";
					}
					else
					{
						echo "error".mysqli_error($con);
					}

?>