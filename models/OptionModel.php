<?php

require_once("./models/UserModel.php");

class OptionModel {

    private static $_table = "options";

    public static function findAll($user_id) {
        $table = self::$_table;
        $conn = get_connection();
        $sql = "SELECT id, product_name as option_name, price, description, cart_id FROM {$table} WHERE user_id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $options = $stmt->fetchAll(PDO::FETCH_OBJ);
        $conn = null;

        return $options;
    }






    public static function find ($id, $user) {
        if (!$user) {
            header("Location: " . ROOT_PATH . "/login");
            exit();
        }

        $table = self::$_table;
        $conn = get_connection();
        $sql = "SELECT options.id, product_name as option_name, price, description, cart_id, carts.cart_name AS cart
        FROM {$table}
        JOIN carts ON options.cart_id = carts.id
        WHERE options.id = :id AND options.user_id = {$user['id']} AND carts.user_id = {$user['id']}";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $option = $stmt->fetch(PDO::FETCH_OBJ);
        $conn = null;
        return $option;
    }





    public static function create($package, $user) {
        $table = self::$_table;
        $conn = get_connection();
        $sql = "INSERT INTO {$table} (
            product_name,
            price,
            description,
            cart_id,
            user_id
        ) VALUES (
            :product_name,
            :price,
            :description,
            :cart_id,
            :user_id
        )";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":product_name", $package["option_name"], PDO::PARAM_STR);
        $stmt->bindParam(":price", $package["price"], PDO::PARAM_STR);
        $stmt->bindParam(":description", $package["description"], PDO::PARAM_STR);
        $stmt->bindParam(":cart_id", $package["cart_id"], PDO::PARAM_INT);
        $stmt->bindParam(":user_id", $user["id"], PDO::PARAM_INT);
        $stmt->execute();
        $conn = null;
    }




 public static function update($package, $user) {
    $table = self::$_table;
    $conn = get_connection();
    $sql = "UPDATE {$table} SET
        product_name = :option_name,
        price = :price,
        description = :description,
        cart_id = :cart_id
    WHERE id = :id AND user_id = {$user['id']}";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":option_name", $package['option_name'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $package['price'], PDO::PARAM_STR);
    $stmt->bindParam(":description", $package['description'], PDO::PARAM_STR);
    $stmt->bindParam(":cart_id", $package['cart_id'], PDO::PARAM_INT);
    $stmt->bindParam(":id", $package['id'], PDO::PARAM_INT);

    $stmt->execute();
    $conn = null;
}





    public static function delete ($id, $user) {
        $table = self::$_table;
        $conn = get_connection();
        $sql = "DELETE FROM {$table} WHERE id = :id AND user_id = :user_id";
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":user_id", $user['id'], PDO::PARAM_INT);
    
        $stmt->execute();
        $conn = null;
    }
    

    }

?>