import ProductsController from "../script/controller/ProductsController.js";
import ProductController from "../script/controller/ProductController.js";
import DesignersController from "../script/controller/DesignersController.js";

$(function(){
    new ProductsController();
    new DesignersController();
    new ProductController();
});
