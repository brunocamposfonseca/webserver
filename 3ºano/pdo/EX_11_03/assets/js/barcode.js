function barCodeVal(){
    var textin = document.getElementById("alert-wrapper");
    let codeNum = form.pcd.value;
    let codeBar = codeNum.toString();
    var barCode = [];
    var soma = Number();
    if(codeNum.length > 13 || codeNum.length < 13){
        textin.innerHTML = "Invalid barcode!";
        return false
    }else{
        for (let i = 0;i<13;i++){
            let newIndex = Number(codeBar[i]);
            if(i%2 == 0){
                barCode.push(newIndex);
            }else{
                barCode.push(newIndex *3);
            }
            var plus = barCode[i];
            soma +=plus;
            console.log(barCode);
        }
        if(soma%10 != 0){
            textin.innerHTML = "Invalid barcode!";
        }
        console.log(soma);
    }
    codeNum = "";
    codeBar = "";
    barCode = "";
}
