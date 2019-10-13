let idF;
let startF;
let endF;
let nameF;
let iconF;
let usageF;
let conditionF;
let unitF;
let aF;
let bF;
let orderF;
let modify;

let dataLoad;
let dataUpdate;
let dataInsert;
let dataDelete;

$(document).on('click','.editF',function(){
    let index = $(this).attr('index');
    setValue(index);
    $("input[name='name']").val(idF);
    $("input[name='name']").val(nameF);
    $("input[name='a']").val(aF);
    $("input[name='b']").val(bF);
    $("input[name='unit']").val(unitF);
    $("input[name='condition']").val(conditionF);
    $("input[name='icon']").val(iconF);

    if(startF == '0101' && endF == '3112'){
        $("input[name='mount_year']").val(1);
    }
    else{
        $("input[name='mount_year']").val(2);
    }

    switch(usage){
        case '':

            break;
        case '':
            break;
        default:

    }
})
$(document).on('click','.editSubmit',function(){
    setUpdateF();
    dataUpdate = {
        FID : idF,
        Name : nameF,
        Start : startF,
        End : endF,
        Usage : usageF,
        Unit : unitF,
        Icon : iconF,
        EQ1 : aF,
        EQ2 : bF,
        Condition : conditionF
    }
    updateF(dataUpdate);

})
$(document).on('click','.insertSubmit',function(){
    let data = {
        name : $("input[name='name_insert']"),
        icon : $("input[name='icon_insert']")
    }
    insertF(data);
})
function loadDataF(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            
      }
    };
    xhttp.open("POST", "demo_post2.asp", true);
    xhttp.send();
}
function insertF(data){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            loadDataF();
      }
    };
    xhttp.open("POST", "demo_post2.asp", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`data=${data}`);
}
function updateF(data) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            loadDataF();
      }
    };
    xhttp.open("POST", "demo_post2.asp", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`data=${data}`);
}
function deleteF(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            loadDataF();
      }
    };
    xhttp.open("POST", "demo_post2.asp", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`id=${id}`);
}
function setValue(i){
      idF = dataF[i].FID;  
      startF = dataF[i].Start;
      endF = dataF[i].End;
      nameF = dataF[i].Name;
      UsageF = dataF[i].Usage;
      conditionF = dataF[i].Condition;
      unitF = dataF[i].Unit;
      aF = dataF[i].EQ1;
      bF = dataF[i].EQ2;
      iconF = dataF[i].Icon;
}
function setUpdateF(){
      idF =   $("input[name='id']").val();
      nameF = $("input[name='name']").val();
      conditionF = $("input[name='condition']").val();
      unitF = dataF[i]. $("input[name='unit']").val()
      aF =  $("input[name='a']").val();
      bF =  $("input[name='b']").val();
      iconF = $("input[name='icon']").val();
      startF = 
      endF = 
      UsageF = 
}