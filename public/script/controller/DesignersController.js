import DataModell from "../model/DataModel.js";
import PublicDesignersView from "../view/PublicDesignersView.js";

class DesignersController{
    constructor(){
        const datamodell = new DataModell();
        console.log("sajt")
        datamodell.dataIn('/api/designers', this.displayDesigners);
    }

    displayDesigners(designers){
        let parentElement=$(".designers_article");
        parentElement.empty()
        designers.forEach(designer => {
            new PublicDesignersView(designer, parentElement);
        });
    }

}

export default DesignersController;
