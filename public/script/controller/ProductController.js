import DataModell from "../model/DataModel.js";
import PublicProductView from "../view/PublicProductView.js";

class ProductController{
    constructor(){
        const datamodell = new DataModell();
        let modell_id = document.querySelector('meta[name="modell"]').content;
        this.productDescribe = '/api/modells/'+ modell_id;
        datamodell.dataIn(this.productDescribe, this.displayProduct);
        
    }

    displayProduct(product){
        console.log(product)
        let parentElement=$(".product_article");
        parentElement.empty()
        new PublicProductView(product, parentElement);

    }

}

export default ProductController;
