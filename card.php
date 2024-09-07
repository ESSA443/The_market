<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Cart</title>
    <style>
        h3{
         font-family: 'Cairo', sans-serif;
         font-weight:bold;
        }
        main{
            width: 40%;
            margin: 0 auto;
        }
        table{
            box-shadow:1px 1px 10px silver;
        }
        thead{
            background-color:gray;
            color: #fff;
            text-align:center;

        }
        tbody{
            text-align:center;

        }

    </style>
    
</head>
<body>
    <center><h3>منتجاتك المحجوزة</h3></center>
    
            <?php
                    include ('config.php');
                    $result = mysqli_query($con,'SELECT * FROM addcard');
                    while($row =mysqli_fetch_array($result)){
                        echo "  <center>
                                <h1>MY Cart</h1>
                                    <main>
                                        <table class='table table-striped'>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Delete product</th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$row[name]</td>
                                                    <td>$row[price]</td>
                                                    <td></td>
                                                    <td><a href='del_card.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>

                                                </tr>


                                            </tbody>

                                            </table>
                                    </main>
            
            
                                </center>"
                        

                                  ;  }




            ?>
            <center>
                <a href="shop.php">الرجوع لصفحةالمنتجات</a>
                </center

</body>
</html>