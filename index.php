<!DOCTYPE html>
             <html lang="en" dir="ltr">
               <head>
                 <meta charset="utf-8">
                 <title></title>
               </head>
     <body>
     </select>
       <div class="container">
             <div class="row">
                <div class="col-6">
                <h2><?php echo "Nerissa C. Maglente";?></h4>
            </div>

           <form id="calculator" class="" action="" method="post">
         <div class="col-4">
           <h3>CALCULATOR</h3>
           <p>Input First Number:</p>
           <br>
           <input type="number" name="input1" placeholder="" required >

           <br><br>
           <p>Input Second Number:</p>
           <br>
           <input type="number" name="input2" placeholder="" required>
           <br><br>

           <button type="submit" name="add" value="add">+</button>
           <button type="submit" name="subtract" value="subtract">-</button>
           <button type="submit" name="multiplication" value="multiplication">*</button>
           <button type="submit" name="division" value="division">/</button>
           <br>
           </form>
           <p>Answer</p>
                       <type="text"  name="name"  value="<?php echo @$res;?>">
                         <?php
                             if (isset($_POST['add'])) {
                               $num1 = $_POST['input1'];
                               $num2 = $_POST['input2'];
                               $res = $num1 + $num2;
                               echo $res;
                             }
                             if (isset($_POST['subtract'])) {
                               $num1 = $_POST['input1'];
                               $num2 = $_POST['input2'];
                               $res = $num1 - $num2;
                               echo $res;
                             }
                             if (isset($_POST['multiplication'])) {
                               $num1 = $_POST['input1'];
                               $num2 = $_POST['input2'];
                               $res = $num1 * $num2;
                               echo $res;
                             }
                             if (isset($_POST['divide'])) {
                               $num1 = $_POST['input1'];
                               $num2 = $_POST['input2'];
                               $res = $num1 / $num2;
                               echo $res;
                             }

                            ?>

                   </div>


           <form id="GCD" class="" action="" method="post" >
         <div class="col-4">
           <h3>FINDING GCD</h3>
           <p>Input First Number:</p>
           <br>
           <input type="number" name="gcd1" placeholder="" required>

           <br><br>
           <p>Input Second Number:</p>
           <br>
           <input type="number" name="gcd2"placeholder="" required>
           <br><br>
           <button type="submit" name="gcd">Submit</button>
           </form>
                      <p>Answer</p>

                           <?php
                         if(isset($_POST['gcd']))
                         {
                           $gcd1 = $_POST['gcd1'];
                           $gcd2 = $_POST['gcd2'];
                           $gcd = $_POST['gcd'];

                           if($gcd1 > $gcd2)
                           {
                             $temp = $gcd1;
                             $gcd1 = $gcd2;
                             $gcd2 = $temp;
                           }
                           for($i = 1; $i < ($gcd1 + 1); $i++ )
                           {
                             if ($gcd1%$i == 0 and $gcd2%$i == 0)
                             $gcd = $i;
                           }

                           echo "GCD of $gcd1 and $gcd2 is: $gcd";
                         }
                       ?>

         </div>
       </div>
     </div>

     <style media="screen">
           h2
           {
             position: relative; left: 100px; top: 190px;
           }
           #calculator
           {
             position: relative; left: 400px; top: 105px;
           }
           #GCD
           {
             position: relative; left: 700px; top: -210px;
           }
         </style>

</body>
</html>
