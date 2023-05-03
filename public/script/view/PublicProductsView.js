class PublicProductsView {
    #element;
    constructor(element, parentElement) {
        this.#element = element;
        parentElement.append(`
          <div class="products-card-format">
              <a href="/product/${element.id}"><img id="productMainImg${element.id}" class="products-blade-image" src="${element.picture}" alt=""></a>          
              <div class="price--and-cart">
                <span class="products-blade-name">${element.name}</span>
                <span class="products-blade-price">${element.price} Ft</span>
              </div>
          </div>
        `);



    }

}

export default PublicProductsView;
