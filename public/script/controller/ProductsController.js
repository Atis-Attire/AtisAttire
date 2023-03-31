import DataModell from "../model/DataModel.js";
import PublicProductsView from "../view/PublicProductsView.js";

class ProductsController{
    constructor(){
        const datamodell = new DataModell();
        console.log("sajt")
        datamodell.dataIn('/api/modells', this.displayProducts);
    }

    displayProducts(products){
        let parentElement=$(".products_article");
        parentElement.empty()
        products.forEach(product => {
            new PublicProductsView(product, parentElement);
        });
    }

}

export default ProductsController;
