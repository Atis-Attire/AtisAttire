class PublicProductView {
    #element;
    constructor(element, parentElement) {
        this.#element = element;
        parentElement.append(`
          <div class="product-card-format">
              <img class="product-blade-image" src="${element.picture}" alt="">
              <p class="product-blade-name">${element.name}</p>
              <p class="product-blade-season">Season: ${element.season}</p>
              <p class="product-blade-designer">Designer: ${element.designer.name}</p>
              <p class="product-blade-description">Description: ${element.description}</p>
              <div class="col-lg-5 pr-0">
                <label for="sizes">Size</label>
                <select id='sizes'></select>
              </div>
              <div class="price-and-cart">
                  <p class="product-blade-price">${element.price} Ft</p>
                  <button class="add-to-cart">Add to cart</button>
              </div>
          </div>
        `);

        let sizes = $('#sizes');
        element.products.forEach(product => {
            $('#sizes').append(`
                <option value='${product.id}'>${product.size}</option>
            `);
        });
    }


}

export default PublicProductView;
