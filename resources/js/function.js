const ProductSearch = {
    searchInput: document.getElementById('default-search'),
    productNames: document.querySelectorAll('.product-name'),

    init: function() {
        this.searchInput.addEventListener('input', this.search.bind(this));
    },

    search: function() {
        let searchValue = this.searchInput.value.toLowerCase();

        for (let i = 0; i < this.productNames.length; i++) {
            let productName = this.productNames[i].textContent.toLowerCase();
            let productContainer = this.productNames[i].closest('.product-container');
            
            if (productName.includes(searchValue)) {
                productContainer.style.display = 'block';
            } else {
                productContainer.style.display = 'none';
            }
        }
    }
};

ProductSearch.init();