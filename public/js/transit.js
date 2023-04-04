window.addEventListener('load', () => {
    
    const transit = Array.prototype.slice.call(document.getElementsByClassName("tracked-car"));
    const ui = uiController();

    transit.forEach(element => {
        element.addEventListener('click', (e) => {
            const elementNodeList = Array.prototype.slice.call(element.childNodes);

            uiRemoveController(ui.vehicle);
            let data = makeCode(elementNodeList[7].value);
            data.then(
                (value) => {
                    uiAppendController(ui.vehicle, JSON.parse(value).licence, "Registration");
                    uiAppendController(ui.vehicle, JSON.parse(value).Model, "Model");
                    uiAppendController(ui.vehicle, JSON.parse(value).name, "Name");

                    console.log(JSON.parse(value));
                },
                (error) => {
                    console.log(error);
                    alert("Input a text");
                    elText.focus();
                }
            );
        });
    });

});

function makeCode (data) {
    let qrPromise = new Promise((qrResolve, qrReject) => {
        let req = new XMLHttpRequest();
        req.open('GET', 'transits/'+data, true);
        req.onload = function(){
            if (req.status == 200){
                qrResolve(req.response);
            }else{
                qrReject('failed to load QR');
            }
        };
        req.send();
    });

    return qrPromise;
}

function uiController()
{
    return {
        "vehicle"   : window.document.getElementById("vehicle"),
        "paper"     : window.document.getElementById("paper"),
        "driver"    : window.document.getElementById("driver"),
    };
}

function uiAppendController(entity, data, name)
{
    // create Div
    const div = document.createElement('div');
    let att = document.createAttribute('class');
    att.value = 'items-list';
    div.setAttributeNode(att);

    // add children to div
    const para = document.createElement("p");
    const para2 = document.createElement("p");
    const att2 = document.createAttribute('class');
    para.innerHTML = `${name}:`;
    att2.value = 'items-list';
    para2.setAttributeNode(att2);
    para2.innerHTML = data;

    entity.appendChild(div);
    div.appendChild(para);
    div.appendChild(para2);

}

function uiRemoveController(element){
    
    while (element.firstChild) {
        element.removeChild(element.firstChild);
      }
}