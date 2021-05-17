<!DOCTYPE html>
<!-- create_table.php -->
<html>
	<head>
		<meta charset = "utf-8">
		<title>create tables</title>
	</head>
	<body>
		<?php
			// Connect to MySQL
			$connection = mysqli_connect( "localhost", "root", "" )                      
			or die( "Could not connect to database </body></html>" );
			
			// check if store database is exist
			if (mysqli_select_db( $connection,"store"))
			{
				$query = "DROP DATABASE store;";
				if ( !( $resultdb = mysqli_query( $connection,$query) ) ) 
				{
					print( "<p>Could not execute query!</p>" );
					die( mysqli_error() . "</body></html>" );
				} // end if
			}
			else  {
				echo ( "store Database does not exist before<br>" );
			}
			
			// query store database
			$query = "CREATE DATABASE store;";
			if ( !( $resultdb = mysqli_query( $connection,$query ) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "store Database created<br>" );
			}
			
			// open store database
			mysqli_select_db( $connection,"store" )
            or die( "Could not open store database </body></html>" );
			
			//** query Admin table , in store database
			$query2 = "CREATE TABLE Admin(admin_id number(5),name varchar2(10),phone_num number(10),
			address varchar2(20))";
			if ( !( $result_table = mysqli_query(  $connection,$query2) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "Table Admin created<br>" );
			}			
			
			// query add data1 into Admin table
			$add_data1 = "Insert Into Admin (admin_id, name ,phone_num ,address )
         	values (11456,'Ali',05050786746,'street nine')";
			if ( !( $result1 = mysqli_query( $connection ,$add_data1) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			// query add data2 into Admin table
			$add_data2 = "Insert Into Admin (admin_id, name ,phone_num ,address )
         	values (11342,'Sara',05050636045,'street five')";
			if ( !( $result2 = mysqli_query( $connection, $add_data2 ) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			
			// query Website table , in store database
			$query3 = "CREATE TABLE Website(website_URL varchar2(25), website_title varchar2(15))";
			if ( !( $result_table = mysqli_query(  $connection,$query3) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "Table Website created<br>" );
			}
			
		    // query add data1 into Website table
			$add_data1 = "Insert Into Website (website_URL, website_title)
         	values ('file:///C:/Users/USER/Documents/projectFile/homepage.html','sport sprit')";
			if ( !( $result1 = mysqli_query( $connection ,$add_data1) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
	
			
			// query Order table , in store database
			$query4 = "CREATE TABLE Order(order_id number(5),shipping_city varchar2(10),
			shipping_address varchar2(20), order_date Date,order_quantity number(20))";
			if ( !( $result_table = mysqli_query(  $connection,$query4) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "Table Order created<br>" );
			}
			
			    // query add data1 into Order table
			$add_data1 = "Insert Into Order (order_id ,shipping_city shipping_address, 
			order_date ,order_quantity )
         	values (6750,'Riyadh','street six','12-oct-2021',5)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data1) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			    // query add data2 into Order table
			$add_data2 = "Insert Into Order (order_id ,shipping_city shipping_address, 
			order_date ,order_quantity )
         	values (8630,'Damam','street two','16-may-2021, 9)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data2) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			
			// query Product table , in store database
			$query4 = "CREATE TABLE Product(product_id number(5), product_name varchar2(15),
			producct_cost numeber(10), product_image blob(10), product_units number(25))";
			if ( !( $result_table = mysqli_query(  $connection,$query4) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "Table Product created<br>" );
			}
			
			    // query add data1 into Product table
			$add_data1 = "Insert Into Product (product_id, product_name,producct_cost,product_image, 
			product_units)
         	values (6750,'Elliptical', 6,416 ,'pic3.jpg', 8)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data1) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			    // query add data2 into Product table
			$add_data2 = "Insert Into Product (product_id, product_name,producct_cost,product_image, 
			product_units)
         	values (6380,'tairMaster Step-mill', 38,871 ,'pic1.jpg', 5)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data2) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			
			// query Customer table , in store database
			$query5 = "CREATE TABLE Customer(ocustomer_id number(5),customer_name varchar2(10),
			customer_address varchar2(20), phone_num number(10), zip number(8))";
			if ( !( $result_table = mysqli_query(  $connection,$query5) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			else{
				echo ( "Table Customer created<br>" );
			}
			
			    // query add data1 into Customer table
			$add_data1 = "Insert Into Customer (ocustomer_id,customer_name,
			customer_address , phone_num, zip)
         	values (2450,'Raghad','street one',0550546894,4313)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data1) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			    // query add data2 into Customer table
			$add_data2 = "Insert Into Customer (ocustomer_id,customer_name,
			customer_address , phone_num, zip)
         	values (2890,'Amal','street four',0550512994,4271)";
			if ( !( $result1 = mysqli_query( $connection ,$add_data2) ) ) 
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error() . "</body></html>" );
			} // end if
			
			
			mysqli_close( $connection ); 
			
			echo ( "9 rows inserted<br>" );
			
					
			
		?>
	</body>
</html>

