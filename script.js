'use strict';

const add = document.querySelector('.add');
const container = document.querySelector('.row');
let clickCount = 0;

add.addEventListener('click', function () {
    clickCount++;
    const card = document.createElement('div');
    card.classList.add(`card`);
    card.classList.add('col');
    card.classList.add('col-lg-4');
    card.classList.add(`card-${clickCount}`);


    const title = document.createElement('input');
    title.setAttribute('type', 'textarea');
    title.setAttribute('name','title');
    title.setAttribute('placeholder', 'enter the title');
    title.classList.add('title');

    const price = document.createElement('input');
    price.setAttribute('type', 'textarea');
    price.setAttribute('name','price')
    price.setAttribute('placeholder', 'enter the price');
    price.classList.add('price');

    const text = document.createElement('input');
    text.setAttribute('type', 'textarea');
    text.setAttribute('name','description');
    text.setAttribute('placeholder', 'enter the description');
    text.classList.add('description');

    const addImg= document.createElement('button');
    addImg.classList.add('addImg');
    addImg.innerHTML=`<i class="bi bi-box-arrow-in-down"></i>`;


 

    const submit = document.createElement('button');
    submit.classList.add('submit');
    submit.innerText = 'submit';

    const remove = document.createElement('button');
    remove.classList.add('remove');
    remove.innerText = 'remove';
    let j=0
    addImg.addEventListener('click',function(){
        const image = document.createElement('img');
    image.classList.add('product');
    image.classList.add('product');
    image.setAttribute('name','image');
    image.addEventListener('dragover', function (e) {
        e.preventDefault();
    });
    image.addEventListener('drop', function (e) {
        e.preventDefault();
        const file = e.dataTransfer.files[0];
        const reader = new FileReader();
        reader.onload = function (e) {
            image.setAttribute('src', e.target.result);
        };
        reader.readAsDataURL(file);
    });
   
        image.classList.add(`${j}`);
        card.appendChild(image);

    const remove2=document.createElement('button');
    
    remove2.classList.add(`remove2`);
    remove2.innerText='remove image above';
    card.appendChild(remove2) ;
    image.style.justifyContent = 'start';
remove2.style.justifyContent = 'end';
    remove2.addEventListener('click',function(){

card.removeChild(image);
card.removeChild(remove2);
    });
        j++;
    });
const error=document.createElement('label');
error.classList.add('error');
error.innerText='please fill the fields';
    
    card.appendChild(addImg);
    card.appendChild(title);
    card.appendChild(price);
    card.appendChild(text);
    card.appendChild(submit);
    card.appendChild(remove);

    container.appendChild(card);


    submit.addEventListener('click', function () {
const titleValue = title.value;
const priceValue = price.value;
const descriptionValue = text.value;
const imageArrayValue = []; // Store image URLs or base64-encoded images
if(titleValue==='' || priceValue==='' || descriptionValue===''){
    
    card.appendChild(error);
}else{
// Gather image URLs or base64-encoded images from your image elements
const images = document.querySelectorAll('.product');
images.forEach(function (image) {
image.setAttribute('name','image');
imageArrayValue.push(image.src); 
});

// Create the data object to send in the AJAX request
const data = {
title: titleValue,
description: descriptionValue,
price: priceValue,
imageArray: imageArrayValue
};

// Make an AJAX request to the PHP script
const xhr = new XMLHttpRequest();
xhr.open('POST', 'save_product.php', true);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onreadystatechange = function () {
if (xhr.readyState === XMLHttpRequest.DONE) {

if (xhr.status >= 200 && xhr.status < 300) {

const response = xhr.responseText;

if (response.success) {
        window.location.href = 'admin.php?success';
    } else {
    }
}else{
console.log('Request failed with status:', xhr.status);
}
}
};
xhr.send(JSON.stringify(data));

}
});


remove.addEventListener('click', function () {
   /*  container.removeChild(card);
 */
    const titleValue = title.value;
    const priceValue = price.value;
    const descriptionValue = text.value;
    const imageArrayValue = []; // Store image URLs or base64-encoded images
    if(titleValue==='' || priceValue==='' || descriptionValue==='' ){
        
        card.appendChild(error);
    }else{
    // Gather image URLs or base64-encoded images from your image elements
    const images = document.querySelectorAll('.product');
    images.forEach(function (image) {
    image.setAttribute('name','image');
    imageArrayValue.push(image.src); 
    });
    
    // Create the data object to send in the AJAX request
    const data = {
    title: titleValue,
    description: descriptionValue,
    price: priceValue,
    imageArray: imageArrayValue
    };
    
    // Make an AJAX request to the PHP script
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'delete_product.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
    
    if (xhr.status >= 200 && xhr.status < 300) {
    
    const response = xhr.responseText;
    
    if (response.success) {
            window.location.href = 'admin.php?success';
        } else {
        }
    }else{
    console.log('Request failed with status:', xhr.status);
    }
    }
    };
    xhr.send(JSON.stringify(data));
    
    }});

});


const remove1 = document.querySelectorAll('.remove');
for(let index=0;index<remove1.length;index++){

    remove1[index].addEventListener('click', function () {
const parent = remove1[index].parentNode;
parent.remove();
});
}

