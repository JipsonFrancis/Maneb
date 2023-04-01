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
}

window.addEventListener('load', function(e){

    //this.window.alert('me just dribble in the middle camavinga...');
    const qr_modal = document.getElementById("QR-modal");
    let htmlCollection = this.document.getElementsByClassName('QR-code');
    const close = document.getElementsByClassName("close")[0];
    let openQR = NaN;
    let QR_parent = NaN;

    htmlCollection = Array.prototype.slice.call(htmlCollection);
    
    htmlCollection.forEach(element => {
        element.addEventListener("click", (e) => {

            qr_modal.style.display = "block";
            QR_parent = element.parentElement;
            openQR = element;
            element.style.display = "none";
            
            
        });
    });

    close.onclick = function() {
        // //the qr_default image is at the left because it needs a parent                                     <div class="qr-picture-column">
        //                                 <img class="QR-code" src="{{asset('asset/images/qr-code.png')}}">
        //                             </div>

        qr_modal.style.display = "none";
        console.log(QR_parent);
        if(openQR)
            openQR.style.display = 'block';
    }

    var qrcode = new QRCode("qrcode");

    makeCode(qrcode);

    // $("#text").on("blur", function () {
    //     makeCode(qrcode);
    // }).on("keydown", function (e) {
    //     if (e.keyCode == 13) {
    //         makeCode(qrcode);
    //     }
    // });

});