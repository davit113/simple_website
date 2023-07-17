
(function(){

    const inputNodes = {
        formInputSku:    document.querySelector('#sku'),   
        formInputName:   document.querySelector('#name'),  
        formInputPrice:  document.querySelector('#price'), 
        formInputHeight: document.querySelector('#height'),
        formInputWidth:  document.querySelector('#width'), 
        formInputLength: document.querySelector('#length'),
        formInputWeight: document.querySelector('#weight')
    }


    

    const form           = document.querySelector('#product_form');
    const formInputSku   = document.querySelector('#sku');
    const formInputName  = document.querySelector('#name');
    const formInputPrice = document.querySelector('#price');
    const formInputHeight = document.querySelector('#height');
    const formInputWidth  = document.querySelector('#width');
    const formInputLength = document.querySelector('#length');
    const formInputWeight = document.querySelector('#weight');

    document.querySelector('#product_form > .input > #ProductType').addEventListener('change', (e) =>{
        const currentTarget = e.target;
        // console.log(e.target);
        const products = document.querySelectorAll(".product");

        /* hide all input */
        products.forEach((val)=>{
            val.classList.add('hidden');
            val.querySelectorAll('input')?.forEach((val)=>{
                val.required = false;
                val.value = "";
            })
        })

        const node =document.querySelector(`.product--${currentTarget.value}`);
        node?.classList.toggle('hidden');
        node?.querySelectorAll('input')?.forEach((val)=>{
            val.required = true;
        })
    })

    document.querySelector('#form-save-btn').addEventListener('click',(e)=>{
        // e.preventDefault();
    })

    const numberOnlyInput = function(e){
        // console.log(e.target.value);
        // console.log('----');
        let val = e.target.value;
        const expr = /^\d*\.?\d*$/;
        
        if(!expr.test(val)){
            e.target.value =val.slice(0,val.length-1);
        }
    }


    formInputPrice.addEventListener("input",numberOnlyInput);
    formInputHeight.addEventListener('input',numberOnlyInput);
    formInputWidth.addEventListener('input',numberOnlyInput); 
    formInputLength.addEventListener('input',numberOnlyInput);
    formInputWeight.addEventListener('input',numberOnlyInput);



    /* send form */

    const checkAllInputOnEmpty =  function(){
        for(key in inputNodes){
            // if(inputNodes.value)
        }
    }
    

    form.addEventListener('submit', (e)=>{
        


        


    })


    document.addEventListener("DOMContentLoaded", ()=>{
        document.getElementById("ProductType").selectedIndex = 0;
    });


})();





