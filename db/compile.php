<?php
session_start();
	$languageID=$_POST["language"];

		switch($languageID)
			{
				case "c":
				{
					include("./compilers/c.php");
					break;
				}
				case "glib":
				{
					include("./compilers/glib.php");
					break;
				}
				case "nvcc":
				{
					include("./compilers/nvcc.php");
					break;
				}

				case "cpp":
				{
					include("./compilers/cpp.php");
					//echo $output;
					break;
				}
				case "java":
				{
					include("./compilers/java.php");
					break;
				}

			}
?>
