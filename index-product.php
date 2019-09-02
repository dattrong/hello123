<!DOCTYPE html>
<html>
<title>BABY LADY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body style="background: palegoldenrod" style="max-width: 100%" >

        <div style="margin-left:10%">
            ...Welcome to Baby's world...
        </div>

        <div class="w3-main" style="margin-left:300px">
            <header>


                <div class="w3-container ">
                    <center><img src="images/1.jpg" style="margin-right:30%" style="max-width: 100%" ></center>
                    <div class="w3-bar w3-papayawhip" style="padding-left: 20%">
                        <a href="index.php"class="w3-bar-item w3-button w3-mobile" >Home</a>
                        <a href="#Princess" class="w3-bar-item w3-button w3-mobile">Prinsess</a>
                        <a href="#BlackBaby" class="w3-bar-item w3-button w3-mobile">BlackBaby</a>
                        <a href="#Mermaid" class="w3-bar-item w3-button w3-mobile">Mermaid</a>

                    </div>
                    <div class="list w3-row" style="color: plum">
                        <div class="" id="Princess" style="width: 500px"><h2>Princess</h2>
                            <img class="mySlides" src="images/8.jpg" style="width:100%">
                        </div>        
                        <div class="list w3-row" style="color: plum">
                            <div class=""id="BlackBaby" style="width: 500px"><h2>BlackBaby</h2>
                                <img class="mySlides" src="images/7.jpg" style="width:100%">
                                <div class="list w3-row" style="color: plum">
                                    <div class=""id="Mermaid" style="width: 500px"><h2>Mermaid</h2>
                                        <img class="mySlides" src="images/3.jpg" style="width:100%">


                                    </div>
                                </div>
                                </header>
 
  
    <div class="container w3-padding-large" id="portfolio">
        <div class="w3-bottombar">
            
            <div class="w3-panel w3-border w3-sand w3-round-large w3-padding-16">        
                <p class="w3-xlarge w3-serif " style="text-decoration: underline">CATALOGUE</p>             

                <?php 
                    include("catalogue.php");
                ?>

                <?php
                echo "<table >";
                
                    
                    echo "<tr>";
                    foreach ($resultSet as $row)
                    {
                        for($i=1;$i<=5;$i++)
                        {
                            echo "<th>";
                                if($row!=false)
                                {
                                    $ID = $row ['id'];
                                    $link="?direct=show_product&id=".$ID;        
                                    echo "<a href='$link' class='w3-button w3-large w3-border'>" ;
                                    $Name = $row ['cname'];                                               
                                    echo "$Name";
                                }
                                 else 
                                {
                                    echo "&nbsp;";
                                }
                            echo "</th>";

                            if($i!=5)
                            {
                                $row = $stmt->fetch();
                            }
                        }
                    }
                    echo "</tr>";
                
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
    
  <!-- Product container-->  
    <div class="w3-bottombar">
        <?php 
            include("direction.php");
        ?>

        <?php
        echo "<table>";
            foreach ($resultSet as $row) 
            {    
                echo "<tr>";
                    for($i=1;$i<=3;$i++)
                    {
                        echo "<td align='center' width='328px' height='228px' >";
                            if($row!=false)
                            {
                                $iId = $row['iid'];
                                $iName = $row['iname'];
                                $iDescription = $row['idescription'];
                                $iPrice = $row['iprice'];
                                $iStatus = $row['istatus'];
                                $iSize = $row['isize'];
                                $iImage = $row['iimage'];

                                $link_image = "./images/item/$iImage";
                                //$link_detail="?direct=product_detail&id=".$iId;

                                echo "<a href='$link_detail'>";
                                    echo "<img src='$link_image' width='200px'>";
                                echo "</a>";
                                echo "<br>";  

                                echo "<a href='$link_detail'>";
                                    echo $iName;
                                echo "</a>";
                                echo "<br>";  

                                echo "Price: ".$iPrice," $";
                                echo "<br>";
                            }
                             else 
                            {
                                echo "&nbsp;";
                            }
                        echo "</td>";
                        if($i!=3)
                        {
                            $row = $stmt->fetch();
                        }
                    }
                echo "</tr>";
            }
        echo "</table>";
        ?>        
    </div> 
    <!--End of Product container-->
    
