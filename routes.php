<?php

    /**
     * Routes are responsible for matching a requested path
     * with a controller and an action. The controller represents
     * a collection of functions you want associated, usually, with
     * a resource. The action is the specific function you want to call.
     */

    $routes = [
        "get" => [
            [
                "pattern" => "/",
                "controller" => "PagesController",
                "action" => "index"
            ],
            [
                "pattern" => "/about",
                "controller" => "PagesController",
                "action" => "about"
            ],
            [
                "pattern" => "/contact",
                "controller" => "PagesController",
                "action" => "contact"
            ],
            [
                "pattern" => "/options",
                "controller" => "OptionsController",
                "action" => "index"
            ],
            [
                "pattern" => "/options/new",
                "controller" => "OptionsController",
                "action" => "_new"
            ],
            [
                "pattern" => "/options/show/:id",
                "controller" => "OptionsController",
                "action" => "show"
            ],
            [
                "pattern" => "/options/edit/:id",
                "controller" => "OptionsController",
                "action" => "edit"
            ],
            [
                "pattern" => "/options/delete/:id",
                "controller" => "OptionsController",
                "action" => "delete"
            ],
            [
                "pattern" => "/users/new",
                "controller" => "UsersController",
                "action" => "_new"
            ],
            [
                "pattern" => "/carts",
                "controller" => "CartsController",
                "action" => "index"
            ],
            [
                "pattern" => "/carts/new",
                "controller" => "CartsController",
                "action" => "_new"
            ],
            [
                "pattern" => "/carts/:id",
                "controller" => "CartsController",
                "action" => "show"
            ],
            [
                "pattern" => "/carts/edit/:id",
                "controller" => "CartsController",
                "action" => "edit"
            ],
            [
                "pattern" => "/carts/delete/:id",
                "controller" => "CartsController",
                "action" => "delete"
            ], //users routes
            [
                "pattern" => "/login",
                "controller" => "UsersController",
                "action" => "login"
            ],
            [
                "pattern" => "/logout",
                "controller" => "UsersController",
                "action" => "logout"
            ],
        ],
        "post" => [
            [
                "pattern" => "/options/create",
                "controller" => "OptionsController",
                "action" => "create"
            ],
            [
                "pattern" => "/options/update",
                "controller" => "OptionsController",
                "action" => "update"
            ],
            [
                "pattern" => "/carts/create",
                "controller" => "CartsController",
                "action" => "create"
            ],
            [
                "pattern" => "/carts/update",
                "controller" => "CartsController",
                "action" => "update"
            ],
            [
                "pattern" => "/users/create",
                "controller" => "UsersController",
                "action" => "create"
            ],
            [
                "pattern" => "/authenticate",
                "controller" => "UsersController",
                "action" => "authenticate"
            ],
        ]
    ];

?>