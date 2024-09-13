<?php

function pr($arr)
{
    echo '<pre>';
    print_r($arr);
}

function prx($arr)
{
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($con,$str){
    if(($str!='')){
        return mysqli_real_escape_string($con,$str);
    }
   
}

function get_productd($limit = '' , $conn ,$cat_id='' ,$product_id='')
{
    
    $sql = "SELECT * FROM product where status = 1";
    $sql .= " order by id desc";
    if($cat_id!='')
    {
        $sql .= "and categories_id= $cat_id";
    }
    if($product_id!='')
    {
        $sql .= "and id= $product_id";
    }
  

    if ($limit != '') {
        $sql .= " LIMIT $limit";
    }

    $res = mysqli_query($conn, $sql);
    $data = array();
    
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    return $data;
}

function get_product($limit = '', $conn, $cat_id = '')
{
    $sql = "SELECT * FROM product WHERE status = 1";

    if ($cat_id != '') {
        // Check if category ID is provided
        // Use prepared statement to prevent SQL injection
        $sql .= " AND categories_id = ?";
    }

    $sql .= " ORDER BY id DESC";

    if ($limit != '') {
        $sql .= " LIMIT ?";
    }

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($cat_id != '' && $limit != '') {
        // Bind parameters for category ID and limit
        mysqli_stmt_bind_param($stmt, 'ii', $cat_id, $limit);
    } elseif ($cat_id != '') {
        // Bind parameter for category ID
        mysqli_stmt_bind_param($stmt, 'i', $cat_id);
    } elseif ($limit != '') {
        // Bind parameter for limit
        mysqli_stmt_bind_param($stmt, 'i', $limit);
    }

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Get result set
    $res = mysqli_stmt_get_result($stmt);

    // Fetch data
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    // Close statement
    mysqli_stmt_close($stmt);

    return $data;
}



// functions.php

// Function to get all products
function get_all_products($conn) {
    $products = array();

    // Query to fetch all products
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Fetch associative array of products
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    }

    // Free result set
    mysqli_free_result($result);

    // Return array of products
    return $products;
}

function get_all_products_paginated($conn, $offset, $limit) {
    $products = array();

    // Query to fetch products for the current page
    $query = "SELECT * FROM product LIMIT $offset, $limit";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Fetch associative array of products
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    }

    // Free result set
    mysqli_free_result($result);

    // Return array of products
    return $products;
}



function count_all_products($conn) {
    // Query to count total number of products
    $query = "SELECT COUNT(*) AS total FROM product";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Fetch associative array containing total count
        $row = mysqli_fetch_assoc($result);
        $total_products = $row['total'];
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
        $total_products = 0;
    }

    // Free result set
    mysqli_free_result($result);

    // Return total number of products
    return $total_products;
}

// function get_productdd($limit = '', $conn, $cat_id = '', $product_id = '')
// {
//     $sql = "SELECT product.*, categories.categories FROM product, categories WHERE product.status = 1";

//     // Check if a specific product ID is provided
//     if ($product_id != '') {
//         $sql .= " AND product.id = $product_id";
//     } 
//     if ($cat_id != '') {
//         $sql .= " AND product.categories_id = $cat_id";
//     } 
//     $sql .= " AND product.categories_id = categories.id";
//     if ($limit != '') {
//         $sql .= " product.limit $limit";
//     }

//     $res = mysqli_query($conn, $sql);
//     $data = array();

//     while ($row = mysqli_fetch_assoc($res)) {
//         $data[] = $row;
//     }

//     return $data;
// }
function get_product1($id, $conn, $limit='', $cat_id='', $search_str='', $sort_order='',$is_best_seller='',$sub_categories=''){
    $sql="SELECT product.*,categories.categories FROM product,categories WHERE products.status=1 ";
    if($id!=''){
        $sql.=" and product.id=$id ";
    }
    if($cat_id!=''){
        $sql.=" and product.categories_id=$cat_id ";
    }
    if($search_str!=''){
        $sql.=" and (product.name like '%$search_str%' or product.description like '%$search_str%') ";
    }
    if($is_best_seller!=''){
        $sql.=" and product.best_seller=1 ";
    }
    if($sub_categories!=''){
        $sql.=" and product.sub_categories_id=$sub_categories ";
    }
    $sql.=" and categories.id=product.categories_id ";
    if($limit!=''){
        $sql.=" limit $limit ";
    }
    $res=mysqli_query($conn,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}

function get_productdd($limit = '', $conn, $cat_id = '', $product_id = '') {
    $sql = "SELECT product.*, categories.categories 
            FROM product 
            INNER JOIN categories ON product.categories_id = categories.id 
            WHERE product.status = 1";

    // Check if a specific product ID is provided
    if ($product_id != '') {
        $sql .= " AND product.id = $product_id";
    } 
    if ($cat_id != '') {
        $sql .= " AND product.categories_id = $cat_id";
    } 
    if ($limit != '') {
        $sql .= " LIMIT $limit";
    }

    $res = mysqli_query($conn, $sql);
    $data = array();

    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    return $data;
}








?>