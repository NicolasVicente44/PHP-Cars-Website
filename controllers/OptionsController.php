<?php
require_once("./models/OptionModel.php");
require_once("./models/UserModel.php");
require_once("./models/CartModel.php");



function index() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION["user"];

    $options = OptionModel::findAll($user['id']);

    render("options/index", [
        "title" => "List Options",
        "options" => $options
    ]);
}




function show($request) {
    $id = $request["params"]["id"] ?? null;
    $option = OptionModel::find($id);
    render("options/show", [
        "option" => $option,
        "title" => "Show"
    ]);
}

function _new() {
    if (!UserModel::is_authorized()) {
        redirect("login", ["errors" => "You must be logged in to access this page"]);
    }

    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION['user'];
    $carts = CartModel::findAll($user);

    render("options/new", [
        "title" => "New",
        "action" => "create",
        "carts" => $carts
    ]);
}





function edit($request) {
    $id = $request["params"]["id"] ?? null;

    if (!$id) {
       return redirect("options", ["errors" => "This options does not exist"]);
    }

    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION["user"];

    $option = OptionModel::find($id, $user);

    if (!$option) {
        return redirect("options", ["errors" => "This option does not exist"]);
    }

    $carts = CartModel::findAll($user);

    render("options/edit", [
        "option" => $option,
        "action" => "update",
        "carts" => $carts
    ]);
}






function create() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION["user"];

    validate($_POST, "options/new");

    OptionModel::create($_POST, $user);

    redirect("options", ["success" => "Option was added successfully"]);
}


function update() {
    if (!isset($_POST['id'])) {
        return redirect("options", ["errors" => "Missing required id parameter"]);
    }

    validate($_POST, "options/edit/{$_POST['id']}");
    
    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION["user"];
    
    OptionModel::update($_POST, $user);
    redirect("options", ["success" => "Option was updated successfully"]);
}



function delete($request) {
    if (session_status() === PHP_SESSION_NONE) session_start();


    if (!isset($request["params"]["id"])) {
        return redirect("products", ["errors" => "Missing required ID parameter"]);
    }

    OptionModel::delete($request["params"]["id"], $_SESSION["user"]);

    redirect("", ["success" => "Option was deleted successfully"]);
}



function validate($package, $error_redirect_path) {
    $fields = ["option_name", "price", "description", "cart_id"];
    $errors = [];

    foreach ($fields as $field) {
        if (empty($package[$field])) {
            $humanize = ucwords(str_replace("_", " ", $field));
            $errors[] = "{$humanize} cannot be empty";
        }
    }

    if (count($errors)) {
        return redirect($error_redirect_path, [
            "form_fields" => $package,
            "errors" => $errors
        ]);
    }
}


function sanitize($package) {}

?>
