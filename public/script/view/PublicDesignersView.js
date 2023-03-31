class PublicDesignersView {
    #element;
    constructor(element, parentElement) {
        this.#element = element;
        parentElement.append(`
          <div class="designers-card-format">
              <img class="designers-blade-image" src="${element.picture}" alt="">
                <a href="/designers/${element.id}">
                  <p class="designers-blade-name">${element.name}</p>
                </a>
          </div>
        `);


    }


}

export default PublicDesignersView;
