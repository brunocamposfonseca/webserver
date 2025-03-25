var client = [];
var product = [];
var notice;
var alert;



function showNotice(message) {
    const noticeWrapper = document.getElementById("notice-wrapper");
    noticeWrapper.textContent = message;
    noticeWrapper.classList.add("open");
    setTimeout(() => {
        noticeWrapper.classList.remove("open");
    }, 3000);
}

function showAlert(message) {
    const alertWrapper = document.getElementById("alert-wrapper");
    alertWrapper.textContent = message;
    alertWrapper.classList.add("open");
    setTimeout(() => {
        alertWrapper.classList.remove("open");
    }, 3000);
}

function selectClient(id, name) {
    client["id"] = id;
    client["name"] = name;
    notice = "Client added!";

    updateCart()
}

function updateClient() {
    let clientData = document.getElementById("client-data");
    clientData.textContent = "Client: " + client["id"] + client["name"];
}

function selectProduct(id, code, name, preco) {
    if (client["id"]) {
        product[id] = {
            "id": id,
            "code": code,
            "name": name,
            "price": preco,
            "quantity": 0
        }
        notice = "Product added!";
        updateCart();
    } else {
        alert = "Add a customer to continue...";
        console.log(client)
        showAlert(alert);
    }
}

function updateProduct() {

}

function makeCard(){
    let cart = document.getElementById("cart");
    let card = document.createElement("div");

    card.setAttribute("class", "card");     
    cart.appendChild(card);
}

function updateCart() {
    showNotice(notice);
    updateClient();
    if(client["id"]){
        makeCard();
    }
}


