
// Function to display product details on the details page
function displayProductDetails() {
    const product = productDetails[productId];
    if (product) {
        const productDetailsContainer = document.getElementById('product-details');
        productDetailsContainer.innerHTML = `
            <h2>${product.name}</h2>
            <p>${product.description}</p>
            <p class="product-price">Price: ${product.price}</p>
        `;
    } else {
        // Handle the case where the product ID is not found
        console.log('Product not found.');
    }
}

// Call the function to display product details
displayProductDetails();

