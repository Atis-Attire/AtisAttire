class PublicProductView {
    #element;
    constructor(element, parentElement) {
        this.#element = element;
        parentElement.append(`
          <div class="product-card-format">
              <img class="product-blade-image" src="${element.picture}" alt="">
              <p class="product-blade-name">${element.name}</p>
              <p class="product-blade-describe">${element.describe}</p>
                <div class="price--and-cart">
                    <p class="product-blade-price">${element.price} Ft</p>
                    <button class="add-to-cart">Add to cart</button>
                </div>
                <div>
                    <label for="mennyiseg">Mennyiség</label>
                    <input id="mennyiseg" type="number" step="1" min="1" value="1">
                </div>
          </div>
        `);
    }


}

export default PublicProductView;
