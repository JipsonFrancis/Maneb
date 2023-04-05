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

                    uiRemoveController(ui.location);
console.log(JSON.parse(value).center);
                    setGoogle(ui.location, JSON.parse(value).center.iframe);
                },
                (error) => {
                    console.log(error);
                }
            );
        });
    });

});

function setGoogle(entity, data)
{
    const frame = document.createElement('iframe');
    const att = document.createAttribute('src');
    const att2 = document.createAttribute('width');
    const att3 = document.createAttribute('height');
    const att4 = document.createAttribute('style');
    const att5 = document.createAttribute('allowfullscreen');
    const att6 = document.createAttribute('loading');
    const att7 = document.createAttribute('referrerpolicy');

    att.value = data;
    att2.value = "600";
    att3.value = "450";
    att3.value = "450";
    att4.value = "border:0;";
    att5.value = "";
    att6.value = "lazy";
    att7.value = "no-referrer-when-downgrade";

    frame.setAttributeNode(att);
    frame.setAttributeNode(att2);
    frame.setAttributeNode(att3);
    frame.setAttributeNode(att4);
    frame.setAttributeNode(att5);
    frame.setAttributeNode(att6);
    frame.setAttributeNode(att7);

    entity.appendChild(frame);
}
function makeCode (data) {
    let qrPromise = new Promise((qrResolve, qrReject) => {
        let req = new XMLHttpRequest();
        req.open('GET', 'transits/'+data, true);
        req.onload = function(){
            if (req.status == 200){
                qrResolve(req.response);
            }else{
                qrReject('failed to load Truck info');
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
        "location"  : window.document.getElementById("location")
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

const tabedTransitDetails = ()=> {
    const vehicleButton = document.querySelectorAll('.btn-tab')
    const allTabs = document.querySelectorAll('.tabs-map')
    const btnTab = document.querySelector('.details-nav')

    btnTab.addEventListener("click", function (e) {
        let id = e.target.dataset.id

        if (id) {
            vehicleButton.forEach(function (btn) {
                btn.classList.remove('nav-btn-activated')
                e.target.classList.add('nav-btn-activated')
            })


            allTabs.forEach(function (tab) {
                tab.classList.remove('driver-details-hidden')
            })
        
            let newitem = document.getElementById(id)
            newitem.classList.add('driver-details-hidden')
        }
    })
}

tabedTransitDetails()