document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('category');
    const priceSelect = document.getElementById('price');
    const products = document.querySelectorAll('.produto');
  
    categorySelect.addEventListener('change', filterProducts);
    priceSelect.addEventListener('change', filterProducts);
  
    function filterProducts() {
      const selectedCategory = categorySelect.value;
      const selectedPrice = priceSelect.value;
  
      products.forEach(product => {
        const category = product.querySelector('p:nth-child(3)').textContent.split(': ')[1];
        const price = Number(product.querySelector('p:nth-child(4)').textContent.split(': ')[1].slice(2));
  
        const showCategory = selectedCategory === 'todos' || selectedCategory === category;
        const showPrice = selectedPrice === 'todos' ||
                          (selectedPrice === 'baixo' && price <= 50) ||
                          (selectedPrice === 'medio' && price > 50 && price <= 100) ||
                          (selectedPrice === 'alto' && price > 100);
  
        product.style.display = showCategory && showPrice ? 'block' : 'none';
      });
    }
  });
  