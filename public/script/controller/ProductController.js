import DataModell from "../model/DataModel.js";
import PublicProductView from "../view/PublicProductView.js";

class ProductController{
    constructor(){
        const datamodell = new DataModell();
        let id = document.querySelector('meta[name="modell"]').content;
        this.productDescription = '/api/modells/'+ id;
        datamodell.dataIn(this.productDescription, this.displayProduct);
        
    }

    displayProduct(product){
        console.log(product)
        let parentElement=$(".product_article");
        parentElement.empty()
        new PublicProductView(product, parentElement);

    }

}

export default ProductController;
