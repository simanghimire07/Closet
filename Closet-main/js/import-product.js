var fetchedData = false
var animationDelay = 200
window.document.addEventListener('scroll',()=>{
    if (!fetchedData){
        toppix = document.body.scrollTop || document.documentElement.scrollTop;
        if (toppix>500){
            $.ajax({
                type: "POST",
                url: "./services/fetch-products.php",
                data: {
                    "productRequest": 1,
                    "limit": 8
                },
                success: function (products) {
                    // console.log(products)
                    products = JSON.parse(products);
                    $('#product-cards-container').empty();
                    for(let i=0;i < products.length;i++){
                        let card = getCard(products[i],animationDelay);
                        animationDelay += 200
                        document.querySelector('#product-cards-container')
                            .innerHTML += card;
                    }


                    fetchedData = true
                },
                error: function (req, err){
                    console.error(`Error: ${err}`)
                }
            })
        }
    }
})


function getCard(productData,animationDelay) {
    let genderIcon = `<ion-icon name="man-outline"></ion-icon>`;
    if (productData.gender.toString().toLowerCase() === 'f'){
        genderIcon = `<ion-icon name="woman-outline"></ion-icon>`;
    }
    let card = `
        <div 
            data-aos="zoom-in"
            data-aos-delay="${animationDelay}"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true"
            data-aos-anchor-placement="center-bottom"
         class="product-card">
                <div class="product-card-head" style="background: url(${productData.img});background-size: 100%; background-repeat: no-repeat">
<!--                    <img src="./product_img/product_1.webp" alt="">-->
                    <div class="card-img-overlay">
                        <div class="img-overlay-body">
                            <div class="card-title-flex">
                                <div title= "${productData.product_title}" class="card-title kbold">
                                    ${productData.product_title}
                                </div>
                                <div class="price-grid">
                                    <div class="price kregular">
                                        ${productData.price}
                                    </div>
                                </div>
                            </div>
                            <div class="card-subtitle mregular">
                                ${productData.product_description}
                            </div>
                            <div id="lister_name" class="card-subtitle mregular">
                                Listed by: ${productData.seller}
                            </div>
                            <div class="cardrow">
                                <div class="card-chips">
                                    <div class="chip chip-primary">
                                        ${genderIcon}
                                    </div>
                                    <div class="chip chip-primary kmedium">
                                        ${productData.size}
                                    </div>
                                    <div class="chip chip-primary kmedium">
                                        ${productData.condition_rating}
                                    </div>
                                </div>

                                <div class="buy-section">
                                    <div class="cart">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </div>
                                    <span class="splitter">
                                        |
                                    </span>
                                    <div class="buy-btn kregular">
                                        Buy now <sub>+</sub>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    `;

    return card;
}