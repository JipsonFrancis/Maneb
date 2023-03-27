function makeCode (qrcode) {    
    //var elText = document.getElementById("text");
    let qrPromise = new Promise((qrResolve, qrReject) => {
        let req = new XMLHttpRequest();
        req.open('GET', 'QR/box');
        req.onload = function(){
            if (req.status == 200){
                qrResolve(req.response);
            }else{
                qrReject('failed to load QR');
            }
        };
        req.send();
    });

    qrPromise.then(
        (value) => {
            qrcode.makeCode(value);
        },
        (error) => {
            console.log(error);
            alert("Input a text");
            elText.focus();
        }
    );

    // if (!elText.value) {
    //   alert("Input a text");
    //   elText.focus();
    //   return;
    // }
    // qrcode.makeCode(elText.value);
}

window.addEventListener('load', function(e){

    this.window.alert('me just dribble in the middle camavinga...');

    var qrcode = new QRCode("qrcode");

    makeCode(qrcode);

    $("#text").on("blur", function () {
        makeCode(qrcode);
    }).on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode(qrcode);
        }
    });

});