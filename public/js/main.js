function getCatProducts($id){
    const input = document.querySelector("#category_id");
    const form = document.querySelector("#catPro");
    input.value = $id;
    form.submit();

}

// Product
function submitForm($id){
    const input = document.querySelector("#product_id");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();
}


function deleteForm($id){
    const input = document.querySelector("#delete_product_id");
    const form = document.querySelector("#delete_form");
    input.value = $id;
    form.submit();
}

// Order
function submitFormOrder($id){
    const input = document.querySelector("#product_id");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();
}


function deleteFormOrder($id){
    const input = document.querySelector("#delete_order_id");
    const form = document.querySelector("#delete_form_order");
    input.value = $id;
    form.submit();
}

// user
function submitFormUser($id){
    const input = document.querySelector("#user_id");
    const form = document.querySelector("#form_user");
    input.value = $id;
    console.log(input.value);
    form.submit();
}


function deleteFormUser($id){
    const input = document.querySelector("#delete_user_id");
    const form = document.querySelector("#delete_form_user");
    input.value = $id;
    form.submit();
}