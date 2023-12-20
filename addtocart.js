var gt=0
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('grandTotal');

function subtotal(){
    gt=0
    for(i=0;i<iprice.length;i++){

        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText="$"+gt;
}
subtotal();