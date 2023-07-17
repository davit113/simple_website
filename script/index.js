(function(){
    const productDeleteCheckboxes =document.querySelectorAll('.delete-checkbox');
    const deleteProductBtn = document.querySelectorAll('#delete-product-btn');

    deleteProductBtn.addEventlistener('click', (e)=>{
        e.preventDefault();
        productDeleteCheckboxes.forEach((product)=>{
            // if(product.ch)
        })

    })

})();