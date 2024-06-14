let filter_data_arr;
const cart_arr = JSON.parse(localStorage.getItem("cart_arr")) || [];

function add_to_cart(element, cartCount) {

    let isPresent = false;
    let updatedCountValue;
    for (let i = 0; i < cart_arr.length; i++) {
        if (cart_arr[i].id === element.id) {
            isPresent = true;
            cart_arr[i].count++;
            updatedCountValue = cart_arr[i].count;
            break;
        }
    }
    if (!isPresent) {
        cart_arr.push({ ...element, count: 1 });
        updatedCountValue = 1;
    }
    cartCount.innerText = updatedCountValue;
    localStorage.setItem("cart_arr", JSON.stringify(cart_arr));
}

function is_prod_present_in_cart(element) {
    for (let i = 0; i < cart_arr.length; i++) {
        if (cart_arr[i].id === element.id) {
            return cart_arr[i];
        }
    }
    return {};
}