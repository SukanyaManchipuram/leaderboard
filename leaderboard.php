<?php
$con=mysqli_connect("localhost","root","","leader");
?>
<html>
    <head>
        <title>Leader Board</title>
        <link rel="stylesheet" href="leader.css" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </head>
    <body style="background-color: #f3f3f3f;">
        <div class="row">
        <nav class="navbar navbar-inverse navbar-fixed-top " >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href=""><img height="20" id="i1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStKF9hZZvT9YjQBrum5fLrv7EKcp3o8ia4Ko-TlhvrPsC0TWVI" class="navbar-brand">
               </a> </div>
            
            <div class="collapse navbar-collapse" id="mybar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="taskss.html" >
                            <span class="glyphicon glyphicon-user"></span>Tasks
                        </a>
                    </li>
                    <li>
                        <a href="login.php">
                            <span class="glyphicon glyphicon-log-in"></span> Login
                        </a>
                    </li>
                    <li>
                        <a href="reg.php">
                             Register
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        </div>
        <br><br>
        
            <div class="row rr">
                <div class="col-sm-12 col-md-12">
                    <div class="top">
                     <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="con1">
                            <div class="col-sm-12">
                            <input max-width="680"type="text" class="form-control fc1" placeholder="Search by name">
                            <span class="glyphicon glyphicon-search"></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-12 col-md-12">
                <div class="toplist top">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card1">
                                <div class="win">
                                     <center>
                                    <img width="150" height="150" src="http://profilepicturesdp.com/wp-content/uploads/2018/06/128x128-profile-picture-7.png" alt="person1">
                                        <h3>Hermoine</h3>
                                        <img  width="40" height="40" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/VvGXRm-hlilcbm235/animation-award-for-the-first-place-medal-with-number-one-gold-garland-and-red-ribbon-medal-sparkles-and-shimmers_4_lq-qkzhl__F0000.png" alt="medal">
                                        <p>(Team id:1)<br>15</p>
                                        <a href="" class="view">View</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card1">
                                <div class="win">
                                     <center>
                                    <img width="150" height="150" src="https://freeiconshop.com/wp-content/uploads/edd/person-girl-outline-filled.png" alt="person1">
                                        <h3>Daniel</h3>
                                        <img  width="40" height="40" src="https://img.freepik.com/free-vector/silvery-medal-design_1166-23.jpg?size=338&ext=jpg" alt="medal">
                                        <p>(Team id:11)<br>14</p>
                                        <a href="" class="view">View</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card1">
                                <div class="win">
                                     <center>
                                         <img width="150" height="150"  src="https://cdn1.iconfinder.com/data/icons/e-commerce-91/512/shopping11-512.png" alt="person1">
                                        <h3>Harry</h3>
                                        <img width="40" src="http://worldartsme.com/images/bronze-level-clipart-1.jpg">
                                        <p>(Team id:111)<br>12</p>
                                        <a href="" class="view">View</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="others">
                        <div class="tab">
                            
							<table>
                            <tr><td><u>Index</u></td><td><u>Picture</u></td><td><u>Name</u></td><td><u>TeamId</u></td><td><u>Score</u><td></tr>
                                <?php
								 
                             
                             $q= "SELECT ind,name,id,pic,points FROM LEADER.LEAD order by points desc";
                                $res=mysqli_query($con,$q)or die(mysqli_error($con));                                
                                while($row=mysqli_fetch_array($res))
                                {
								echo "<tr><td>";
								echo $row['ind'];
								echo "</td><td>";
							    ?>
								<img width="50" height="50" src='data:image/jpeg;base64,<?php echo base64_encode( $row['pic'] ); ?>' />
								<?php
								echo "</td><td>";
								echo $row['name'];
								echo "</td><td>";
								echo $row['id'];
								echo "</td><td>";
								echo $row['points'];
								echo "</td></tr>";
                            }
                            echo " </table>"
							?>
                                
								
								<!--<table>
  <tr>
    <td>4.</td>
	<td><img width="50" height="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgkNVik7_VynPHJDCR8HQtlSZNDdRyVlDgSJxG9gaEes5tB4WEdQ" alt="1">
	<td>Susmitha</td>
    <td>ID:2</td>
	<td>10</td>
  </tr>
  <tr>
    <td>5.</td>
	<td> <img width="50" height="50" src="http://www.bvc-schottwien.at/wordpress/wp-content/uploads/2016/10/avatar-male.png" alt="2">
    <td>Jackson</td>
	<td>5</td>
    <td>8</td>
  </tr>
  <tr>
  <td>6.</td>
  <td><img width="50" height="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-TVvZNuB6uMgQadw4oYTRlPJsqyeWelnZrSLQkYtA7WoujfW4" alt="3">
    <td>John</td>
    <td>3</td>
    <td>8</td>
  </tr>
  <td>7.</td>
  <td><img width="50" height="50" src="https://image.flaticon.com/icons/png/512/163/163848.png" alt="3">
    <td>Jahnvi</td>
    <td>8</td>
    <td>5</td>
  </tr><td>8.</td>
  <td><img width="50" height="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-TVvZNuB6uMgQadw4oYTRlPJsqyeWelnZrSLQkYtA7WoujfW4" alt="3">
    <td>Sid</td>
    <td>4</td>
    <td>7</td>
  </tr><td>9.</td>
  <td><img width="50" height="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZdYelJDgbJpCdM35nfXbHGXOg7YuLhQ3pFpCV9ggHhG6ltRXy" alt="3">
    <td>Sam</td>
    <td>3</td>
    <td>8</td>
  </tr>
  <td>10.</td>
  <td><img width="50" height="50" src="https://image.flaticon.com/icons/png/512/163/163807.png" alt="3">
    <td>Chay</td>
    <td>2</td>
    <td>9</td>
  </tr>
  <td>11.</td>
  <td><img width="50" height="50" src="http://www.bvc-schottwien.at/wordpress/wp-content/uploads/2016/10/avatar-male.png" alt="3">
    <td>Jay</td>
    <td>9</td>
    <td>10</td>
  </tr><td>12.</td>
  <td><img width="50" height="50" src="https://image.flaticon.com/icons/png/512/163/163807.png" alt="3">
    <td>Alice</td>
    <td>7</td>
    <td>6</td>
  </tr><td>13.</td>
  <td><img width="50" height="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-TVvZNuB6uMgQadw4oYTRlPJsqyeWelnZrSLQkYtA7WoujfW4" alt="3">
    <td>Bob</td>
    <td>6</td>
    <td>8</td>
  </tr>
  <td>14.</td>
  <td><img width="50" height="50" src="https://image.flaticon.com/icons/png/512/163/163807.png" alt="3">
    <td>John</td>
    <td>3</td>
    <td>8</td>
  </tr>
</table>-->

<br>

                        </div>
                        
                </div> 
                </div>
                
                </div>
        </div>
            </div>        
            

    </body>
</html>
