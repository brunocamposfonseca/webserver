var client = [];
var product = [];
var notice;
var alert;
let cardCreated = false;

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
    if (document.getElementById("h3-client")) {
        document.getElementById("h3-client").remove()
    }
    let card = document.getElementById("card-cart");
    let clientData = document.createElement("h3");
    clientData.setAttribute("id", "h3-client");
    card.appendChild(clientData);
    clientData.textContent = ""
    clientData.textContent = client["name"];
}

function selectProduct(id, code, name, preco, stock) {
    if (client["id"]) {
        product[id] = {
            "id": id,
            "code": code,
            "name": name,
            "price": parseFloat(preco),
            "totalPrice": parseFloat(preco),
            "stock": stock,
            "quantity": 1
        }
        notice = "Product added!";
        updateCart();
    } else {
        alert = "Add a customer to continue...";
        console.log(client)
        showAlert(alert);
    }
}

function productQuant(id, quant) {
    if (product[id].quantity + quant >= 1) {
        if (product[id].quantity + quant <= product[id].stock) {
            product[id].quantity += quant;
            if(quant == 1){
                product[id].totalPrice += product[id].price
            } else {
                product[id].totalPrice -= product[id].price
            }
            
            updateProduct()
        } else {
            alert = "The selected quantity exceeded the stock limit."
            showAlert(alert)
        }
    } else {
        alert = "You cannot select less than 0 products..."
        showAlert(alert)
    }
}

function excludeProduct(id) {
    delete product[id]
    alert = ""
    updateCart();
}

function makeProduct() {
    if (document.getElementById("ul-products")) {
        document.getElementById("ul-products").remove()
        let li = document.querySelectorAll("#li-product");
        li.forEach(i => document.getElementById("li-product").remove())
    }

    var totalValueCart = 0;
    
    let card = document.getElementById("card-cart");
    let productContainer = document.createElement("ul");
    productContainer.setAttribute("id", "ul-products");
    card.appendChild(productContainer)

    product.forEach(i => {
        //
        let productData = document.createElement("li");
        let nameProd = document.createElement("h2");
        let codeProd = document.createElement("p");
        let priceProd = document.createElement("h3");
        let quantityProd = document.createElement("p");
        let btnExclude = document.createElement("button");
        let btnPlus = document.createElement("button");
        let btnMinus = document.createElement("button");

        //
        let divInfo = document.createElement("div");
        let divInfoName = document.createElement("div");
        let divInfoPrice = document.createElement("div");
        let divInfoQuantity = document.createElement("div");

        //
        divInfo.setAttribute("class", "info-product-card");
        divInfoName.setAttribute("class", "info-name-card");
        divInfoPrice.setAttribute("class", "info-price-card");
        divInfoQuantity.setAttribute("class", "info-quantity-card");

        btnExclude.addEventListener("click", () => excludeProduct(i.id));
        btnPlus.addEventListener("click", () => productQuant(i.id, 1));
        btnMinus.addEventListener("click", () => productQuant(i.id, -1));

        //
        productData.setAttribute("id", "li-product");
        productData.setAttribute("class", "li-product");
        nameProd.setAttribute("class", "name-product");
        codeProd.setAttribute("class", "code-product");
        priceProd.setAttribute("class", "price-product");
        quantityProd.setAttribute("class", "quantity-product");

        btnExclude.setAttribute("class", "btn-exclude-product");
        btnPlus.setAttribute("class", "btn-plus-product");
        btnMinus.setAttribute("class", "btn-minus-product");

        //
        productContainer.appendChild(productData);
        productData.appendChild(divInfo);
        divInfo.appendChild(divInfoName);
        divInfo.appendChild(divInfoPrice);
        divInfo.appendChild(divInfoQuantity);

        divInfoName.appendChild(nameProd);
        divInfoName.appendChild(btnExclude);

        divInfoPrice.appendChild(codeProd);
        divInfoPrice.appendChild(priceProd);

        divInfoQuantity.appendChild(btnMinus);
        divInfoQuantity.appendChild(quantityProd);
        divInfoQuantity.appendChild(btnPlus);

        //
        nameProd.textContent = i.name;
        codeProd.textContent = i.code;

        const formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            trailingZeroDisplay: 'stripIfInteger',
            minimumFractionDigits: 0,
            maximumFractionDigits: 2,
        });
        
        priceProd.textContent = formatter.format(Number(i.totalPrice));
        quantityProd.textContent = i.quantity;

        btnExclude.innerHTML = "<i class='fa-solid fa-trash'></i>"
        btnPlus.innerHTML = "<i class='fa-solid fa-plus'></i>";
        btnMinus.innerHTML = "<i class='fa-solid fa-minus'></i>";

        totalValueCart += i.price * i.quantity;
    });
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        trailingZeroDisplay: 'stripIfInteger',
        minimumFractionDigits: 0,
        maximumFractionDigits: 2,
    });
    let totalValue = document.getElementById("total-value-cart")
    totalValue.textContent = formatter.format(totalValueCart);
}

function updateProduct() {
    makeProduct()
}

function makeCard() {
    if (cardCreated == false) {
        let cart = document.getElementById("cart");
        let card = document.createElement("div");
        let cardContainer = document.createElement("div");
        let cardFooter = document.createElement("section");
        let btnSubmit = document.createElement("button");
        let totalValue = document.createElement("h2");

        cart.appendChild(card);
        card.appendChild(cardContainer);
        card.appendChild(cardFooter);
        cardFooter.appendChild(btnSubmit);
        cardFooter.appendChild(totalValue);

        card.setAttribute("class", "card-container-cart");
        cardContainer.setAttribute("class", "card");
        cardContainer.setAttribute("id", "card-cart");
        cardFooter.setAttribute("class", "card-footer-cart");
        totalValue.setAttribute("id", "total-value-cart");
        btnSubmit.setAttribute("class", "btn-submit-cart");
        btnSubmit.setAttribute("onclick", "submitSale()");

        btnSubmit.textContent = "Submit";

        cardCreated = true;
    }
}

function updateCart() {
    showNotice(notice);
    if (client["id"]) {
        makeCard();
        updateClient();
        updateProduct();
    }
}

async function submitSale(){
    try{
        const datas = {
            client: {
                idClient : client['id'],
                nameClient : client['name']
            },
            product: Object.values(product),
            totalPrice: totalValueCart
        }
        console.log(datas)
        let response = await fetch("./sales/insertSales.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(datas)
        });

        let data = await response.text();
        console.log("Post created:", data);
    }catch(error){
        console.error("Error creating post:", error);
    }
}
