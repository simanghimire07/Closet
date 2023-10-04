<?php
    try{
        $conn = new mysqli('localhost','root','','closet');
        if ($conn){
            if (isset($_POST['productRequest'])){
                $limit = $_POST['limit'];
                if ($limit < 1){
                    echo "Minimum limit for post is 1 or more";
                }else{
                    if ($sql = $conn->query("
                        select *,U.name as sellername from products P, cloth_types C, size S, fabrics F, user U where P.size=S.id and P.user_id = U.id and P.fabric_type = F.id and P.cloth_type = C.id limit $limit
                    ")){
                        if ($sql->num_rows < 1){
                            echo "No data in database";
                        }else{
                            $datas = array();
                            while($row = $sql->fetch_assoc()){
                                $data = array(
                                    "id" => $row['id'],
                                    "gender" => $row['gender'],
                                    "product_title" => $row['product_title'],
                                    "product_description" => $row['product_description'],
                                    "img" => $row['img'],
                                    "condition_rating" => $row['condition_rating'],
                                    "cloth_type" => $row['cloth_type'],
                                    "fabric_type" => $row['fabric_type'],
                                    "brand_id" => $row['brand_id'],
                                    "size" => $row['abbr'],
                                    "price" => $row['price'],
                                    "user_id" => $row['user_id'],
                                    "seller" => $row['sellername']
                                );
                                array_push($datas,$data);
                                echo json_encode($datas);
                            }
                        }
                    }
                }
            }else{
                header('location: ../index.php');
            }
        }
    }catch(Exception $e){
        die("<script>console.log('Error $e')</script>");
    }
