<!DOCTYPE html>
<head>
    <title>Convert!</title>
</head>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!--File Linking-->
<link rel="stylesheet" href="conversion.css">
<script src="https://kit.fontawesome.com/0c6ed902b0.js" crossorigin="anonymous"></script>
<script src="main.js"></script>

<!--Responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <header>
        <img src="../convert/images/convert.png" class="logo">
    </header>

    <div class="container" id="deci">
        <div class="row proper">
            <div class="col-sm-2"> 
            </div>
            <div class="col-sm-3">
                <!--Menu-->
                <ul>
                    <li id="mile">mi to km</li><hr>
                    <li id="cm">cm to ft & in</li><hr>
                    <li id="lb">lb to g</li><hr>
                    <li id="db">x2 ^2 /2</li><hr>
                    <li id="pt">pt to gi, qt, & gal</li><hr>
                </ul>
            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-4">

                <!--Input-->
                
               <div>
                   <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                   <div class="form-group">
                        <input type="number" class="form-control" 
                        id="input" name="" placeholder="Select a conversion first">
                        <small id="title" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-success">Convert</button>
                   </form>
               </div>

               <!--Output-->
               <div class="conversion-table">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET"){

                            if (empty($_REQUEST["mileValue"])==0) {
                                $mileValue = $_REQUEST["mileValue"];
                                $kiloValue = 1.61;
                                $miKm = ($mileValue * $kiloValue);
                                
                                     echo'<p class="h5">miles to kilometers</p>';
                                     echo'<center><table>';
                                     echo'<p><b>'; echo$mileValue; echo' mi</b> x 1.60934<hr></p><tr>';
                                     echo'<td class="value">'; echo$miKm; echo'</td>';
                                     echo'<td class="unit"> km</td></tr>';
                                     echo'</center></table>';
                            }
                            else if (empty($_REQUEST["cmValue"])==0){
                                $cmValue = $_REQUEST["cmValue"];
                                $ftValue = 0.0328;
                                $inValue = 0.3937;
                                $ftCM = ($cmValue * $ftValue);
                                $inCM = ($cmValue * $inValue);

                                     echo'<p class="h5">centimeters to feet & inches</p>';
                                     echo'<center><table>';
                                     echo'<p><b>'; echo$cmValue; echo' cm</b><hr></p><tr>';
                                     echo'<td class="value">'; echo$ftCM; echo'</td>';
                                     echo'<td class="unit"> ft</td></tr>';
                                     echo'<td class="value">'; echo$inCM; echo'</td>';
                                     echo'<td class="unit"> in</td></tr>';
                                     echo'</center></table>';
                            } 
                            else if (empty($_REQUEST["lbValue"])==0){
                                $lbValue = $_REQUEST["lbValue"];
                                $gValue = 454;
                                $lbG = ($lbValue * $gValue);

                                     echo'<p class="h5">pounds to grams</p>';
                                     echo'<center><table>';
                                     echo'<p><b>'; echo$lbValue; echo' lb</b><hr></p><tr>';
                                     echo'<td class="value">'; echo$lbG; echo'</td>';
                                     echo'<td class="unit"> g</td></tr>';
                                     echo'</center></table>';
                            } 
                            else if (empty($_REQUEST["dbValue"])==0){
                                $dbValue = $_REQUEST["dbValue"];
                                $double = ($dbValue * 2);
                                $square = ($dbValue * $dbValue);
                                $half = ($dbValue / 2);

                                     echo'<p class="h5">double, square, & half</p>';
                                     echo'<center><table>';
                                     echo'<p><b>'; echo$dbValue; echo'</b><hr></p><tr>';
                                     echo'<td class="value">'; echo$double; echo'</td>';
                                     echo'<td class="unit"> double</td></tr>';
                                     echo'<td class="value">'; echo$square; echo'</td>';
                                     echo'<td class="unit"> square</td></tr>';
                                     echo'<td class="value">'; echo$half; echo'</td>';
                                     echo'<td class="unit"> half</td></tr>';
                                     echo'</center></table>';
                            } 
                            else if (empty($_REQUEST["ptValue"])==0){
                                $ptValue = $_REQUEST["ptValue"];
                                $giValue = 4;
                                $qtValue = 0.50;
                                $galValue = 0.125;

                                $ptGi = ($ptValue * $giValue);
                                $ptQt = ($ptValue * $qtValue);
                                $ptGal = ($ptValue * $galValue);

                                     echo'<p class="h5">pint to gills, quarts, & gallons</p>';
                                     echo'<center><table>';
                                     echo'<p><b>'; echo$ptValue; echo' pt</b><hr></p><tr>';
                                     echo'<td class="value">'; echo$ptGi; echo'</td>';
                                     echo'<td class="unit"> gi</td></tr>';
                                     echo'<td class="value">'; echo$ptQt; echo'</td>';
                                     echo'<td class="unit"> qt</td></tr>';
                                     echo'<td class="value">'; echo$ptGal; echo'</td>';
                                     echo'<td class="unit"> gal</td></tr>';
                                     echo'</center></table>';
                            } 
                            else {
                                echo '<p class="h4">The activity is null</p>';
                            }
                        }
                    ?>
               </div>

            </div>
            <!--Ending-->

            <div class="col-sm-2">
            </div>
        </div>
    </div>
</body>
</html>