// default state
var isHiddenNavOpen = false
$('#triggerNavBtn').click(function (){
    if (isHiddenNavOpen){
        document.querySelector("#triggerIcon").removeAttribute('name');
        document.querySelector("#triggerIcon").setAttribute('name','menu-outline');
        $('#hiddenBtns').animate(
            {
                width: "0px",
                margin: "0px 0px 0px 100px"
            },500,function (){
                $('#hiddenBtns').css("display","none");
            }
        )
    }else{
        document.querySelector("#triggerIcon").removeAttribute('name');
        document.querySelector("#triggerIcon").setAttribute('name','close-circle-outline');
        $('#hiddenBtns').css("display","flex");
        $('#hiddenBtns').animate(
            {
                width: "100px",
                margin: "0px"
            },500
        )
    }

    isHiddenNavOpen = !isHiddenNavOpen
})



window.addEventListener('scroll',function (event){
    var t = document.body.scrollTop || document.documentElement.scrollTop;
    if (t > 500) {
        document.querySelector("#goToTop").classList.remove('hide-goto-top');
        document.querySelector("#goToTop").classList.add('show-goto-top');
    } else {
        document.querySelector("#goToTop").classList.remove('show-goto-top');
        document.querySelector("#goToTop").classList.add('hide-goto-top');
    }
})


$('#goToTop').click(function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
})