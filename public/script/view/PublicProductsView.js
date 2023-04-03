class PublicProductsView {
    #element;
    constructor(element, parentElement) {
        this.#element = element;
        parentElement.append(`
          <div class="products-card-format">
              <a href="/product/${element.id}"><img id="productMainImg${element.id}" class="products-blade-image" src="${element.picture}" alt=""></a>
              <p class="products-blade-name">${element.name}</p>
              <div class="price--and-cart">
                <p class="products-blade-price">${element.price} Ft</p>
                <button class="add-to-cart">Add to cart</button>
              </div>
          </div>
        `);



    }

}

export default PublicProductsView;
