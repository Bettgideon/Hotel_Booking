
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Hotel Booking Management</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel Booking Management</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="accountInfo.php"><?php echo $_SESSION['fname']?> <i class="fa fa-user" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</i></a>
                </li>
                <?php
                if($_SESSION["admin"]=='YES'){
                    echo '<li class="nav-item"><a class="nav-link" href="dashboard.php">Admin</a></li>';
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact <i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="image" id="image">
        <a><img src="https://i.imgur.com/OYzi2Dm.png" title="source: imgur.com" style="width: 100%"/></a>
    </section>

    <div class="content" style="text-align: center;
            position: absolute;
            top: 25%;
            left: 0;
            right: 0;
            overflow: hidden;
            z-index: 5;
            color: #fff;">
        <h1 style="-webkit-text-stroke-width: 2px;-webkit-text-stroke-color: black;
        font-size: 200px; font-family:brush script mt">Welcome</h1>
    </div>
    
    <div class="container mt-4" style="width: 1500px;">
        <h2>Book Rooms</h2>
        <hr style="color: black; height: 1.5px;">
        
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="ChkInDate" class="form-label">Check-In:</label>
                    <input type="date" class="form-control" name="CheckIn" id="ChkInDate">
                </div>
                <div class="col-md-6">
                    <label for="ChkOutDate" class="form-label">Check-Out:</label>
                    <input type="date" class="form-control" name="CheckOut" id="ChkOutDate">
                </div>
            </div>
            <br>
            <div class="col-6">
                <button type="submit" name="go" class="btn btn-primary">Go</button>
            </div>
            <br>
            <h4 style="text-align: center;"><?php echo $m?></h4>
            <div class="row" style="background: orange; margin: 2%; border-radius: 20px;">
                <div class="col-md-4" style="padding: 30px;">
                    <img src="https://i.imgur.com/bUisFpo.png" title="source: imgur.com" style="width: 100%; border: 4px solid white; border-radius: 10px; margin-top: 12px;"/>
                </div>
                <div class="col-md-4" style="padding: 30px;">
                    <h3>Standard (Single)</h3>
                    <table>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Maximum Occupancy</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">1 Person/Room</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Nightly Price/Room</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;font-weight: bold;">
                                <?php 
                                    if($_SESSION["dpSS"]>0){
                                        echo "<s style='color: darkred;'>&#8377;".$_SESSION['pSS']."</s>&nbsp;&#8377;".$_SESSION["dpSS"];
                                    }
                                    else{
                                        echo "&#8377;".$_SESSION['pSS'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Rooms Available</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['noSS']?></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">No. of Rooms</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">
                                <input type="number" name="nSS" id="nSS" min="0" max="<?php echo $_SESSION['noSS']?>" value="<?php echo $_SESSION['nSS']?>" style="width: 50%;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 40px; padding-top: 35px;">
                <h4>Room Features:</h4>
                    <div style="font-size: 17px; border: 1px solid black; padding: 10px; padding-bottom: 5px; font-style: italic;">
                        <ul>
                        <li>Single Bed</li>
                        <li>1 Person/Room</li>
                        <li>22 inch digital TV</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="background: orange; margin: 2%; border-radius: 20px;">
                <div class="col-md-4" style="padding: 30px;">
                    <img src="https://i.imgur.com/CiFTH6P.png" title="source: imgur.com" style="width: 100%; border: 4px solid white; border-radius: 10px; margin-top: 12px;"/>
                </div>
                <div class="col-md-4" style="padding: 30px;">
                    <h3>Standard (Double)</h3>
                    <table>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Maximum Occupancy</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">2 People/Room</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Nightly Price/Room</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;font-weight: bold;">
                                <?php 
                                
                                    if($_SESSION["dpSD"]>0){
                                        echo "<s style='color: darkred;'>&#8377;".$_SESSION['pSD']."</s>&nbsp;&#8377;".$_SESSION["dpSD"];
                                    }
                                    else{
                                        echo "&#8377;".$_SESSION['pSD'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Rooms Available</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['noSD']?></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">No. of Rooms</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">
                            <input type="number" name="nSD" id="nSD" min="0" max="<?php echo $_SESSION['noSD']?>" value="<?php echo $_SESSION['nSD']?>" style="width: 50%;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 40px; padding-top: 35px;">
                <h4>Room Features:</h4>
                    <div style="font-size: 17px; border: 1px solid black; padding: 10px; padding-bottom: 5px; font-style: italic;">
                        <ul>
                        <li>Double Bed</li>
                        <li>2 People/Room</li>
                        <li>22 inch digital TV</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="background: orange; margin: 2%; border-radius: 20px;">
                <div class="col-md-4" style="padding: 30px;">
                    <img src="https://i.imgur.com/ZgBQnwI.png" title="source: imgur.com" style="width: 100%; border: 4px solid white; border-radius: 10px; margin-top: 12px;"/>
                </div>
                <div class="col-md-4" style="padding: 30px;">
                    <h3>Deluxe (Single)</h3>
                    <table>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Maximum Occupancy</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">1 Person/Room</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"s>Nightly Price/Room</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;font-weight: bold;">
                                <?php 
                                    if($_SESSION["dpDS"]>0){
                                        echo "<s style='color: darkred;'>&#8377;".$_SESSION['pDS']."</s>&nbsp;&#8377;".$_SESSION["dpDS"];
                                    }
                                    else{
                                        echo "&#8377;".$_SESSION['pDS'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Rooms Available</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['noDS']?></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">No. of Rooms</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">
                            <input type="number" name="nDS" id="nDS" min="0" max="<?php echo $_SESSION['noDS']?>" value="<?php echo $_SESSION['nDS']?>" style="width: 50%;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 40px; padding-top: 35px;">
                <h4>Room Features:</h4>
                    <div style="font-size: 17px; border: 1px solid black; padding: 10px; padding-bottom: 5px; font-style: italic;">
                        <ul>
                        <li>Single Bed</li>
                        <li>1 Person/Room</li>
                        <li>32 inch digital TV</li>
                        <li>AC from 9am to 5pm and 10pm-6am</li>
                        <li>WiFi available 24/7</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="background: orange; margin: 2%; border-radius: 20px;">
                <div class="col-md-4" style="padding: 30px;">
                    <img src="https://i.imgur.com/9Z3O837.png" title="source: imgur.com" style="width: 100%; border: 4px solid white; border-radius: 10px; margin-top: 12px;"/>
                </div>
                <div class="col-md-4" style="padding: 30px;">
                    <h3>Deluxe (Double)</h3>
                    <table>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Maximum Occupancy</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">2 People/Room</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Nightly Price/Room</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;font-weight: bold;">
                                <?php 
                                    if($_SESSION["dpDD"]>0){
                                        echo "<s style='color: darkred;'>&#8377;".$_SESSION['pDD']."</s>&nbsp;&#8377;".$_SESSION["dpDD"];
                                    }
                                    else{
                                        echo "&#8377;".$_SESSION['pDD'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Rooms Available</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['noDD']?></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">No. of Rooms</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">
                            <input type="number" name="nDD" id="nDD" min="0" max="<?php echo $_SESSION['noDD']?>" value="<?php echo $_SESSION['nDD']?>" style="width: 50%;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 40px; padding-top: 35px;">
                <h4>Room Features:</h4>
                    <div style="font-size: 17px; border: 1px solid black; padding: 10px; padding-bottom: 5px; font-style: italic;">
                        <ul>
                        <li>Double Bed</li>
                        <li>1 Lawson Sofa</li>
                        <li>2 People/Room</li>
                        <li>32 inch digital TV</li>
                        <li>AC from 9am to 5pm and 10pm-6am</li>
                        <li>WiFi available 24/7</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="background: orange; margin: 2%; border-radius: 20px;">
                <div class="col-md-4" style="padding: 30px;">
                    <img src="https://i.imgur.com/6Ygg842.png" title="source: imgur.com" style="width: 100%; border: 4px solid white; border-radius: 10px; margin-top: 12px;"/>
                </div>
                <div class="col-md-4" style="padding: 30px;">
                    <h3>Deluxe Suite</h3>
                    <table>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Maximum Occupancy</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">2 People/Room</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Nightly Price/Room</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;font-weight: bold;">
                                <?php 
                                    if($_SESSION["dpDSt"]>0){
                                        echo "<s style='color: darkred;'>&#8377;".$_SESSION['pDSt']."</s>&nbsp;&#8377;".$_SESSION["dpDSt"];
                                    }
                                    else{
                                        echo "&#8377;".$_SESSION['pDSt'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">Rooms Available</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['noDSt']?></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">No. of Rooms</th>
                            <td style="border: 1px solid black; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;">
                                <input type="number" name="nDSt" id="nDSt" min="0" max="<?php echo $_SESSION['noDSt']?>" value="<?php echo $_SESSION['nDSt']?>" style="width: 50%;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 40px; padding-top: 35px;">
                <h4>Room Features:</h4>
                    <div style="font-size: 17px; border: 1px solid black; padding: 10px; padding-bottom: 5px; font-style: italic;">
                        <ul>
                            <li>Double Bed</li>
                            <li>1 Sectional Sofa</li>
                            <li>2 People/Room</li>
                            <li>43 inch Smart TV with Hotstar VIP</li>
                            <li>AC available 24/7</li>
                            <li>WiFi available 24/7</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12">
                <button type="submit" name="reserve" class="btn btn-primary" onmouseover="this.style.backgroundColor='rgb(170, 0, 0)';return true;" onmouseout="this.style.backgroundColor='red';return true;" style="background: red; border: red; float: right;">Proceed to Pay</button>
            </div>
            <br><br>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>